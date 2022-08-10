<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible"content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<style type="text/css">
		.bulu{
			width: 20px;
			height: 15px;
			background-color: lightblue;
		}
	</style>
</head>
<body>
	
	<div class="login">

		<div class="avatar">
		  <i class="fa fa-user"></i>
		</div>

		<h2>Login User</h2>
    <form method="post">
		<div class="box-login">
		  <i class="fas fa-envelope"></i>
		<input type="text" placeholder="Email" name="email" id="email" autocomplete="off" required>
		</div>

		<div class="box-login">
		  <i class="fas fa-lock"></i>
		  <input type="password" placeholder="Password" id="pswd" name="pswd" required>
		</div>

		<button type="submit" class="btn-login" name="blogin" id="blogin">Login</button>
<br>
		
	</div>

	</body>
</html>
<?php

function debugLog($o) {
 $file_debug = 'log/' . 'logharian' . date("Y-m-d") . '.log'; 
 $file_bulan = 'log/' . 'logbulanan' . date("Y-m") . '.log';
 ob_start();
 var_dump($o);
 $c = ob_get_contents();
 ob_end_clean();

 $f = fopen($file_debug, "a+");
 $fbul=fopen($file_bulan, "a+");
  
 fputs($f, "$c\n");
 fputs($fbul,"$c\n");
  
 fflush($f);
 fflush($fbul);
  
 fclose($f);
 fclose($fbul);
}

if (isset($_POST['blogin'])) {
	$email=filter_var($_POST['email'],FILTER_SANITIZE_STRING);
	$pswd=filter_var($_POST['pswd'],FILTER_SANITIZE_STRING);
	$koneksi=new mysqli('localhost','root','','dbmssmk');
	$sql="select * from user where email = '".$email."' and password='".$pswd."'";
	$q=$koneksi->query($sql);
	$r=$q->fetch_array();

	debugLog($email.'|'.$pswd.'|'.date("YmDHis").'|'.$_SERVER['SERVER_ADDR']);

	if (!empty($r)) {
		 if (!isset($_SESSION)) session_start();
		 $sessionname='mss'.date('Ymd');
		 $_SESSION[$sessionname]=date('YmDHis');
		 echo "<script>window.location.href='menuutama.php';</script>";
	 } else {
		 echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
 <strong>Anda Tidak Terdaftar !</strong> Jangan Coba-Coba Login !.
</div>';
	 }	 
 }
?>

