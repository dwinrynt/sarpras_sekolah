<?php
include '../koneksi.php'; //Manggil file koneksi
//Ambil data dari form pelanggan.html
if(isset($_POST['simpan'])) {
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
//Query mysql untuk menyimpan kedatabase
$sql = "INSERT INTO inventory (id_barang, nama_barang, jumlah_barang) VALUES ('$id_barang', '$nama_barang', '$jumlah_barang')";
$query = mysqli_query($connect, $sql);
//Cek jika proses simpan kedatabase berhasil
if ($query) {
    header('Location: tampilinventory.php');
}else{
    header('Location: simpan.php?status=gagal');
}
}
?>