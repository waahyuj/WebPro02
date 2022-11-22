<?php

session_start();

//menghapus session login
session_destroy();
header("location:login.php?pesan=logout");

?>