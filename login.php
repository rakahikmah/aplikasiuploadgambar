<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script scr="js/jquery.min.js"></script>
	<script src="js/login.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
	<title></title>
</head>
<body>
	
	<?php 
	$error="";
	if (isset($_GET['pesan'])) {
		$pesan=$_GET['pesan'];
		if ($pesan=='salah') {
			$error="username atau password anda salah";
		}
	}
	?>
<!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->

<div class="container">
    <div class="row vertical-offset-100">

    	<div class="col-md-4 col-md-offset-4">
    	<center><h2>Aplikasi Upload Gambar</h2></center>
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title" align="center">Silahkan Login</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="validasi.php">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Masukan Username" name="username" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Masukan Password" name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    	</fieldset>
			    	<center><font color="red"> <?php echo $error; ?></font></center>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

