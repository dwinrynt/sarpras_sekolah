<?php
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    
    $sql = "UPDATE barang SET id_barang='$id_barang', nama_barang='$nama_barang' WHERE id_barang='$id_barang'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
    header('Location: tampilbarang.php');
    }else{
    header('Location: edit.php?status=gagal');
    }
}
?>