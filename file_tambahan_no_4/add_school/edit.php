<?php

require '../conn.php';
if(isset($_GET['id'])){
$id = $_GET['id'];
$query =  mysqli_query($conn, "SELECT * FROM product WHERE id=$id");
$result = mysqli_fetch_assoc($query);
}

if(isset($_POST['submit'])){
  // echo var_dump($_POST);
  // exit;
  $id = $_GET['id'];
  $npsn = $_POST['npsn'];
  $image = $_FILES['logo_school']['name'];
  $imagesEror = $_FILES['logo_school']['error'];
  $imageLama = $_POST['gambarLama'];
  //cek apakah user memilih gambar baru atau tidak
  $ukuranFile = $_FILES['logo_school']['size'];
  $tmpName = $_FILES['logo_school']['tmp_name'];  
  $ektendGambarValid = ['jpg','jpeg','png'];
  $ekstendGambar = explode('.',$image);
  $ekstendGambar = strtolower(end($ekstendGambar));
  //batas
  $name_school = $_POST['name_school'];
  $address = $_POST['address'];
  $level = $_POST['school_level'];
  $status = $_POST['status'];
  $id_user = $_POST['id_user'];
  
  if($imagesEror==4){
    $image = $imageLama;
    $query = mysqli_query($conn, "UPDATE school_db SET name_school = '$name_school', addres = '$address', logo_school ='$image',school_level ='$level',status_school='$status', id_user ='$id_user' WHERE id=$id");
    if (mysqli_affected_rows($conn) > 0) {
      echo "<script>alert('data berhasil diubah!');
      document.location.href='../4.php';</script>";
     
    
        }
    // header("Location: ../home.php");

  }else{
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
    // echo "<script>alert('data berhasil ditambah')</script>";

    $query = mysqli_query($conn, "UPDATE school_db SET name_school = '$name_school', addres = '$address', logo_school ='$namaFileBaru',school_level ='$level',status_school='$status', id_user ='$id_user' WHERE id=$id");
//     echo 'berhasil';
 if (mysqli_affected_rows($conn) > 0) {
  echo "<script>alert('data berhasil diubah!');
  document.location.href='../4.php';</script>";
 

    }
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

    <title>Edit</title>
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
            <option selected>Pilih Status</option>
            <?php  $numbers = [NEGERI,SWASTA];?>
            <?php foreach( $numbers as $num): ?>
            <option value="<?=$num; ?>" <?= $result['id_distribusi'] == $num ? "selected" : "" ?>><?=$num; ?></option>
<?php endforeach; ?>

          </select>
        </div>
        <div class="form-group ">
          <label for="">Id_distribusi </label>
          <select class="custom-select" name="id_user">
          <option selected>Pilih id_user</option>
            <?php  $numbers = [1,2,3,4,5];?>
            <?php foreach( $numbers as $num): ?>
            <option value="<?=$num; ?>" <?= $result['id_distribusi'] == $num ? "selected" : "" ?>><?=$num; ?></option>
<?php endforeach; ?>>

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