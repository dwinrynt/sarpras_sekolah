<?php
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    
    $sql = "UPDATE inventory SET id_barang='$id_barang', nama_barang='$nama_barang', jumlah_barang='$jumlah_barang' WHERE id_barang='$id_barang'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
    header('Location: tampilinventory.php');
    }else{
    header('Location: edit.php?status=gagal');
    }
}
?>