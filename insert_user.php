<?php

include "koneksi.php";

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$status = $_POST['status'];;

$cekEmail = mysqli_num_rows(mysqli_query($connection,"SELECT * FROM user WHERE email='$email'"));//ganti user

if ($cekEmail > 0 ) {
	echo '<script language="javascript">alert("maaf email telah terdaftar di sistem!"); history.back();</script>';
} else {

$result = mysqli_query($connection, "insert into user (email,username,password,status) values('$email','$username','$password','$status')");

//jika benar
if ($result){
	echo '<script language="javascript">alert("data berhasil disimpan di sistem !"); document.location="view_user.php";</script>';//ganti nama file
//jika salah
} else {
	echo '<script language="javascript">alert("maaf data gagal disimpan"); history.back();</script>';
};

}
?>