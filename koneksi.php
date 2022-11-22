<?php

//sesuaikan nama local host 

//untuk konksi ke database dengan mendefinisikan nama server, user database, password database, nama database
$connection = new mysqli("localhost","root","","tubeswebpro") or die(mysqli_error());

	if (mysqli_connect_error()) {
	//kode untuk mengecek apakah koneksi database berhasil atau tidak 
	 echo "koneksi database gagal :" .mysqli_connect_error();
	 
	} else {
		//echo"koneksi ke database berhasil";
	} 


?>