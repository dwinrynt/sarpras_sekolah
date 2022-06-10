<?php
include '../koneksi.php';
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Data Peminjaman</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../peminjaman/tampilpeminjaman.php" class="nav-link">← Back</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../dashboard.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sarana Prasarana</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Dwi Nuryanto</a>
        </div>
      </div>

      <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Peminjaman</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <br><br><br>
            </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    <?php
include '../koneksi.php';
    //Ambil id query
    $id_peminjaman = $_GET['id_peminjaman'];
    $sql = "SELECT * FROM peminjaman WHERE id_peminjaman='$id_peminjaman'";
    $query = mysqli_query($connect, $sql);
    $pel = mysqli_fetch_assoc($query);

// Jika data yg diedit gk ditemuin
if( mysqli_num_rows($query) < 1 ){
    die("Data Tidak Ditemukan...");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Peminjaman</title>
</head>
<body>
<form action="edit.php" method="POST">
        <div class="text-center">
        <input type="hidden" name="id_peminjaman" value="<?php echo $pel['id_peminjaman']?>"/>
        <p><label>Nama Pengguna &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <input type="text" name="nama_pengguna" value="<?php echo $pel['nama_pengguna']?>"></label></p>
        <p><label>  Nama Barang &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 
              <select name="nama barang" value="<?php echo $pel['jumlah_barang']?>" style="width: 170px;">
              <option value="proyektor">Proyektor</option>
              <option value="laptop">Laptop</option>
              <option value="keyboard">Keyboard</option>
              <option value="mouse">Mouse</option>
              <option value="kabel roll">Kabel Roll</option>
            </select>
        </p>
        <p><label>Jumlah Barang &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <input type="text" name="jumlah_barang" value="<?php echo $pel['jumlah_barang']?>" style="width: 170px;"></label></p>
        <p><label>Tanggal Peminjaman : <input type="text" name="tanggal_peminjaman" value="<?php echo $pel['tanggal_peminjaman']?>" style="width: 170px;"></label></p>
        <p><label>Nama Pegawai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 
              <select name="nama pegawai" value="<?php echo $pel['nama_pegawai']?>" style="width: 170px;">
              <option value="fatah">Fatah</option>
              <option value="erraldo">Erraldo</option>
              <option value="ricky">Ricky</option>
              </select>
             </p>
        <button type="submit" class="btn btn-primary mt-4" name="simpan" value="simpan">Simpan</button>
        </div>
    </form>
</body>
</html>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>


