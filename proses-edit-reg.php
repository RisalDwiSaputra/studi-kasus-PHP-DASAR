<?php

require 'koneksi.php';

    $id = $_POST['id'];
    $username = $_POST['username'];
    $pwd = $_POST['password'];
    $nama = $_POST['nama'];
    $nomer_telfon = $_POST['nomer_telfon'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];

// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
    
    // Ambil data foto yang dipilih dari form
    $foto = $_FILES['upload']['name'];
    $tmp = $_FILES['upload']['tmp_name'];
    
    // Rename nama fotonya dengan menambahkan tanggal dan jam upload
    $fotobaru = date('dmYHis').$foto;
    
    // Set path folder tempat menyimpan fotonya
    $path = "files/".$fotobaru;
    
    // Proses upload
    if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      
      // Query untuk menampilkan data siswa berdasarkan id yang dikirim
      $query = "SELECT * FROM admin WHERE id='$id' ";
      $sql = mysqli_query($db, $query); // Eksekusi/Jalankan query dari variabel $query
      $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
      
      // Cek apakah file foto sebelumnya ada di folder images
      if(is_file("files/".$data['upload'])){ // Jika foto ada
        unlink("files/".$data['upload']); // Hapus file foto sebelumnya yang ada di folder images
      }
      // Proses ubah data ke Database
      $query = "UPDATE admin SET username = '$username', password = '$pwd', upload = '$fotobaru', nama='$nama', nomer_telfon='$nomer_telfon', alamat='$alamat', email='$email' WHERE id=$id";
      $sql = mysqli_query($db, $query); // Eksekusi/ Jalankan query dari variabel $query
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
            echo "
                <script>
                    alert('Data Berhasil Diubah');
                    document.location.href = 'tampil.php';
                </script>
            ";
      }else{
        // Jika Gagal, Lakukan :
            echo "
            <script>
                alert('Data Gagal Diubah? Periksa Data Anda!');
                document.location.href = 'registrasi.php';
            </script>
            ";
      }
    
    }else{
      // Jika gambar gagal diupload, Lakukan :
        echo "
        <script>
            alert('Gambar Gagal Diupload? Perikasi File Anda!');
            document.location.href = 'tampil.php';
        </script>
        ";
    }
    
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
    // Proses ubah data ke Database
    $query = "UPDATE admin SET username = '$username', password = '$pwd', nama='$nama', nomer_telfon='$nomer_telfon', alamat='$alamat', email='$email' WHERE id=$id";
    $sql = mysqli_query($db, $query); // Eksekusi/ Jalankan query dari variabel $query
    
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: tampil.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='registrasi.php'>Kembali Ke Form</a>";
    }
}


// if(isset($_POST['simpan'])){ 

//         // ambil data dari formulir
//         $id = $_POST['id'];
//         $username = $_POST['username'];
//         $pwd = $_POST['password'];
//         $nama = $_POST['nama'];
//         $nomer_telfon = $_POST['nomer_telfon'];
//         $alamat = $_POST['alamat'];
//         $email = $_POST['email'];

//         // buat query update
//         $sql = "UPDATE admin SET username = '$username', password = '$pwd', nama='$nama', nomer_telfon='$nomer_telfon', alamat='$alamat', email='$email' WHERE id=$id";
//         $query = mysqli_query($db, $sql);

//         // apakah query update berhasil?
//         if( $query ) {
//             // kalau berhasil alihkan ke halaman list-siswa.php
//             header('Location: tampil.php');
//         } else {
//             // kalau gagal tampilkan pesan
//             die("Gagal menyimpan perubahan...");
//         }


//     } else {
//         die("Akses dilarang...");
//     }
    

?>