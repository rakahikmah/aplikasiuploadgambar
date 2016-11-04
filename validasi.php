<?php 

require_once 'koneksi.php';

function escape($data){
	global $connect;
	return mysqli_real_escape_string($connect,$data);
}

$nama = escape($_POST['username']);
$pass = escape($_POST['password']);



$query = "SELECT * FROM bos WHERE username='$nama' AND password=MD5('$pass')";
$sql = mysqli_query($connect,$query);
$cek = mysqli_num_rows($sql);

if ($cek == true) {
	session_start();
	$_SESSION['user']=$nama;
	header("location:view.php");
}else{
	header("location:login.php?pesan=salah");
}

 // CREATE TABLE ter ( id int NOT NULL auto_increment,username VARCHAR(15) NOT NULL,password VARCHAR(32) not null, PRIMARY KEY (id));

 ?>