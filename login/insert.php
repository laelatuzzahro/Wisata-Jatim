<?php
  session_start();
  if (empty($_SESSION['username'])) 
  {
    header("location:login_admin.php?pesan=belum_login");
  }
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wisata Sejarah</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Situs Bersejarah di Jawa Timur</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Beranda
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="jatim.php">Tentang</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="tampil_admin.php">Admin</a>
            </li>
             <li class="nav-item ">
              <a class="nav-link" href="logout.php">Log Out</a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>

    
    <!-- Page Content -->
    <div class="container">
      <br><br><br>
      <h2>Simpan Data</h2>
      <div class="row">
        <div class="col-lg-8">

          <?php 
          include 'rc4.php';
          include '../koneksi.php';
          // $konek= new mysqli('localhost','root','','pw');
          $kategori = rc4($_POST['k1']);
          $kota = rc4($_POST['kota']);
          $alamat = rc4($_POST['alamat']);
          $nama = rc4($_POST['nama']);
          $gambar =rc4($_POST['gambar']);
          $singkat = rc4($_POST['singkat']);
          $deskripsi =rc4($_POST['deskripsi']);
          $htm =rc4($_POST['htm']);
          $jambuka =rc4($_POST['jambuka']);
          $video =rc4($_POST['video']);
          $location =rc4($_POST['location']);
          $posttgl =rc4($_POST['post_tgl']);
          $query = mysqli_query($konek,"INSERT INTO data values('','$kategori','$kota','$alamat','$nama','$gambar','$singkat','$deskripsi','$htm','$jambuka','$video','$location','$posttgl','')"); 
          if ($query) {
            echo "Data berhasil disimpan";
            ?>
            <br>
            <a href="tampil_admin.php"><button class="btn btn-secondary" type="button"> Data </button></a>
      <?php  } else {
        echo "Data gagal disimpan";
        ?>
            <a href="tampil_admin.php"><button class="btn btn-secondary" type="button"> Data </button></a>
      <?php      } 

          ?>
        </div>
      </div>
      <!-- /.row -->
    </div>

    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
