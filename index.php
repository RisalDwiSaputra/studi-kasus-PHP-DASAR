<?php
    session_start();
    if(isset($_SESSION["login"])){
        header("location: login.php");
        exit;
    }
?>    
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Selamat Datang!</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">

  <style>
      .img-fluid{
        width: 450px;
        height: 250px;  
    }
      header.siswa2{
        background-image:url("images/ws2.jpg");
        -webkit-filter:saturate(90%);
    }
  </style>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      	<a class="navbar-brand js-scroll-trigger" href="#page-top" style="color:black;">SMKN 1 PROBOLINGGO</a>
      	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#jurusan" style="color:black;">Jurusan </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio" style="color:black;">Ekstra Kurikuler</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services" style="color:black;">Layanan</a>
          </li> 
          <li class="nav-item">   
            <a class="nav-link js-scroll-trigger" href="#contact" style="color:black;">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> 

  <!-- Masthead -->
  <header class="masthead siswa2">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">SELAMAT DATANG <br> SMKN 1 PROBOLINGGO</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Sekolah Menengah Kejuruan (SMK) adalah salah satu bentuk satuan pendidikan formal yang menyelenggarakan pendidikan kejuruan pada jenjang pendidikan menengah sebagai lanjutan dari SMP/MTs!</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="login.php">Masuk</a>
        </div>
      </div>
    </div>
  </header>

<!-- Jurusan Section -->
<section class="page-section" id="jurusan">
    <div class="container">
      <h2 class="text-center mt-0">Jurusan</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-2 col-md-6 text-center">
          <div class="mt-5">
            <figure><img src="images/rpl.png" alt="sing up image" height="80" width="100"></figure>
            <h3 class="h4 mb-2">RPL</h3>
            <p class="text-muted mb-0">Rekayasa Perangkat Lunak</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 text-center">
          <div class="mt-5">
            <figure><img src="images/pbk.jpg" alt="sing up image" height="80" width="100"></figure>
            <h3 class="h4 mb-2">PBK</h3>
            <p class="text-muted mb-0">Perbankan</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 text-center">
          <div class="mt-5">
            <figure><img src="images/ap.jpg" alt="sing up image" height="80" width="100"></figure>
            <h3 class="h4 mb-2">AP</h3>
            <p class="text-muted mb-0">Perkantoran</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 text-center">
          <div class="mt-5">
            <figure><img src="images/pm.gif" alt="sing up image" height="80" width="100"></figure>
            <h3 class="h4 mb-2">PM</h3>
            <p class="text-muted mb-0">Pemasaran</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 text-center">
          <div class="mt-5">
            <figure><img src="images/ak.jpg" alt="sing up image" height="80" width="100"></figure>
            <h3 class="h4 mb-2">AK</h3>
            <p class="text-muted mb-0">Akuntansi</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 text-center">
          <div class="mt-4">
                <div class="signin-image">
                  <figure><img src="images/smk1.jpg" alt="sing up image" height="200" width="250"></figure>
                </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ekstra Section -->
  <section id="portfolio" style="padding:50px;">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="images/band.jpg">
            <img class="img-fluid" src="images/band.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Band
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="images/pramuka.jpg">
            <img class="img-fluid" src="images/pramuka.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Pramuka
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="images/kesenian.jpg">
            <img class="img-fluid" src="images/kesenian.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Kesenian
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="images/voli1.jpg">
            <img class="img-fluid" src="images/voli1.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Voli
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="images/basket.jpg">
            <img class="img-fluid" src="images/basket.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Basket
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6" id=pmr>
          <a class="portfolio-box" href="images/p.jpg">
            <img class="img-fluid" src="images/p.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Palang Merah Remaja
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">Layanan</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-university text-primary mb-4"></i>
            <h3 class="h4 mb-2">Bank Mini</h3>
            <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-tag text-primary mb-4"></i>
            <h3 class="h4 mb-2">Business Center</h3>
            <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
            <h3 class="h4 mb-2">RPL Center</h3>
            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-4">
                <div class="signin-image">
                  <figure><img src="images/smk1.jpg" alt="sing up image" height="200" width="250"></figure>
                </div>
          </div>
        </div>
      </div>
    </div><br>
  </section>

  <!-- Contact Section -->
  <section class="page-section bg-dark" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0" style="color:white;">KONTAK!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Apa yang saya bisa bantu? Hubungi kami atau kirim email kepada kami dan kami akan segera menghubungi Anda!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div style="color:white;">Telp : (0335) 421121</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:contact@yourwebsite.com">smkn1_probolinggo@yahoo.co.id</a>
        </div>
        <div class="col-lg-4 ml-auto text-center">
          <i class="fas fa-map fa-3x mb-3 text-muted"></i>
          <div style="color:white;"> Jl. Mastrip 357 Kademangan Kota Probolinggo, Jrebeng Wetan, Kedopok, Probolinggo City, East Java 67239</div>
          <a class="d-block" href="http://smkn1probolinggo.sch.id/">http://smkn1probolinggo.sch.id/</a>
        </div>
      </div>      
    </div>
  </section>
  
  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Risalsaputra!</div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

</body>

</html>
