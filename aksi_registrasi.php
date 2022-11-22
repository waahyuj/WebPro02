<?php

include "koneksi.php";

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$status = 'Belum Aktif';

$cekEmail = mysqli_num_rows(mysqli_query($connection,"SELECT * FROM user WHERE email='$email'")); 

if ($cekEmail > 0 ) {
	echo '<script language="javascript">alert("maaf email telah terdaftar di sistem!"); history.back();</script>';
} else {


$result = mysqli_query($connection, "insert into user (email,username,password,status) values('$email','$username','$password','$status')");

if ($result) {
	echo '<script language="javascript">alert("data berhasil diupdate di sistem !"); document.location="login.php";</script>';
} else {
	echo '<script language="javascript">alert("maaf data gagal disimpan"); history.back();</script>';
};

}

?>

