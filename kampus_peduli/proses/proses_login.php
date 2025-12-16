<?php
include '../koneksi.php';
session_start();

$email    = $_POST['email'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE email='$email' AND password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);

    $_SESSION['id_pengguna'] = $data['id_pengguna'];
    $_SESSION['peran'] = $data['peran'];

    if($data['peran'] == "admin"){
        header("location:../admin/dashboard.php");
    } else {
        header("location:../pengguna/dashboard.php");
    }

} else {
    header("location:../login.php?pesan=gagal");
}
?>
