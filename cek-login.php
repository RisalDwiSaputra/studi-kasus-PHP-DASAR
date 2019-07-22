<?php

    session_start();

    require 'koneksi.php';
    if(isset($_POST['login'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        // die (mysqli_error($db)
        // cara melihat error mysqli
        $query = mysqli_query($db, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'") or die (mysqli_error($db));


        // cek username dan password ditemukan di database
        $cek = mysqli_num_rows($query);

        if($cek > 0){

            $row = mysqli_fetch_assoc($query);

            // cek jika user login sebagai admin
            if($row['user']=="ADMIN"){

            // buat session login dan username
            $_SESSION['login'] = true;
            $_SESSION['user'] = $username;
            // alihkan ke halaman dashboard admin
            header("location:dashboard.php");
        
            // cek jika user login sebagai siswa
            }else if($row['user']=="SISWA"){

            // buat session login dan username
            $_SESSION['login'] = true;
            $_SESSION['user'] = $username;
            // alihkan ke halaman dashboard pegawai
            header("location:dashboard-siswa.php");

            }else{
        
                // alihkan ke halaman login kembali
                header("location:login.php?pesan=gagal");
            
            }
        }else{
            header("location:login.php?pesan=gagal");
        }  
    }

    $error = true;

?>