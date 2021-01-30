<?php
 require '../conn.php';
  $id = $_GET['id'];
     $query = mysqli_query($conn, "SELECT school_db.id,school_db.name_school, school_db.logo_school, school_db.status_school, user.names FROM school_db
JOIN user
ON school_db.id_user = user.id
WHERE school_db.id_user=$id");


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <title>Frozen Food</title>
  
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
      <h5 class="card-title"><?=$row['logo_school']; ?></h5>
        <h5 class="card-title">NPSN :<?=$row['NPSN']; ?></h5>
        <p class="card-text">Name Sekolah :<?=$row['name_school']; ?></p>
        <p class="card-text"><b>Address</b>: <?=$row['address']; ?></p>
        <p class="card-text"><b>Level Sekolah :</b>: <?=$row['school_level']; ?></p>
        <p class="card-text"><b>Status Sekolah:</b>: <?=$row['status_school']; ?></p>
        <p class="card-text"><b>Dibuat oleh :</b>: <?=$row['names']; ?></p>
         <a href="edit.php?id=<?=$row['id']; ?>" class="btn btn-primary">Edit</a>
         <a href="delete.php?id=<?=$row['id']; ?>" class="btn btn-primary">Delete</a>
      <!-- </div> -->
    </div>
      <?php endwhile; ?>
       <!-- button back -->
  
 </div>
 <button type="button" class="btn btn-link ml-5" onclick="document.location.href='../4.php';">Back</button>
  </div>
 
</div>

    
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>