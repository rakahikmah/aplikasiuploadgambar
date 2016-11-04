<?php 

session_start();
unset($_SESSION);
session_destroy();
if (!isset($_SESSION)) {
	header("location:login.php");
}

 ?>