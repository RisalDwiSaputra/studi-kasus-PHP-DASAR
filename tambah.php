<?php
        session_start();

        if(!isset($_SESSION["login"])){
            header("location: login.php");
            exit;
        }

        require 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama"  placeholder="nama lengkap.." />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" placeholder="alamat anda.."></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah.." />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
            <a href="siswa.php">Batal</a>
        </p>

        </fieldset>

    </form>

    </body>
</html>