
<style>
h2{
	color: white;
	font-size: 25px;
}
</style>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | Bintang Timur FC Surabaya</title>
	<link rel="shortcut icon" type="image" href="img/btsLogoNobg.png">
	<link rel="stylesheet" href="gaya.css">
</head>

<body>
<div class="login-page">
	<h2 style="text-align: center;">Login Form</h2>
	<div class="form">
		<form action="ceklogin.php" name="form" onsubmit="return validasiform()" method="post">
		<input type="text" name="username" placeholder="username">
		<input type="password" name="password" placeholder="password">
		<button>login</button>
		<p class="message">Not a member? <a href="registrasi.php">Sign Up</a></p>
		</form>
	</div>
</div>
</body>
</html>

<?php
//Fungsi isset dalam PHP untuk menanyakan apakah variabel di set (ada). Maka keluaran dari fungsi ini adalah TRUE atau FALSE. 
if (isset($_GET['pesan'])) {
	if ($_GET['pesan'] == "gagal") {
		echo '<script language="javascript">alert("Maaf username atau password salah!"); document.location="login.php";</script>';
	}elseif ($_GET['pesan'] == "logout") {
		echo '<script language="javascript">alert("Anda sudah logout!"); document.location="login.php";</script>';
	}elseif ($_GET['pesan'] == "belum login") {
		echo '<script language="javascript">alert("Silahkan login terlebih dahulu!"); document.location="login.php";</script>';
	}elseif ($_GET['pesan'] == "belum aktif") {
		echo '<script language="javascript">alert("Maaf akun anda belum aktif!"); document.location="login.php";</script>';
	}
}
?>

<script type="text/javascript">
	function validasiform(){
		var username=document.forms['form']['username'].value;
		var password=document.forms['form']['password'].value;
		
		if (username.length == 0) {
			alert('Username harus diisi');
			return false;
		}
		if (password.length == 0) {
			alert('password harus diisi');
			return false;
		}
	}
</script>