<?php

require 'koneksi.php';

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id_siswa'];    
    $pesan = $_POST['pesan'];

    // buat query
    $sql = "INSERT INTO feedback (pesan, id_siswa) VALUE ('$pesan','$id')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: siswa.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: siswa.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>