<?php

include "koneksi.php";

$id = $_GET['id_user']; // ganti user
$result = mysqli_query($connection, "DELETE FROM user WHERE id_user = $id");

echo '<script language="javascript">alert("data berhasil dihapus !"); document.location="view_user.php";</script>'; //ganti nama file

?>