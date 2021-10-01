<?php 

session_start();

unset($_SESSION['cusid']);

header("location:index.php");
 ?>