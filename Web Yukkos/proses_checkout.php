<?php
// Memeriksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'koneksi.php';

    // Mengambil data dari form
    $NamaKos = $_POST['NamaKos'];
    $KategoriKos = $_POST['KategoriKos'];
    $namalengkap = $_POST['namalengkap'];
    $email = $_POST['email'];
    $lamasewa = $_POST['lamasewa'];
    $harga = $_POST['harga'];
    $totalHarga = $_POST['totalHarga'];
    $metodePembayaran = $_POST['metodepembayaran'];

    // Query untuk menyimpan data ke database
    $query = "INSERT INTO tb_transaksi (NamaKos, KategoriKos, namalengkap, email, lamasewa, harga, totalHarga, metodePembayaran) 
              VALUES ('$NamaKos', '$KategoriKos', '$namalengkap' ,'$email', '$lamasewa', '$harga', '$totalHarga', '$metodePembayaran')";

    // Menjalankan query
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan ke database.');</script>";
        echo "<script>window.location.href='beranda.php';</script>";// Mengarahkan ke halaman beranda setelah data berhasil ditambahkan
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>