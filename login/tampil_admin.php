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
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
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
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Log Out</a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>

    

   <!-- table -->
   <br><br><br>
   <div class="container">
  <div class="row">
        <div class="col-md-12">
        <h4>Data Artikel </h4><br>
        <a href="tambah.php"><button class="btn btn-primary" type="button">Tambah Data + </button></a><br><br>
        <div class="input-group">
                <input type="text" class="form-control" name="cari" id="keyword" placeholder="Cari berdasarkan kota/kab">
              </div>
              <br>
        <div class="table-responsive">

              
              <table id="mytable" class="table table-bordred table-striped">
                    
                   <thead>
                   
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>No</th>
                    <th>Kategori</th>
                     <th>Kota/Kab</th>
                     <th>Alamat</th>
                     <th>Nama</th>
                     <th>Gambar</th>
                      <th>Tanggal Post</th>
                       <th colspan="2" align="text-center" >Aksi</th>
                       
                   </thead>
    <tbody>
     
           <tr> <?php 
                    include 'rc4.php';
                    $konek = new mysqli('localhost','root','','pw');
                    
                     $query = mysqli_query($konek,"SELECT * FROM data");
                     while ($data = mysqli_fetch_array($query)) 
                      {
                       
                         ?>
  
    <td><input type="checkbox" class="checkthis" /></td>
    <td><?php echo $data['no']; ?></td>
    <td><?php echo rc4($data['kategori']);?></td>
    <td><?php echo rc4($data['kota']);?></td>
    <td><?php echo rc4($data['alamat']);?></td>
    <td><?php echo rc4($data['nama']);?></td>
    <td><img src="<?php echo rc4($data['gambar']);?>" width = 100px height = 50px></td>
    <td><?php echo rc4($data['post_tgl']);?></td>
    <td><a href="edit.php?no=<?php echo rc4($data['no']); ?>"><button class="btn btn-secondary" type="button" >Edit</button></a></td>
    <td><a href="hapus.php?no=<?php echo rc4($data['no']); ?>"><button class="btn btn-secondary" type="button" >Delete</button></a></td>
    </tr>
     <?php } ?>
    </tbody>

   </table>
     </div>
            
        </div>
  </div>
</div>
<a href="">Tambah data</a>
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

    <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  </body>

</html>
