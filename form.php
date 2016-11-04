<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>form upload</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php require_once 'koneksi.php'; ?>
		<?php require_once 'fungsi.php'; ?>
		<?php require_once 'ceksession.php'; ?>
		<div class="container">
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					
				</div>

				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

					<form action="upload.php" method="post" role="form" enctype="multipart/form-data">
						<legend><center>Form Upload Foto</center></legend>
						<div class="form-group">
							<label for="exampleInputFile">Pilih Foto</label>
							<input type="file" id="exampleInputFile" name="gambar">
						</div>
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-9">
								<button type="submit"  class="btn btn-primary">Upload</button>
							</div>
						</div>	
						</form>

					</div>

					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						
					</div>
					
				</div>
			</div>
		</body>
	</html>