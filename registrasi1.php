<?php
    session_start();
    require "koneksi.php";
        
    if( !isset($_SESSION['login']) ){
        header("location: login.php");
        exit;
    } 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tambah Data</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

      
      <style>
        
        * {font-family: Helvetica Neue, Arial, sans-serif; }

        table {border-collapse: collapse;  width: 70%; margin: 0 auto 5rem;}

        th, td { padding: 1.5rem; font-size: 1.5rem;  }

        tr {background: hsl(50, 50%, 80%); }

        tr, td { transition: .4s ease-in; } 

        tr:first-child {background: hsla(12, 100%, 40%, 0.5); }

        tr:nth-child(even) { background: hsla(50, 50%, 80%, 0.7); }

        td:empty {background: hsla(50, 25%, 60%, 0.7); }

        #keluar{background-color:red;}

        /* tr:hover:not(#firstrow), tr:hover td:empty {background: #ff0; pointer-events: visible;}
        tr:hover:not(#firstrow) { transform: scale(1.2); font-weight: 700; box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.5);} */

    </style>

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

            <?php
                $sql = "SELECT * FROM admin";
                $qr = mysqli_query($db, $sql);

                $admin  = mysqli_fetch_array($qr);
            ?>

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">SMK</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b><?php echo $admin['nama'];?></b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="files/<?php echo $admin['upload'];?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $admin['nama'];?></span>
                </a>
                <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                    <img src="files/<?php echo $admin['upload'];?>" class="img-circle" alt="User Image">

                    <p>
                        <?php echo $admin['nama'];?>
                        <small>Admin since July. 2019</small>
                    </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                    <div class="row">
                    <div class="col-xs-4 text-center">
                        <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                        <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                        <a href="#">Friends</a>
                    </div>
                    </div>
                    <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <div class="pull-left">
                        <a href="files/<?php echo $admin['upload'];?>" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                </li>
                </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            </ul>
        </div>
        </nav>
    </header>
  <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
            <img src="files/<?php echo $admin['upload'];?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
            <p><?php echo $admin['nama'];?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
            <a href="#">
                <i class="fa fa-bars"></i> <span>Menu</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="active"><a href="dashboard.php"><i class="fa fa-circle-o"></i>Menu</a></li>
            </ul>
            </li>
            <li class="active treeview">
            <a href="#">
                <i class="fa fa-address-card"></i> <span>Data Registrasi</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="active"><a href="tampil.php"><i class="fa fa-circle-o"></i>Data Siswa</a></li>
                <li class="active"><a href="registrasi1.php"><i class="fa fa-circle-o"></i>Tambah Data</a></li>
            </ul>
            </li>
            <li class=" treeview">
            <a href="#">
                <i class="fa fa-envelope-open"></i> <span>Feedback</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="active"><a href="data.feedback.php"><i class="fa fa-circle-o"></i>Data Feedback</a></li>
            </ul>
            </li>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">   
            <div style="padding-right:-1px; padding-left:-1px;">
            <!-- small box -->
            <section class="signup">
                <div class="container">
                    <div class="signup-content">
                        <div class="signup-form">
                            <h2 class="form-title">Tambah Data Siswa</h2>
                            <form method="POST" action="proses-reg.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="username"><i class="zmdi zmdi-email"></i></label>
                                    <input type="text" name="username" placeholder="Username Anda "/>
                                </div>
                                <div class="form-group">
                                    <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="password"  placeholder="Password Anda"/>
                                </div>
                                <div class="form-group">
                                    <label for="upload"><i class="zmdi zmdi-collection-image"></i></label> 
                                    <input type="file" name="upload" />
                                </div>
                                <div class="form-group">
                                    <label for="nama"><i class="zmdi zmdi-accounts"></i></label>
                                    <input type="text" name="nama"  placeholder="Nama Anda"/>
                                </div>
                                <div class="form-group">
                                    <label for="nomer_telfon"><i class="zmdi zmdi-phone"></i></label>
                                    <input type="text" name="nomer_telfon" placeholder="Nomer Telfon Anda"/>
                                </div>
                                <div class="form-group">
                                    <label for="alamat"><i class="zmdi zmdi-pin"></i></label>
                                    <input type="text" name="alamat" placeholder="Alamat Anda"/>
                                </div>
                                <div class="form-group">
                                    <label for="email"><i class="zmdi zmdi-email-open"></i></label>
                                    <input type="text" name="email" placeholder="E-Mail Anda"/>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="user" value="SISWA">
                                </div>
                                <div class="form-group form-button">
                                    <input type="submit" name="daftar" class="form-submit" value="Register"/>
                                    <a href = "tampil.php" class="form-submit btn-danger" id="keluar">Keluar</a>
                                </div>
                            </form>
                        </div>
                        <div class="signup-image">
                            <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
            <b>Version</b> 2.7.2
            </div>
            <strong>Copyright &copy; 2019 <a href="#">Risalsaputra</a> .</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- /.row -->
                        </div>
                        <!-- /.col -->
                    </div>
                <!-- /.row -->
            </div>
            <!-- /.box -->
        </section>
        <!-- right col -->
        
    </div>
    <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
    </div>


  <!-- Control Sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>