<?php
session_start();

if(!isset($_SESSION['id_pengguna'])){
    header("location:../login.php");
    exit;
}

if($_SESSION['peran'] !="mahasiswa"){
    header("location:../admin/dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard Mahasiswa</title>
        <style>
            body{
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: lightcyan;
            }

            .container{
                width: 400px;
                margin: 60px auto;
                background-color: white;
                border: 1px solid grey;
                padding: 20px;
            }
            
            h2{
                margin-top: 0;
                text-align: center;
                color: black;
            }

            a{
                color: blue;
                text-decoration: center;
                font-weight: bold;
            }

            a:hover{
                text-decoration: underline;
            }
            </style>
</head>
<body>
    <div class ="container">
    <h2>Dashboard Mahasiswa</h2>
    <p style="text-align: center;">Selamat Datang Mahasiswa!</p>

    <a href = "dashboard.php">Beranda Mahasiswa</a>|
    <a href = "buat_laporan.php">Buat Laporan</a>|
    <a href = "laporan_saya.php">Laporan Saya</a>|
    <a href = "../logout.php">Logout</a>
</div>

</body>
</html>