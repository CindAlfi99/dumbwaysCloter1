<?php
 require 'conn.php';
 require 'template/template.php';

$query = mysqli_query($conn, "SELECT school_db.id, school.logo_school, school_db.status_school ,school_db.name_school FROM school_db 
JOIN user
ON school_db.id_user = user.id" );

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>School data</title>
  
</head>

<body>

<h1 class="mt-5 m-3">School Data</h1>

<div style="float:right;" class="mr-5 "><a href="add_school/add.php"><button class="btn btn-primary">Add School</button></a></div>
<div style="float:right;" class="mr-5 "><a href="add_user/add.php"><button class="btn btn-primary">Add User</button></a></div>
<br>
<div class="row mt-5 m-5">


<?php while ($row = mysqli_fetch_assoc($query)):  ?>
  <div class="col-3 mt-5">
  <div class="card " style="width: 18rem;">
  <img src="file_tambahan_no_4/add_school/img/<?= $row['logo_school']?>" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title"><?= $row['name_school'] ?></h5>
    <p class="card-text"><?= $row['status_school']?></p>
   
  </div>
  
<a href="file_tambahan_no_4/add_school/detail.php?id=<?=$row['id']; ?>" class="btn btn-primary">Detail</a>

</div>
</div>
<?php endwhile; ?>

</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>