<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script> 
</head>
<body>

    <div class="container col-md-6">
        <div class="card">
            <div class="card header bg-primary text-white">INPUT DATA MAHASISWA</div>
       <div class="card-body">
       <a href="index.php" class="btn btn-danger">LOG OUT</a><br><br>

       <label for="daftardatamhs"><h5>Daftar Data Mahasiswa</h5></label>
            <a href="hasil_data_mahasiswa.php" class="btn btn-warning">GO</a>


       <form action="" method="POST" class="form-item">
            <div class="form-group">
            <label for="npm">NPM</label>
            <input type="text" name="npm" class="form-control col-md_9" placeholder="Masukkan NPM">

            <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control col-md_9" placeholder="Masukkan Nama">
            </div>

            <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control col-md_9" placeholder="Masukkan Tempat Lahir">
            </div>

            <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control col-md_9" placeholder="Masukkan Tanggal Lahir">

            <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control col-md_9" >
                <option value="kosong">Masukkan jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
            </div>

            <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control col-md_9" placeholder="Masukkan Alamat">
            </div>

            <div class="form-group">
            <label for="kode_pos">Kode Pos</label>
            <input type="text" name="kode_pos" class="form-control col-md_9" placeholder="Masukkan Kode Pos">
            </div>
            
            <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
            <button type="reset" class="btn btn-danger" name="batal">BATAL</button>

       </form>
       </div>
    </div>

</body>
</html>

<?php
    include "koneksi.php";
    if(isset($_POST['simpan']))
    {
        $npm                = $_POST['npm'];
        $nama               = $_POST['nama'];
        $tempat_lahir       = $_POST['tempat_lahir'];
        $tanggal_lahir      = $_POST['tanggal_lahir'];
        $jenis_kelamin      = $_POST['jenis_kelamin'];
        $alamat             = $_POST['alamat'];
        $kode_pos           = $_POST['kode_pos'];

        mysqli_query($koneksi, "INSERT INTO data_mahasiswa VALUES(
           '$npm', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$kode_pos'
        )") or die(mysqli_error($koneksi));

            echo "<div align='center'><h5>Silahkan Tunggu, Data Sedang Disimpan....</h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/web_database_mahasiswa/hasil_data_mahasiswa.php'>";
    }
?>  