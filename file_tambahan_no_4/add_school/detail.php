<?php
 require '../conn.php';
  $id = $_GET['id'];
     $query = mysqli_query($conn, "SELECT school_db.id,school_db.name_school,school_db.school_level, school_db.addres,school_db.NPSN ,school_db.logo_school, school_db.status_school, user.names FROM school_db
JOIN user
ON school_db.id_user = user.id
WHERE school_db.id=$id");


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <title>School Data</title>
  
</head>

<body>

<div>

  <div class="card mb-3 m-5 p-5" style="max-width: 800px;">
 <div class="row g-0">
      <div class="col-md-4">
      <?php while ($row = mysqli_fetch_assoc($query)):  ?>
      <img src="img/<?=$row['logo_school'];?>" width="350px" >
      </div>
      </div>
     
      
      <!-- <div class="col-md-8"> -->
      <div class="card-body">
      
        <p class="card-title"><b>NPSN : <?=$row['NPSN']; ?></b></p>
        <p class="card-text"><b>Nama Sekolah : <?=$row['name_school']; ?></b></p>
        <p class="card-text"><b>Address : <?=$row['addres']; ?></b> </p>
        <p class="card-text"><b>Level Sekolah : <?=$row['school_level']; ?></b> </p>
        <p class="card-text"><b>Status Sekolah : <?=$row['status_school']; ?></b> </p>
        <p class="card-text"><b>Dibuat oleh : <?=$row['names']; ?></b> </p>
         <a href="edit.php?id=<?=$row['id']; ?>" class="btn btn-primary">Edit</a>
         <a href="delete.php?id=<?=$row['id']; ?>" class="btn btn-primary">Delete</a>
      <!-- </div> -->
    </div>
    <button type="button" class="btn btn-link col-md-2" onclick="document.location.href='../4.php';">Back</button>
      <?php endwhile; ?>
       <!-- button back -->
  
 </div>
 
  </div>
 
</div>

    
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>