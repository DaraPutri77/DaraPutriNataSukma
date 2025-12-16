<?php
session_start();

if(!isset($_SESSION['id_pengguna'])){
    header("location:../login.php");
    exit;
}

include '../koneksi.php';
$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM laporan WHERE id_laporan = '$id'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Laporan</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: lightcyan;
        }

        h2{
            margin-top: 0;
            text-align: center;
            color: black;
        }

        a{
            color: blue;
            text-decoration: none;
        }

        a:hover{
            text-decoration: underline;
        }
        </style>
</head>
<body>
    <h2>Detail Laporan</h2>

    <p><b>Judul:</b> <?php echo $data['judul_laporan']; ?></p>
    <p><b>Lokasi:</b> <?php echo $data['lokasi']; ?></p>
    <p><b>Deskripsi:</b> <?php echo $data['deskripsi']; ?></p>
    <p><b>Status:</b> <?php echo $data['status_laporan']; ?></p>
    <br>

    <a href="laporan_saya.php">Kembali</a>

</body>
</html>
