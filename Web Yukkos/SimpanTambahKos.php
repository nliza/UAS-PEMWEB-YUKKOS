<?php
// Mengambil nilai dari input form
$NamaKos = $_POST['NamaKos'];
$NamaPemilik = $_POST['NamaPemilik'];
$HargaKos = $_POST['HargaKos'];
$KamarMandi = $_POST['KamarMandi'];
$JumlahPerkamar = $_POST['JumlahPerkamar'];
$KategoriKos = $_POST['KategoriKos'];
$Wilayah = $_POST['Wilayah'];
$Alamat = $_POST['Alamat'];
$Deskripsi = $_POST['Deskripsi'];

// konfigurasi database
$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "yukkos";
// perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}

// Memasukkan data ke tabel kos
$sql = "INSERT INTO tb_kos (NamaKos, NamaPemilik, HargaKos, KamarMandi, JumlahPerkamar, KategoriKos, Wilayah, Alamat, Deskripsi)
        VALUES ('$NamaKos', '$NamaPemilik', '$HargaKos', '$KamarMandi', '$JumlahPerkamar', '$KategoriKos', '$Wilayah', '$Alamat', '$Deskripsi')";

if ($koneksi->query($sql) === TRUE) {
    echo '<script>alert("Data kos berhasil ditambahkan ke database."); window.location.href = "BerandaPemilik.php";</script>';
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
