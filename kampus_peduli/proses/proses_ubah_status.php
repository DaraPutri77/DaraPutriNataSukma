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

$id_laporan  = $_POST['id_laporan'];
$status_baru = $_POST['status_baru'];
$catatan     = $_POST['catatan'];
$id_admin    = $_SESSION['id_pengguna']; 

mysqli_query($koneksi, "UPDATE laporan SET status_laporan = '$status_baru', tanggal_diubah = NOW() WHERE id_laporan = '$id_laporan'");
mysqli_query($koneksi, "INSERT INTO riwayat_status (id_laporan, status_baru, catatan, id_admin, tgl_perubahan) VALUES ('$id_laporan', '$status_baru', '$catatan', '$id_admin', NOW())");

header("location:../admin/detail_laporan.php");
exit;
?>
