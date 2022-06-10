<?php
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $id_pengguna = $_POST['id_pengguna'];
    $nama_pengguna = $_POST['nama_pengguna'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    
    $sql = "UPDATE pengguna SET id_pengguna='$id_pengguna', nama_pengguna='$nama_pengguna', no_telepon='$no_telepon', email='$email' WHERE id_pengguna='$id_pengguna'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
    header('Location: tampilpengguna.php');
    }else{
    header('Location: edit.php?status=gagal');
    }
}
?>