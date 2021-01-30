<?php

require '../conn.php';
if(isset($_GET['id'])){
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM school_db WHERE id=$id");
if($query){
    
    echo  "window.location ='../4.php' </script> ";

}
}else{
    echo "<script>
    window.location ='../l4.php'
    </script>";
    
    exit;
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

    <title>Delete</title>
  </head>
  <body>


    <script src="../js/bootstrap.bundle.min.js"></script>
  </body>
</html>