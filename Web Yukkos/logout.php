<?php

include 'koneksi.php';
// Mulai sesi atau resume sesi yang sudah ada
echo "<script>alert('Selamat anda berhasil logout!');</script>";
session_start();

// Hapus semua data sesi
session_destroy();

$_SESSION['notification'] = "Selamat Anda berhasil logout!";

// Redirect ke halaman login atau halaman lain setelah logout

header("Location: index.php");
exit();
?>