<?php
require 'koneksi.php';
echo "<script>alert('Maaf, anda harus login terlebih dahulu. Silahkan klik tombol ok untuk login!');</script>";
echo "<script>window.location.href='FormLoginUser.php';</script>";
mysqli_close($koneksi);
?>