<?php
session_start();

if(!isset($_SESSION['id_pengguna'])){
    header("location:../login.php");
    exit;
}

if($_SESSION['peran'] != "admin"){
    header("location:../pengguna/dashboard.php");
    exit;
}

include '../koneksi.php';
$id_laporan = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM laporan WHERE id_laporan = '$id_laporan'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Status</title>
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

        form label{
            display: block;
            margin-bottom: 5px;
        }

        form input[type="text"],
        form input[type="password"],
        form input[type="email"],
        form textarea,
        form select{
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid grey;
            background-color: white;
        }

        form input[type="submit"],
        button{
            padding: 5px 15px;
            border: 1px solid blue;
            background-color: skyblue;
            color: black;
            cursor: pointer;
        }

        form input[type="submit"]:hover,
        button:hover{
            background-color: deepskyblue;
        }

        a{
            color: blue;
            text-decoration: none;
        }

        a:hover{
            text-decoration: underline;
        }

        .kembali{
            display: inline-block;
            margin-bottom: 15px;
            background-color: dodgerblue;
            color: white;
            padding: 6px 14px;
            border-radius: 4px;
            text-decoratuon: none;
        }

        .kembali:hover{
            background-color: royalblue;
        }
        </style>
</head>
<body>
    <h2>Detail Laporan</h2>
    <a href="detail_laporan.php">Kembali</a>
    <br><br>

    <p><b>Judul :</b> <?= $data['judul_laporan']; ?></p>
    <p><b>Lokasi :</b> <?= $data['lokasi']; ?></p>
    <p><b>Deskripsi :</b> <?= $data['deskripsi']; ?></p>
    <p><b>Status Saat Ini :</b> <?= $data['status_laporan']; ?></p>

    <h3>Ubah Status</h3>
    <form action="../proses/proses_ubah_status.php" method="post">
        <input type="hidden" name="id_laporan" value="<?= $data['id_laporan']; ?>">

        <label>Status Baru :</label><br>
        <select name="status_baru">
            <option value="pending"  <?= $data['status_laporan']=="pending"?"selected":"" ?>>pending</option>
            <option value="diproses" <?= $data['status_laporan']=="diproses"?"selected":"" ?>>diproses</option>
            <option value="selesai"  <?= $data['status_laporan']=="selesai"?"selected":"" ?>>selesai</option>
        </select>
        <br><br>

        <label>Catatan :</label><br>
        <textarea name="catatan" rows="4" cols="40"></textarea>
        <br><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
