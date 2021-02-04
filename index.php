<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>

</head>
<body>
    <div class="container col-md-3">
    <div class="card">
    <div class="card-header bg-primary text-white">
    SILAHKAN LOGIN
    </div>
        <div class="card-body">
        <form action="" method="POST">

        <label for="username">USERNAME</label>
        <input type="text" name="username" class="form-control">

        <label for="password">PASSWORD</label>
        <input type="password" name="password" class="form-control">

        <button type="submit" class="btn btn-primary" name="submit">LOGIN</button>
        <button type="submit" class="btn btn-danger" name="daftar">DAFTAR</button>
        </div>
        </form>
    </div>
    </div>
</body>
</html>

<?php
include "koneksi.php";
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $pass  = $_POST['password'];

    $user = mysqli_query($koneksi, "SELECT * FROM logindb_mahasiswa WHERE username='$username' AND password='$pass'  ");
    $check = mysqli_num_rows($user);
    if($check > 0){
        header("location: hasil_data_mahasiswa.php");
    }
    else{
        header("location: index.php");
    }
}

if(isset($_POST['daftar'])){
    header("location:logaccount.php");
}
?>