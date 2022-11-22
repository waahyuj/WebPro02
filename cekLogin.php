<?php

//untuk mendefinisikan kunci awal login
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

/* 
datanya di select di database berdasarkan inputan
*/

$data=mysqli_query($connection, "SELECT * FROM user WHERE username = '$username' AND password ='$password'"); //ganti user

/* 
di cek di row atau baris tabel record apakah ada data di database yang sesuai dengan inputan
*/

/* 
num_rows menampilkan hasil angka
ini kalau di tampilkan hasilnya 0/1
*/
$cek = mysqli_num_rows($data);

//menampilkan data array dari database
$row = $data->fetch_assoc(); 

/* 
Session adalah cara yang digunakan untuk menyimpan data user pada server komputer untuk 
digunakan pada beberapa halaman termasuk halaman itu sendiri. 
Session menyimpan informasi ke dalam bentuk variabel super global $_SESSION. 
*/

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";

	//menyimpan variabel hasil dari select data saat login
	$status = $row['status'];
	if ($status == 'Aktif') {
		header("location:view_user.php"); 
	}else{
		header("location:login.php?pesan=belum aktif");
	}
	
} 

// jika nilainya salah $cek < 0

else
{
header("location:login.php?pesan=gagal");
}

?>



