<?php
require 'koneksi.php';
$username = $_POST["username"];
$namapanggilan = $_POST["namapanggilan"];
$fullname = $_POST["fullname"];
$password = $_POST["password"];

$sql = "INSERT INTO tb_user (username, namapanggilan, fullname, password) VALUES ('$username', '$namapanggilan', '$fullname', '$password')";

if (mysqli_query($koneksi, $sql)){
    echo "<script>alert('Selamat, pendaftaran berhasil.');</script>";
    header("Location: FormLoginUser.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
}
?>