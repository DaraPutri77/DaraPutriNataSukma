<?php
session_start();

if (!isset($_SESSION['id_pengguna'])) {
    header("location:../login.php");
}

include '../koneksi.php';

$id = $_SESSION['id_pengguna'];
$laporan = mysqli_query($koneksi, "SELECT * FROM laporan WHERE id_pengguna='$id'");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Laporan Saya</title>
        <style>
            body{
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: lightcyan;
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
            </style>
</head>
<body>
    <h2>Daftar Laporan Saya</h2>
    <a href="detail_laporan.php?id=<?php echo $s['id_laporan']; ?>">Detail</a>
    <br><br>

<table border="1">
    <tr>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Lokasi</th>
        <th>Status</th>
    </tr>

    <?php while($data_laporan = mysqli_fetch_array($laporan)) { ?>
    <tr>
        <td><?php echo $data_laporan['judul_laporan']; ?></td>
        <td><?php echo $data_laporan['id_kategori']; ?></td>
        <td><?php echo $data_laporan['lokasi']; ?></td>
        <td><?php echo $data_laporan['status_laporan']; ?></td>
    </tr>

    <tr>
        <td colspan="4">
            <?php
            $id_laporan = $data_laporan['id_laporan'];
            $riwayat_status = mysqli_query($koneksi, "SELECT * FROM riwayat_status WHERE id_laporan='$id_laporan' ORDER BY tgl_perubahan DESC");

            if(mysqli_num_rows($riwayat_status) > 0){
                echo "<b>Catatan Admin:</b><br>";

                while($data_riwayat = mysqli_fetch_array($riwayat_status)){
                    echo "- Status: ".$data_riwayat['status_baru']. " (".$data_riwayat['tgl_perubahan'].")<br>";
                    echo "  Catatan: ".$data_riwayat['catatan']."<br><br>";
                }
            } else {
                echo "<i>Belum ada catatan dari admin.</i>";
            }
            
            ?>
        </td>
    </tr>
    <?php } ?>

</table>
</body>
</html>
