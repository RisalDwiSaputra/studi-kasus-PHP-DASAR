<?php
    session_start();
    require 'koneksi.php';
    
    
    if( !isset($_SESSION['login']) ){
        header("location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HALAMAN REGISTRASI</title>
    
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</head>
<body>
     <!-- Sign up form -->
     <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Registrasi</h2>
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
                            <div class="form-group form-button">
                                <input type="submit" name="daftar" class="form-submit" value="Register"/>
                                <a href = "tampil.php" class="form-submit btn-danger">Keluar</a>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
