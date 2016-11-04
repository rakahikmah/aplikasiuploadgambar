<?php
// kita koneksikan dulu ke file koneksi php
require_once 'ceksession.php';
require_once 'koneksi.php';
//lalu kita ambil data yang dikirim dari form
$name_foto = $_FILES['gambar']['name'];
$size_foto = $_FILES['gambar']['size'];
$type_foto = $_FILES['gambar']['type'];
$tmp_foto  = $_FILES['gambar']['tmp_name'];
//lalu kita buat path atau file yang akan kita oper kemana
$path = "gambar/".$name_foto;
echo $tmp_foto;
// lalu kita buat logicnya
if ($nama_foto ="image/jpeg" || $nama_foto = "image/png") {
	if ($size_foto <= 10000000) {
		if (move_uploaded_file($tmp_foto,$path)) {
					$query 	 = "INSERT INTO gambar (nama,ukuran,tipe) VALUES('$name_foto','$size_foto','$type_foto')";
					$sql 	 =mysqli_query($connect, $query);
			if ($sql){
					header("location:index.php?berhasil=sukses");
			}else{
				echo "maaf ada kesalahan pada query atau hal lain"."<br>";
				echo "<a href='form.php'>kembali keform</a>";
				}
			}
	}else{
		echo "maaf ukuran gambar anda terlalu besar"."<br>";
		echo "<a href='form.php'>kembali keform</a>";
	}
}else{
	echo "maaf file tidak sesui type png atau jpg";
	echo "<a href='form.php'>kembali keform</a>";
}
?>