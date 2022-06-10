<?php
include '../koneksi.php'; //Manggil file koneksi
//Ambil data dari form pelanggan.html
if(isset($_POST['simpan'])) {
$id_pengguna = $_POST['id_pengguna'];
$nama_pengguna = $_POST['nama_pengguna'];
$no_telepon = $_POST['no_telepon'];
$email = $_POST['email'];
//Query mysql untuk menyimpan kedatabase
$sql = "INSERT INTO pengguna (id_pengguna, nama_pengguna, no_telepon, email) VALUES ('$id_pengguna', '$nama_pengguna', '$no_telepon', '$email')";
$query = mysqli_query($connect, $sql);
//Cek jika proses simpan kedatabase berhasil
if ($query) {
    header('Location: tampilpengguna.php');
}else{
    header('Location: simpan.php?status=gagal');
}
}
?>