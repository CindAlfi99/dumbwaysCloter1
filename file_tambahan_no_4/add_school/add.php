<?php
session_start();
require '../conn.php';

if(isset($_POST['submit'])){
  // var_dump($_FILES);
  // exit;
  // var_dump($_FILES); die;

  $npsn = $_POST['npsn'];

// $image = $_POST['foto'];
//uplod gambar
// $image = upload();
// function upload(){
//  if(isset($image)){

    $namaFile = $_FILES['logo_school']['name'];
    $ukuranFile = $_FILES['logo_school']['size'];
    $tmpName = $_FILES['logo_school']['tmp_name'];  
    $error = $_FILES['logo_school']['error'];  
    $ektendGambarValid = ['jpg','jpeg','png'];
    $ekstendGambar = explode('.',$namaFile);
    $ekstendGambar = strtolower(end($ekstendGambar));
    // //cek ada tidak gmbar 
    if(isset($namaFile)){
    if($error ==4){
      echo "<script>alert('masukkan gambar');</script>";
     
      exit;
    }
    // //cek gambar atau bukan
    
    // $ektendGambarValid = ['jpg','jpeg','png'];
    // $ekstendGambar = explode('.',$namaFile);
    // $ekstendGambar = strtolower(end($ekstendGambar));
    if(!in_array($ekstendGambar,$ektendGambarValid)){
      echo "<script>alert('bukan  gambar');</script>";
     
      exit;
    }
    // //cek jika ukuran terlalu besar
    if($ukuranFile > 1000000){
      echo "<script>alert('ukuran gambar terlalu besar');</script>";
     
      exit;
    }
    //lolos cek
    //generate nama gambar baru
    
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstendGambar;
   
    move_uploaded_file($tmpName,'img/'.$namaFileBaru);
    echo "<script>alert('data berhasil ditambah')</script>";
    // return $namaFile;
    

// }
// }

// if(!$image){
//   echo "<script>alert('bukan gambar')</script>";
//   return false;
   
// }


$name_school = $_POST['name_school'];
$address = $_POST['address'];
$level = $_POST['school_level'];
$status = $_POST['status'];
$id_user = $_POST['id_user'];

    $query = mysqli_query($conn, "INSERT INTO school_db VALUES('','$name','$name_school','$namaFileBaru','$level','$status','$id_user')");

//     if(isset($query)) {
   //  $_SESSION['add'] = true;
 
//  if (mysqli_affected_rows($conn) > 0) {
//   header('Location: ../home.php');
// }
//     }
  }
  
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <title>Add</title>
  </head>
  <body>

 <div class="container">
 <form class="mt-4" method="post" action="" enctype="multipart/form-data">
      <div class="form-row d-block">
   
        <div class="form-group ">
          <label for="name">NPSN </label>
          <input type="text" name="npsn" class="form-control" id="name">
        </div>
        <div class="form-row d-block">
   
        <div class="form-group ">
          <label for="name_school">Name School </label>
          <input type="text" name="name_school" class="form-control" id="name_school">
        </div>
        <div class="form-group">
        <div>
        
  <label for="address" class="form-label">Address</label>
  <textarea class="form-control" id="address" rows="2" name="address"></textarea>
</div>
        </div>
        <div class="form-group">
<div>
                
         <label for="inputZip">Logo School</label>
        <div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02" name="logo_school">
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div> 
         
        <!-- <label for="inputZip">Foto</label>
        <div class="input-group mb-5">
  <input type="text" class="form-control" id="inputGroupFile02" name="foto">
  <label class="input-group-text" for="inputGroupFile02" >Upload</label>
</div> -->
 
</div>
        </div>
        <div class="form-group ">
          <label for="level">School Level </label>
          <input type="text" name="school_level" class="form-control" id="level">
        </div>
 
      </div>

      <div class="form-row d-block">
        <!-- <div class="form-group">
          <label for="inputCity">Status School</label>
          <input type="" name="porsi" class="form-control" id="inputCity">
        </div> -->
        <div class="form-group ">
          <label for="status">Status School </label>
          <select class="custom-select" name="status">
            <option selected>Status School</option>
            <?php  $numbers = [NEGERI,SWASTA];?>
            <?php foreach( $numbers as $num): ?>
            <option value="<?=$num; ?>"><?=$num; ?></option>
<?php endforeach; ?>

          </select>
        </div>
        <div class="form-group ">
          <label for="">Id_distribusi </label>
          <select class="custom-select" name="id_user">
            <option selected>Pilih id_user</option>
            <?php  $numbers = [1,2,3,4,5];?>
            <?php foreach( $numbers as $num): ?>
            <option value="<?=$num; ?>"><?=$num; ?></option>
<?php endforeach; ?>

          </select>
        </div>




       
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Add data</button>
    </form>
    <!-- button back -->
    <button type="button" class="btn btn-link mt-5 float-right" onclick="document.location.href='../home.php';">Back</button>
  </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
  </body>
</html>