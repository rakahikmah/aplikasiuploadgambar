<?php 
session_start();
if (!isset($_SESSION['user'])) {
	header("location:login.php");	
}elseif (isset($_SESSION['user'])) {
	$superhak = false;
	if (hak($_SESSION['user'])==1) {
		$superhak=true;
	}
}
?>