<?php
include '../koneksi.php'; //Manggil file koneksi
//Ambil data dari form pelanggan.html
if(isset($_POST['simpan'])) {
$id_pengembalian = $_POST['id_pengembalian'];
$nama_pengguna = $_POST['nama_pengguna'];
$nama_barang = $_POST['nama_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];
$nama_pegawai = $_POST['nama_pegawai'];
//Query mysql untuk menyimpan kedatabase
$sql = "INSERT INTO pengembalian (id_pengembalian, nama_pengguna, nama_barang, jumlah_barang, tanggal_pengembalian, nama_pegawai) VALUES ('$id_pengembalian', '$nama_pengguna', '$nama_barang', '$jumlah_barang', '$tanggal_pengembalian', '$nama_pegawai')";
$query = mysqli_query($connect, $sql);
//Cek jika proses simpan kedatabase berhasil
if ($query) {
    header('Location: tampilpengembalian.php');
}else{
    header('Location: simpan.php?status=gagal');
}
}
?>