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
      <h2>Tambah Data</h2>
      <div class="row">
        <div class="col-lg-8">
            
          <form method="POST" action="insert.php">
         
            <div class="form-group">
              <label >Kategori : </label>
              <br>
              <label class="radio-inline">
                  <input type="radio" name="k1" value="candi" checked="candi">Candi &nbsp;
                        <input type="radio" name="k1" value="monumen" >Monumen &nbsp;
                           <input type="radio" name="k1" value="religi" >Religi &nbsp;
                </label>
            </div>
            <div class="form-group">
             <label >Kota/Kabupaten : </label>
               <input type="text" class="form-control" name="kota" >
            </div>
            <div class="form-group">
             <label >Alamat</label>
               <textarea class="form-control" rows="5" name="alamat"></textarea>
             </div>
             <div class="form-group">
             <label >Nama : </label>
               <input type="text" class="form-control" name="nama" >
            </div>
            <div class="form-group">
             <label >Gambar : </label>
               <input type="file" class="form-control" name="gambar">
            </div>
             <div class="form-group">
             <label >Singkat :</label>
               <textarea class="form-control" rows="5" name="singkat" ></textarea>
             </div>
            <div class="form-group">
             <label >Deskripsi :</label>
               <textarea class="form-control" rows="5" name="deskripsi" ></textarea>
             </div>
               <div class="form-group">
             <label >HTM : </label>
               <input type="text" class="form-control" name="htm" >
            </div>
              <div class="form-group">
             <label >Jam Buka : </label>
               <input type="text" class="form-control" name="jambuka" >
            </div>
             
              <div class="form-group">
             <label >Link Video : </label>
               <input type="text" class="form-control" name="video" >
            </div>
             
              <div class="form-group">
             <label >Link Location : </label>
               <input type="text" class="form-control" name="location" >
            </div>
             
            <div class="form-group">
             <label >Tanggal Posting : </label>
               <input type="text" class="form-control" id="tgl" name="post_tgl" >
            </div>
             <div class="form-group">
            <button class="btn btn-secondary" type="submit">Tambah</button>
            </div>
           
          
             
          </form>

          
         

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
