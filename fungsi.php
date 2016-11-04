<script language="javascript">
 		function tanya(){
 			if(confirm("apakah anda yakin ingin menghapus berita ini ?")){
 				return true;
 			}else{
 				return false;
 			}
 		} 
 	</script>
<?php 

function hak($nama){
global $connect;
$sql = "SELECT  akses FROM bos WHERE username='$nama' ";
$query= mysqli_query($connect,$sql);
if ($query) {
	while ($data=mysqli_fetch_assoc($query)) {
		$hasil = $data['akses'];
	}
	 return $hasil;
  }
}

function hapus($id){
	global $connect;
	$sql = "DELETE FROM gambar WHERE id='$id'";
	$query =mysqli_query($connect,$sql);
	return $query;
}

?>