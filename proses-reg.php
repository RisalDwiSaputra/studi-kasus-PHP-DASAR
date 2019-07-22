<?php

require 'koneksi.php';

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $username = strtolower(stripslashes($_POST['username']));
    $password = $_POST['password'];

    $nama_file = $_FILES['upload']['name'];
    $tmp = $_FILES['upload']['tmp_name'];

    // Rename nama fotonya dengan menambahkan tanggal dan jam upload
    $fotobaru = date('dmYHis').$nama_file;
    // Set path folder tempat menyimpan fotonya
    $path = "files/".$fotobaru;

    // $ekstensi_diperbolehkan	= array('png','jpg','jpeg','gif'); //untuk membatasi ekstensi file yang di upload 
    // $lokasi_file=$_FILES['upload']['tmp_name']; // untuk mendapatkan tempory / lokasi sementara file yang di upload
    // $nama_file=$_FILES['upload']['name']; // untuk mendapatkan nama file yang di upload
    // $x = explode('.', $nama_file);  
    // $ekstensi = strtolower(end($x));
    // $ukuran	= $_FILES['upload']['size']; //untuk mendapatka ukuran gambar yang di upload       

    $nama = $_POST['nama'];
    $nomer_telfon = $_POST['nomer_telfon'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $user = $_POST['user'];

    // Proses upload
    if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
        // Proses simpan ke Database
        $sql = "INSERT INTO admin (username, password, upload, nama, nomer_telfon, alamat, email, user) VALUE ('$username', '$password','$fotobaru', '$nama', '$nomer_telfon', '$alamat','$email', '$user')";
        $query = mysqli_query($db, $sql); // Eksekusi/ Jalankan query dari variabel $query
            if( $query ) {
                echo "
                <script>
                    alert('Data Berhasill Disimpan');
                    document.location.href = 'tampil.php';
                </script>
                ";
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            // header('Location: login.php?status=sukses');
            } else {
                echo "
                <script>
                    alert('Data GAGAL Disimpan');
                    document.location.href = 'registrasi1.php';
                </script>
                ";
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            // header('Location: login.php?status=gagal');
            }
    }else{
        // Jika gambar gagal diupload, Lakukan :
        echo "
        <script>
            alert('FILE GAGAL DI UPLOAD');
            document.location.href = 'registrasi1.php';
        </script>
        ";
    }

} else {
    die("Akses dilarang...");
}

?>