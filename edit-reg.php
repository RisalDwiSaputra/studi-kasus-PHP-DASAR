<?php
        require 'koneksi.php';

    // kalau tidak ada id di query string
    if( !isset($_GET['id']) ){
        header('Location: tampil.php');
    }

    //ambil id dari query string
    $id = $_GET['id'];

    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM admin WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    // jika data yang di-edit tidak ditemukan
    if( mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan...");
}

?>

<?php
    session_start();
    require "koneksi.php";
        
    if( !isset($_SESSION['login']) ){
        header("location: login.php");
        exit;
    } 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Dashboard | Admin! </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.css" rel="stylesheet">
    <style>
    .img-circle.profile_img {
            width: 70%;
            background: #fff;
            margin-left: 15%;
            z-index: 1000;
            position: inherit;
            margin-top: 10px;
            border: 1px solid rgba(52, 73, 94, 0.44);
            padding: 0px;
        }
    </style>
  </head>

  <body class="nav-md">
    <?php
        $sql = "SELECT * FROM admin";
        $query = mysqli_query($db, $sql);

        $ambil = mysqli_fetch_assoc($query);
    ?>
    <div class="container body" style="background:#fff">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><i class="fa fa-graduation-cap" aria-hidden="true"></i> <span><?php echo $ambil['nama'];?>!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="files/<?php echo $ambil['upload'];?>" alt="..." class="img-circle profile_img" widht="50" height="50">
              </div>
              <div class="profile_info">
                <a href="profile-admin.php">
                <span>Welcome,</span>
                <h2><?php echo $ambil['nama'];?></h2>
                </a>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i>Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="dashboard.php">Menu</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Data Siswa <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tampil.php">Tabel Siswa</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-envelope"></i>Data Feedback <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="data.feedback.php">Feedback Siswa</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Tambah Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="registrasi1.php">Tambah Data</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php" style="padding-right:100%;">
                <span class="glyphicon glyphicon-off" aria-hidden="true" style="padding-left:100px;"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
            <nav>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="files/<?php echo $ambil['upload'];?>" alt=""><?php echo $ambil['nama'];?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile-admin.php"> Profile</a></li>
                    <!-- <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li> -->
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- /top tiles -->

          <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Registrasi</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form method="POST" action="proses-edit-reg.php" enctype="multipart/form-data"  data-parsley-validate class="form-horizontal form-label-left">
                        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />    

                        <div class="form-group">
                            <label for="username" class="col-md-3 col-sm-3 col-xs-12">Username</label>
                            <input type="text" class="form-control col-md-7 col-xs-12" name="username" placeholder="Username anda" value="<?php echo $siswa['username'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-3 col-sm-3 col-xs-12">Password</label>
                            <input type="text" class="form-control col-md-7 col-xs-12" name="password" placeholder="password lengkap" value="<?php echo $siswa['password'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-md-3 col-sm-3 col-xs-12">Nama</label>
                            <input type="text" class="form-control col-md-7 col-xs-12" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="nomer_telfon" class="col-md-3 col-sm-3 col-xs-12">Nomer Telfon</label>
                            <input type="text" class="form-control col-md-7 col-xs-12" name="nomer_telfon" placeholder="Nomer Anda" value="<?php echo $siswa['nomer_telfon'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-md-3 col-sm-3 col-xs-12">Alamat</label>
                            <input type="text" class="form-control col-md-7 col-xs-12" name="alamat" placeholder="Alamat..." value="<?php echo $siswa['alamat'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-3 col-sm-3 col-xs-12">E-Mail</label>
                            <input type="text" class="form-control col-md-7 col-xs-12" name="email" placeholder="E-Mail Anda" value="<?php echo $siswa['email'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="upload">Upload Foto</i></label> <br>
                            <input type="file" name="upload" value="<?php echo $siswa['upload'] ?>">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="ubah_foto" id="ubah_foto">
                            <label for="ubah_foto" >Cek Untuk Mengubah Foto!</label>
                        </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="">
                          <a href="tampil.php">
                          <button class="btn btn-danger" type="button">Batal</button>
                          </a>
                          <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Risalsaputra @copyright-2019
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
	
  </body>
</html>
