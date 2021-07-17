<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript" language="JavaScript">
      function coba(val,val1){
        window.alert("Anda Telah memberi penilaian");
        window.location.href = "rating.php?rating=" + val+"&no="+val1; 
      }
    </script>
    <title>Wisata Sejarah</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

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
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Beranda
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="jatim.php">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Admin</a>
            </li>    
          </ul>
        </div>
      </div>
    </nav>

    
    <!-- Page Content -->
    <div class="container"> 
      <div class="row">

              <!-- Post Content Column -->
             <?php 
               include "koneksi.php";
               $no = $_GET['no'];
               $query = mysqli_query($konek,"SELECT * FROM data where no=$no");
               while ($details = mysqli_fetch_array($query)) 
               {
             ?>
        <div class="col-md-8">
         
          <!-- Title -->
          <h1 class="mt-4"><?php echo $details['nama']?></h1>

          <!-- Author -->
          <p class="lead">
            by Admin
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on <?php echo $details['post_tgl']?></p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="<?php echo $details['gambar']; ?>" alt="Card image cap" width="750px" height="300px">

          <hr>

          <!-- Post Content -->
          <p class="lead">
            Kota/Kabupaten : <?php echo $details['kota'];?><br>
            Alamat : <?php echo $details['alamat']; ?><br>
            Jam buka : <?php echo $details['jambuka']; ?><br>
            HTM : <?php echo $details['htm']; ?><br>
          </p>

          <p style="text-align: justify;">&nbsp; &nbsp; &nbsp;<?php echo $details['singkat']; ?></p>

          <p style="text-align: justify;">&nbsp; &nbsp; &nbsp;<?php echo $details['deskripsi']; ?></p>  
         

        </div>
         
       <div class="col-md-4" style="padding-top: 175px; padding-left: 30px;">
          <div class="card my-4">   
            <h5 class="card-header">Rating Stars</h5>
           <div class="rating">
            <span class="fa fa-star" onclick="coba(5,<?=$no?>)"></span><span class="fa fa-star" onclick="coba(4,<?=$no?>)"></span><span class="fa fa-star" onclick="coba(3,<?=$no?>)"></span><span class="fa fa-star" onclick="coba(2,<?=$no?>)"></span><span class="fa fa-star" onclick="coba(1,<?=$no?>)"></span>
              </div>
            <div class="card-body">
              Video :
              <iframe width="300" height="250" src="<?php echo $details['video'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              Location :
             <iframe  src="<?php echo $details['location'];?>"  width="300" height="250" frameborder="0" style="border:0" allowfullscreen ></iframe>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <?php  }?>

    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
