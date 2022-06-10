<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    header('Location: tampilpengembalian.php');
}

$id_pengembalian = $_GET['id_pengembalian'];

$sql = "DELETE FROM pengembalian WHERE id_pengembalian='$id_pengembalian'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location: tampilpengembalian.php');
}else{
    header('Location: hapus.php?status=gagal');
}
?>