<?php
session_start();

session_destroy();

echo "<script>alert('Anda Telah Logout! ');</script>";
header('location:beranda.html');
?>