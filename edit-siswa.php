<?php

    require 'koneksi.php';

    // kalau tidak ada id di query string
    if( !isset($_GET['id']) ){
        header('Location: siswa.php');
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
   
   <!DOCTYPE html>
<html>
<head>
	<title>FORM LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
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
 
	 <!-- Sing in  Form -->
     <section>
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/ujian.png" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Edit Siswa</h2>

                        <form action="proses-edit-siswa.php" method="POST" enctype="multipart/form-data">

                            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />    
                        
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
                            </div>
                            <div class="form-group">
                                <label for="nomer_telfon"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="nomer_telfon" placeholder="nomer_telfon lengkap" value="<?php echo $siswa['nomer_telfon'] ?>" />
                            </div>
                            <div class="form-group">
                                <label for="alamat"><i class="zmdi zmdi-pin"></i></label>
                                <input type="text" name="alamat" placeholder="Alamat..." value="<?php echo $siswa['alamat'] ?>" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email-open"></i></label>
                                <input type="text" name="email" placeholder="E-Mail Anda" value="<?php echo $siswa['email'] ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="upload"><i class="zmdi zmdi-collection-image"></i></label> 
                                <input type="file" name="upload" value="<?php echo $siswa['upload'] ?>">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="ubah_foto" id="ubah_foto" class="agree-term" />
                                <label for="ubah_foto" class="label-agree-term"><span><span></span></span>Ubah Foto!</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="simpan" id="simpan" class="form-submit" value="Simpan"/>
                                <a href = "siswa2.php" class="form-submit btn-danger">Keluar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
 
</body>
</html>
