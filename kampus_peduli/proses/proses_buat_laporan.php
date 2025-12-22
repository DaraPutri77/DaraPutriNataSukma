<?php
session_start();

if(!isset($_SESSION['id_pengguna'])){
    header("location:../login.php");
    exit;
}

include '../koneksi.php';

$id_pengguna = $_SESSION['id_pengguna'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$lokasi = $_POST['lokasi'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($koneksi, "INSERT INTO laporan (id_pengguna, id_kategori, judul_laporan, deskripsi, lokasi, status_laporan, tanggal_dibuat, tanggal_diubah) VALUES ('$id_pengguna', '$kategori', '$judul', '$deskripsi', '$lokasi', 'pending', NOW(), NOW())");
header("location:../pengguna/laporan_saya.php");
exit;
?>
