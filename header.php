<head>
	<title>Official Site | Bintang Timur FC Surabaya</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- mengambil libarary boostrap -->
	<link rel="shortcut icon" type="image" href="img/btsLogoNobg.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://maxcdn.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
#customers {
	font-family: sans-serif;
	border-collapse: collapse;
	width: 100%;
}

#customers td, #customers th {
	border: 1px solid #ddd;
	padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover{background-color: #ddd;}

#customers th{
	padding-top: 12px;
	padding-bottom: 12px;
	text-align: left;
	background-color: #04AA6D;
	color: white;
}

.table-container{
	overflow: auto;
}
</style>

<?php

session_start();
if ($_SESSION['status'] != "login") {
	header("location:login.php?pesan=belum login");
}
?>
<div class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Bintang Timur Surabaya</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="view_user.php">Data User</a></li>
			<li><a href="#">Club</a></li>
			<li><a href="#">Schedule</a></li>
			<li><a href="#">Shop</a></li>
			<li><a href="#">About us</a></li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li><a href="#"><span class="glyphicon glyphicon-user"></span> Hallo <?php echo $_SESSION['username'];?></a></li>
			<li><a href="logout.php" onclick="return confirm('Yakin ingin keluar?')"><span class="glyphicon glyphicon-log-in"></span> Keluar</a></li>
		</ul>
	</div>
</div>