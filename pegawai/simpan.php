<?php
include '../koneksi.php'; //Manggil file koneksi
//Ambil data dari form pelanggan.html
if(isset($_POST['simpan'])) {
$id_pegawai = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$no_telepon = $_POST['no_telepon'];
$email = $_POST['email'];
//Query mysql untuk menyimpan kedatabase
$sql = "INSERT INTO pegawai (id_pegawai, nama_pegawai, no_telepon, email) VALUES ('$id_pegawai', '$nama_pegawai', '$no_telepon', '$email')";
$query = mysqli_query($connect, $sql);
//Cek jika proses simpan kedatabase berhasil
if ($query) {
    header('Location: tampilpegawai.php');
}else{
    header('Location: simpan.php?status=gagal');
}
}
?>