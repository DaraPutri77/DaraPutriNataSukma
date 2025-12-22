<?php
session_start();

if(!isset($_SESSION['id_pengguna'])){
    header("location:../login.php");
    exit;
}

if($_SESSION['peran'] !="admin"){
    header("location:../pengguna/dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard Admin</title>
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
                color: navy;
                text-decoration: underline;
            }
            </style>
</head>
<body>
    <div class="container">
    <h2>Dashboard Admin</h2>
    <p style="text-align: center;">Selamat Datang Admin!</p>

    <a href = "dashboard.php">Beranda Admin</a>|
    <a href = "detail_laporan.php">Lihat Semua Laporan</a>|
    <a href = "../logout.php">Logout</a>

</div>
</body>
</html>