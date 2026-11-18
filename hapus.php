<?php
include_once 'koneksi.php';

$id = (int) $_GET['id'];
$sql = "DELETE FROM data_barang WHERE id_barang = {$id}";
$result = mysqli_query($conn, $sql);

header('location: index.php');
exit;
?>
