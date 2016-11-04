<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>foto</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/kelas.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php require_once 'koneksi.php'; ?>
		<?php require_once 'fungsi.php'; ?>
		<?php require_once 'ceksession.php'; ?>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<br>
					<br>
					<br>
					<?php
					
					$halaman=0;
					if (isset($_GET['halaman'])) {
						$batas=3;
						$halaman = $_GET['halaman'];
						if ($halaman == '') {
							$posisi=0;
						}else{
							$posisi=($halaman-1)*$batas;
						}
					}else{
						$posisi=0;
						$batas=3;
					}
					$notif ="";
					if (isset($_GET['berhasil'])) {
						$pesan=$_GET['berhasil'];
						if ($pesan=="sukses") {
							$notif ="anda berhasil memasukan data";
						}
					}
					?>
					<center>
					<h2>Aplikasi Sederhana Upload Gambar</h2>
					<?php echo $notif; ?>
					</center>
					
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<p>
						<?php if ($superhak == true) : ?>
							<a href="form.php"><button type="button" class="btn btn-primary">Tambah Data</button></a>
						<?php endif; ?>
							</p>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<p align="right"><a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a></p>
						</div>
					</div>
					
					<br>
					<br>
					
					<center>
					<div class="table-responsive">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th align="center">No</th>
									<th align="center">Gambar</th>
									<th align="center">Nama Foto</th>
									<th align="center">Ukuran Memori</th>
									<th align="center">Tipe Foto</th>
									<th align="opsi">Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$no=$posisi+1;
									$query="SELECT * FROM gambar LIMIT $posisi,$batas";
									$sql=mysqli_query($connect,$query);
									$row=mysqli_num_rows($sql);
									if ($row != 0) :
									while ($row = mysqli_fetch_assoc($sql)) : ?>
								<tr>
									<td><?=$no++; ?></td>
									<td> <?php echo "<img src=gambar/$row[nama] width=100 height=100>"; ?> </td>
									<td ><?=$row['nama'];?></td>
									<td ><?=$row['ukuran'];?></td>
									<td ><?=$row['tipe'];?></td>
									<td><a href="hapus.php?id=<?=$row['id'];?>" onClick="return tanya()"><button class="btn btn-warning" type="button">Hapus</button></a></td>
								</tr>
								<?php endwhile; ?>
								<?php else: ?>
								<tr>
									<td colspan="5"><h3 align="center">Data tidak ada silahkan anda tambah data dulu broo</h3></td>
								</tr>
								<?php endif; ?>
								
							</tbody>
						</table>
					</div>
					Halaman <br>
					<?php
						$sql2="SELECT * FROM gambar";
						$jmldata=mysqli_query($connect,$sql2);
						$jmldata=mysqli_num_rows($jmldata);
						$jml_halaman=ceil($jmldata/$batas);
					?>
					<nav aria-label="Page navigation">
						<ul class="pagination">
							<li>
								<?php if ($halaman>1) : ?>
								<a href=<?php echo "$_SERVER[PHP_SELF]?halaman=".($halaman-1); ?> aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
								</a>
								<?php endif; ?>
							</li>
							<?php
								for ($i=1; $i<=$jml_halaman; $i++) {
									if ($i==$halaman) {
										echo "<li class=active><a href='$_SERVER[PHP_SELF]?halaman=$i'>$i</a></li>";
									}else{
										echo "<li><a href='$_SERVER[PHP_SELF]?halaman=$i'>$i</a></li>";
									}
								}
							?>
							<li>
								<?php if ($halaman!=$jml_halaman): ?>
								<a href=<?php echo "$_SERVER[PHP_SELF]?halaman=".($halaman+1); ?> aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
								</a>
								<?php endif ?>
							</li>
						</ul>
					</nav>
					</center>
				</div>
			</div>
			<?php if ($sql) :
				
			endif; ?>
		</body>
	</html>