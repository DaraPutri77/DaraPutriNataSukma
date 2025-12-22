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

$no = 1;
$laporan = mysqli_query($koneksi, "SELECT * FROM laporan");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Semua Laporan</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: lightcyan;
        }

        .laporan-container{
            width: 80%;
            max-width: 900px;
            margin: 50px auto;
            background-color: azure;
            padding: 20px 30px;
            border: 1px solid gray;
            border-radius: 8px;
            box-shadow: 0px 2px 8px gray;
        }

        .laporan-container h2{
            text-align: center;
            font-size: 28px;
            color: navy;
            margin-bottom: 20px;
        }

        table{
            border-collapse: collapse;
            width: 100%;
        }

        table th,
        table td{
            border: 1px solid black;
            padding: 5pc;
            text-align: left;
        }

        table{
            border-collapse: collapse;
            width: 100%;
            background-color: white;
        }

        table th{
            background-color: dodgerblue;
            color: white;
            padding: 10px;
            text-align: center;
        }

        table td{
            border: 1px solid gray;
            padding: 8px;
            text-align: center;
        }

        table tr:nth-child(even){
            background-color: aliceblue;
        }

        a{
            color: blue;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover{
            color: navy;
            text-decoration: underline;
        }

        .kembali{
            display: inline-block;
            margin-bottom: 15px;
            background-color: dodgerblue;
            color: white;
            padding: 6px 14px;
            border-radius: 4px;
            text-decoration: none;
        }

        .kemkbali:hover{
            background-color: royalblue;
        }

        .ubah{
            color: white;
            background-color: seagreen;
            padding: 4px 10px;
            border-radius: 4px;
            text-decoration: none;
        }

        .ubah:hover{
            background-color: green;
        }
        </style>
</head>
<body>

<div class="laporan-container">
    <h2>Semua Laporan</h2>
    <a href="dashboard.php">Kembali ke Dashboard</a>
    <br><br>

<table border="1">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Lokasi</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>

    <?php while($data = mysqli_fetch_array($laporan)) { ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['judul_laporan']; ?></td>
        <td><?php echo $data['lokasi']; ?></td>
        <td><?php echo $data['status_laporan']; ?></td>
        <td>
            <a href="ubah_status.php?id=<?php echo $data['id_laporan']; ?>">
                Ubah Status
            </a>
        </td>
    </tr>
    <?php } ?>
</table>
    </div>
</body>
</html>
