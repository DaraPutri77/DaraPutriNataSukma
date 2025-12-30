<?php
include '../koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$peran = "mahasiswa";

mysqli_query($koneksi, "INSERT INTO pengguna VALUES ('', '$nama', '$email', '$password', '$peran', NOW(), NOW())");
header("location:../login.php");
?>