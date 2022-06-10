<?php
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $id_pengembalian = $_POST['id_pengembalian'];
    $id_pengguna = $_POST['id_pengguna'];
    $nama_pengguna = $_POST['nama_pengguna'];
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
    $id_pegawai = $_POST['id_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    
    $sql = "UPDATE pengembalian SET nama_pengguna='$nama_pengguna', nama_barang='$nama_barang', jumlah_barang='$jumlah_barang', tanggal_pengembalian='$tanggal_pengembalian', nama_pegawai='$nama_pegawai' WHERE id_pengembalian='$id_pengembalian'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
    header('Location: tampilpengembalian.php');
    }else{
    header('Location: edit.php?status=gagal');
    }
}
?>