<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    header('Location: tampilpengguna.php');
}

$id_pengguna = $_GET['id_pengguna'];

$sql = "DELETE FROM pengguna WHERE id_pengguna='$id_pengguna'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location: tampilpengguna.php');
}else{
    header('Location: hapus.php?status=gagal');
}
?>