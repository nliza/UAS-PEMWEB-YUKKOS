<?php
require 'koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM tb_pemilik WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0){
    header("Location: BerandaPemilik.php");
} else {
    echo "<script>alert('Email atau Password Anda Salah. Silahkan Coba Login Kembali.');</script>";
    echo "<script>window.location.href='FormLoginPemilik.php';</script>";
}
mysqli_close($koneksi);
?>