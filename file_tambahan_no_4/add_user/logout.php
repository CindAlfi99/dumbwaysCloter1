

<?php
  
session_start();
session_destroy();
$_SESSION = [];
header("Location: ../add_school/index.php");
?>
