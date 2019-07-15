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
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    		
    
    <style>
        
        * {font-family: Helvetica Neue, Arial, sans-serif; }

        body { background-color:gray;}

        h1, table { text-align: center; }

        table {border-collapse: collapse;  width: 70%; margin: 0 auto 5rem;}

        th, td { padding: 1.5rem; font-size: 1.3rem; }

        tr {background: hsl(50, 50%, 80%); }

        tr, td { transition: .4s ease-in; } 

        tr:first-child {background: hsla(12, 100%, 40%, 0.5); }

        tr:nth-child(even) { background: hsla(50, 50%, 80%, 0.7); }

        td:empty {background: hsla(50, 25%, 60%, 0.7); }

        /* tr:hover:not(#firstrow), tr:hover td:empty {background: #ff0; pointer-events: visible;}
        tr:hover:not(#firstrow) { transform: scale(1.2); font-weight: 700; box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.5);} */

    </style>

<body>
    <?php
            $sql = mysqli_query($db,"SELECT * FROM admin");
            $d = mysqli_fetch_assoc($sql);
    ?>
    <nav class="topnav navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container">
            <span><strong  style="color:white;" class="navbar-brand"><?php echo $d['nama'];?></strong></span>
            <span><strong  style="color:green;" class="fa fa-circle text-success">ONLINE</strong></span>
            <div class="navbar-collapse collapse" id="navbarColor02">
                <ul class="navbar-nav ml-auto d-flex align-items-center">
                        <li class="nav-item highlight" style="padding-right:9px;">
                            <a class="btn btn-success" href="registrasi.php">Tambah Data</a>
                        </li>
                        <br><br>
                        <li class="nav-item highlight">
                            <a class="btn btn-danger" href="logout.php">Keluar</a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>
    <br>
    <br>
    <br>

    <h1>Data Registrasi</h1><br>
    <table id="racetimes">
        <tr id="firstrow">
            <th>Nama</th>
            <th>Nomer Telefon</th>
            <th>Alamat</th>
            <th>E-Mail</th>
            <th>Gambar</th>
            <th>Tindakan</th>
        </tr>

        <tr>
        <?php
        $sql = "SELECT * FROM admin";
        $query = mysqli_query($db, $sql);

        while($admin = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $admin['nama'];?></td>
            <td><?php echo $admin['nomer_telfon'];?></td>
            <td><?php echo $admin['alamat'];?></td>
            <td><?php echo $admin['email'];?></td>
            <td><img src = "files/<?php echo $admin['upload'];?>" width = "70" height = "50"></td>

            <td>
            <a href = "edit-reg.php?id=<?php echo $admin['id'];?>"
	   		    class = "btn btn-warning">Edit</a>
	   		<a href= "hapus-reg.php?id=<?php echo $admin['id'];?>"  
       		    class = "btn btn-danger">Hapus</a>
            </td>
        </tr>
            <?php
            }
            ?>
        </tr>

    </table>

    <h1 style="color:black;">Data Feedback Siswa</h1> <br>
    <table id="racetimes">
        <tr id="firstrow" style="color:black;">
            <th>Nama Feedback</th>
            <th>Pesan</th>
        </tr>

        <tr>
            <?php
            $sql = "SELECT * FROM feedback INNER JOIN admin ON feedback.id_siswa = admin.id";
            $query = mysqli_query($db, $sql);

            while($feedback = mysqli_fetch_array($query)){

                echo "<tr>";

                echo "<td>".$feedback['nama']."</td>";
                echo "<td>".$feedback['pesan']."</td>";

                echo "</tr>";
                
            }
            ?>
        </tr>

    </table>
</body>
</html>