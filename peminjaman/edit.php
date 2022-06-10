<?php
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $id_peminjaman = $_POST['id_peminjaman'];
    $id_pengguna = $_POST['id_pengguna'];
    $nama_pengguna = $_POST['nama_pengguna'];
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $id_pegawai = $_POST['id_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    
    $sql = "UPDATE peminjaman SET nama_pengguna='$nama_pengguna', nama_barang='$nama_barang', jumlah_barang='$jumlah_barang', tanggal_peminjaman='$tanggal_peminjaman', nama_pegawai='$nama_pegawai' WHERE id_peminjaman='$id_peminjaman'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
    header('Location: tampilpeminjaman.php');
    }else{
    header('Location: edit.php?status=gagal');
    }
}
?>