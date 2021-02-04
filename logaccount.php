<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR AKUN</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>

</head>
<body>
            <div class="container col-md-6 card-header text-black">
            
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                INPUT DATA AKUN
            </div>

            <div>

            </div>
            <div class="card-body">
            <form action="" method="POST" class="form-item">
            
                <div class="form-group">
                <label for="user">Nama User</label>
                <input type="text" name="user" class="form-control col-md_9" placeholder="Masukkan nama User">
                </div>


                <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control col-md_9" placeholder="Masukkan Username">
                </div>

                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control col-md_9" placeholder="Masukkan Password">
                </div>

                  <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
            </form>
            </div>
        </div>
    </div>

</body>
</html>

<?php
    include "koneksi.php";
    if(isset($_POST['simpan']))
    {
        $user                = $_POST['user'];
        $username            = $_POST['username'];
        $pass            = $_POST['password'];

        mysqli_query($koneksi, "INSERT INTO logindb_mahasiswa(user,username,password) 
        VALUES(
           '$user', '$username', '$pass')") or die(mysqli_error($koneksi));

            echo "<div align='center'><h5>Silahkan Tunggu, Data Sedang Disimpan....</h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/web_database_mahasiswa/index.php'>";
    }

  
?>
