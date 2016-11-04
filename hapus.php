<?php 

require_once 'koneksi.php';
require_once 'fungsi.php';

if (isset($_GET['id'])) {
	$delete=hapus($_GET['id']);
	if ($delete) {
		header('location:view.php');
	}
}


 ?>