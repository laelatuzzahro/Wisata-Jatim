<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wisata Sejarah/Candi</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Peninggalan Candi di Jawa Timur</a>
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

        <!-- Blog Entries Column -->
        <div class="col-md-8">
          <br>
          <!-- Blog Post -->
          
          <?php
            include "koneksi.php";
            
            $query = mysqli_query($konek,"Select * from data where kategori='candi'");
            while ($artikel = mysqli_fetch_array($query)) {
        
              ?>
           <div class="card mb-4">
            <img class="card-img-top" src="<?php echo $artikel['gambar'];?>" alt="Card image cap" width="750px" height="300px">
            <div class="card-body">
              <h2 class="card-title"><?php echo $artikel['nama'];?></h2>
              <p style="text-align: justify;" class="card-text"><?php echo $artikel['singkat']?></p>
              <a href="details.php?no=<?php echo $artikel['no'];?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo $artikel['post_tgl'];?> by Admin
            </div> 
          </div>
              <?php } ?>     

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Pencarian</h5>
            <div class="card-body">
              <div class="input-group">
                <form method="POST" action="search.php" >
                <input type="text" class="form" name="cari" placeholder="Cari berdasarkan kota/kab">
                <span class="input-group-btn">
                  <button  class="btn btn-secondary" type="submit">Cari</button>
                </form>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Kategori</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="candi.php">Candi</a>
                    </li>
                    <li>
                      <a href="monumen.php">Monumen</a>
                    </li>
                    <li>
                      <a href="religi.php">Religi</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">   
            <h5 class="card-header">Jawa Timur</h5>
            <div class="card-body">
             <table>
               <tr>
                 <td> <img src="icon.png" width="150px" height="150px"></td>
                 <td> <img src="index.jpg" width="130px" height="130px"></td>
               </tr>
             </table>
            </div>
          </div>

        </div>

      </div>


    </div>


    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2018</p>
      </div>

    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
