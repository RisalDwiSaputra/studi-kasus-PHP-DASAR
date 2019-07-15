<!-- koneksi ke database -->   
<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $nama_database = "php_dasar";
    // Untuk menghubungkan PHP dengan MySQL, 
    $db = mysqli_connect($server, $user, $password, $nama_database);

    if( !$db ){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }
?>