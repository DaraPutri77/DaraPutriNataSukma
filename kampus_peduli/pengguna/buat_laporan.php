<?php
session_start();

if(!isset($_SESSION['id_pengguna'])){
    header("location:../login.php");
    exit;
}

if($_SESSION['peran'] !="mahasiswa"){
    header("location:.../admin/dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Buat Laporan</title>
        <style>
            body{
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: lightcyan;
            }

            form label{
                display: block;
                margin-bottom: 5px;
            }

            .form-laporan{
                width: 60%;
                max-width: 700px;
                margin: 40px auto;
                background-color: aliceblue;
                border: 1px solid gray;
                border-radius: 8px;
                padding: 20px 30px;
            }

            .form-laporan h2{
                text-align: center;
                font-size: 26px;
                margin-bottom: 20px;
            }

            .form-laporan label{
                font-weight: bold;
            }

            .form-laporan input[type="text"],
            .form-laporan select,
            .form-laporan textarea{
                width: 70%;
                max-width: 600px;
                padding: 5px;
                margin: 0 auto 10px;
                box-sizing: border-box;
                display: block;
            }

            .form-laporan input[type="submit"]{
                background-color: cornflowerblue;
                color: white;
                border: 1px solid blue;
                padding: 6px 18px;
                cursor: pointer;
            }

            .form-laporan input[type="submit"]:hover{
                background-color: royalblue;
            }
            </style>
</head>
<body>
    <div class="form-laporan">
    <h2>Buat Laporan Baru</h2>

    <form action ="../proses/proses_buat_laporan.php"method="post">
        <label>Judul Laporan :</label>
        <input type = "text" name = "judul">

        <label>Kategori :</label><br>
        <select name="kategori">
        <option value="1">Fasilitas Kampus</option>
        <option value="2">Kebersihan</option>
        <option value="3">Toilet</option>
        <option value="4">Wifi</option>
        <option value="5">Parkiran</option>
        <option value="6">Listrik/Lampu</option>
        </select>
        
        <label>Lokasi Masalah :</label>
        <input type = "text" name = "lokasi">

        <label>Deskripsi :</label>
        <textarea name = "deskripsi" rows = "4" cols = "40"></textarea>

        <input type = "submit" value = "Kirim Laporan">
    </form>
</div>

</body>
</html>