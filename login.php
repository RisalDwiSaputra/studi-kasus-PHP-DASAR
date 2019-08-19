
<?php    
    session_start();
    if(isset($_SESSION["login"])){
        header("location: dashboard.php");
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

    <title>Login</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.css" rel="stylesheet">
  </head>

  <body class="login">
        <?php 
            if(isset($_GET['pesan'])){
                if($_GET['pesan']=="gagal"){
                    echo "
                    <script>
                        alert('Username / Password Salah');
                        document.location.href = 'login.php';
                    </script>
                    ";
                }
            }
        ?>
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form" style="padding-top:10%; padding-left:20px; padding-right:20px;">
          <section class="login_content">
            <a href="index.php">
              <h1><i class="fa fa-graduation-cap" aria-hidden="true"></i> SMKN 1 PROBOLINGGO</h1>
            </a>
            <h3>Form Login</h3>
            <form method="post" class="register-form" id="login-form" action="cek-login.php">
              <div>
                <input type="text" class="form-control" placeholder="Username" required=""  name="username"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password"/>
              </div>
              <div>
                    <button type="submit" class="btn btn-success" name="login" style="padding-right:50px; padding-left:50px;">Masuk</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <p>Risalsaputra : @copyright-2019 <b>SMK 1 PROBOLINGGO</b></p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
