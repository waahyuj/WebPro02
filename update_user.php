<?php

include "koneksi.php";

$id = $_POST['id_user']; //ganti user
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$status = $_POST['status'];


$result = mysqli_query($connection, "UPDATE user SET email = '$email', username = '$username', password = '$password', status = '$status' WHERE id_user = '$id'");

if ($result > 0) {
    //ganti nama file
	echo '<script language="javascript">alert("data berhasil diupdate di sistem !"); document.location="view_user.php";</script>';
} else {
	echo '<script language="javascript">alert("maaf data gagal disimpan"); history.back();</script>';
};

?>