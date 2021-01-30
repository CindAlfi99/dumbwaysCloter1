
<?php
// session_start();
require '../conn.php';

if(isset($_POST['submit'])){


  $name = $_POST['name'];
    $email= $_POST['email'];
    $pass= $_POST['password'];
    $query = mysqli_query($conn, "INSERT INTO user VALUES('','$name','$email','$pass')");
    if(isset($query)){
    //  $_SESSION['add'] = true;
 
 if (mysqli_affected_rows($conn) > 0) {
  header('Location: ../4.php');
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

    <title>Hello!</title>
  </head>
  <body>

 <div class="container">
 <form class="mt-4" method="post" action="">
      <div class="form-row d-block">
   
        <div class="form-group ">
          <label for="name">Name </label>
          <input type="text" name="name" class="form-control" id="name">
        </div>
        
        <div class="form-group ">
          <label for="email">Email </label>
          <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="form-group ">
          <label for="password">Password </label>
          <input type="password" name="password" class="form-control" id="password">
        </div>
     
      </div>      
      <button type="submit" name="submit" class="btn btn-primary">Add user</button>
    </form>
    <!-- button back -->
    <button type="button" class="btn btn-link mt-5 float-right" onclick="document.location.href='../home.php';">Back</button>
  </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
  </body>
</html>