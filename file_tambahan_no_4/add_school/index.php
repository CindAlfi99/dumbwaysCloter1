<?php
session_start();
require '../conn.php';

if(isset($_POST['button1'])){


$name= $_POST['names'];
$password = $_POST['password'];
$query = mysqli_query($conn, "SELECT names FROM user WHERE names = '$name' AND passwords ='$password'");


if(mysqli_num_rows($query)>0){
    $_SESSION['user'] = true;
    echo "<script>alert('Berhasil login!');
    document.location.href='add.php';
    </script>";
   
}else{
    echo "<script>alert('Anda gagal login!');
    document.location.href='index.php';
    </script>";
}

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Login</title>
    <style>
        .navbar {
            margin-top: 17%;
            margin-left: 38%;
        }
        
        .navbarr {
            margin-left: 39.5%;
        }
        
        button {
            width: 15%;
        }
        
        .register {
            margin-left: 41%;
            margin-top: 3%;
        }
        
        h2 {
            margin-top: -5%;
            position: absolute;
            margin-left: 32%;
        }
    </style>


</head>

<body>

    <div class="container bg-light">

        

            <h2>Log In</h2>
            <div class="login">
          <form action="" method="post">
            <nav class="navbar navbar-light">
                <div class="form-inline">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><img src="img/user.png" width="20px"height="20px"></span>
                        </div>
                        <!-- input label -->
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="names" id="username"aria-describedby="basic-addon1">
                    </div>
                </div>
            </nav>
            <nav class="navbarr navbar-light">
                <div class="form-inline">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><img src="img/padlock.png" width="20px"height="20px"></span>
                        </div>
                        <!-- input label -->
                        <input type="password" class="form-control" name="password" id="password"placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                    </div>
                </div>
                <!-- remember me -->
                <div class="form-group mt-1">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="remember" id="dropdownCheck">
                        <label class="form-check-label" for="dropdownCheck">
                    Remember me
                  </label>
                    </div>
                </div>
                <!-- button -->
                <div>
                    <button type="submit" name="button1"class="btn btn-primary btn-sm p-1 ">Sign In</button>

                    <button type="submit" name="button2" class="btn btn-outline-success p-1"><a href="signup.php">Sign Up</a></button>
                </div>
                <div>
            </nav>
            </div>
            </form>
            
            <!-- register -->
            <div class="register">
                <span>I'am a new user. <a href="../add_user/add.php">Sign Up</a></span>




            </div>

            <!-- batas -->


            <script src="jquery/jquery.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>