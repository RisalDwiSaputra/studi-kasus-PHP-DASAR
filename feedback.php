<?php
    session_start();

    if( !isset($_SESSION['login']) ){
        header("location: login.php");
        exit;
    }
    require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HALAMAN FEEDBACK</title>
    
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
                        <h2 class="form-title">Keluahan Siswa</h2>
                        <!-- menampilkan id siswa -->
                        <?php
                            $sql = "SELECT * FROM admin where username = '$_SESSION[user]'";
                            $query = mysqli_query($db, $sql);

                            $ambil = mysqli_fetch_assoc($query);
                                
                        ?>
                        <form method="POST" action="proses-feedback.php">

                            <input type="hidden" value="<?php echo $ambil['id']; ?>" name="id_siswa">

                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="pesan"  placeholder="Pesan Anda"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="simpan" class="form-submit" value="Simpan"/>
                                <a href = "siswa.php" class="form-submit btn-danger">Keluar</a>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/icon_loading.gif" alt="sing up image"></figure>
                    </div>
                    <?php if(isset($_GET['status'])): ?>
                        <p>
                            <?php
                                if($_GET['status'] == 'sukses'){
                                    echo "feedback berhasil disimpan!";
                                } else {
                                    echo "feedback gagal!";
                                }
                            ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

