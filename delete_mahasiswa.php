<?php
    include "koneksi.php";
    $id = $_GET['npm'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM data_mahasiswa WHERE npm='$id'");
    $data=mysqli_fetch_array($ambilData);
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/web_database_mahasiswa/hasil_data_mahasiswa.php'>";
?>