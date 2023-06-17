<?php
require 'koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0){
    header("Location: beranda.php");
} else {
    echo "<script>alert('Email atau Password Anda Salah. Silahkan Coba Login Kembali.');</script>";
    echo "<script>window.location.href='FormLoginUser.php';</script>";
}
mysqli_close($koneksi);
?>