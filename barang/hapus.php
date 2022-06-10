<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    header('Location: tampilbarang.php');
}

$id_barang = $_GET['id_barang'];

$sql = "DELETE FROM barang WHERE id_barang='$id_barang'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location: tampilbarang.php');
}else{
    header('Location: hapus.php?status=gagal');
}
?>