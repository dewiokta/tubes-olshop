<?php
session_start();
$id_produk=$_GET["id"];
unset($_SESSION["keranjang"][$id_produk]);

echo "<script>alert('Product have been deleted !);</script>";
header('location: cart.php');
?>