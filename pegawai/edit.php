<?php
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $id_pegawai = $_POST['id_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    
    $sql = "UPDATE pegawai SET id_pegawai='$id_pegawai', nama_pegawai='$nama_pegawai', no_telepon='$no_telepon', email='$email' WHERE id_pegawai='$id_pegawai'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
    header('Location: tampilpegawai.php');
    }else{
    header('Location: edit.php?status=gagal');
    }
}
?>