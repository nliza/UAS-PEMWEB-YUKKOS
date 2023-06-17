<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>YUKKOS!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Navbar Start -->
        <!-- ... -->
        <!-- Navbar End -->

        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Tambahkan Informasi Kos</h1>
                </div>
                <form method="post" action="SimpanTambahKos.php"enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="NamaKos" class="form-label">Nama Kos</label>
                        <input type="text" class="form-control" id="NamaKos" name="NamaKos" required>
                    </div>
                    <div class="mb-3">
                        <label for="NamaPemilik" class="form-label">Nama Pemilik</label>
                        <input type="text" class="form-control" id="NamaPemilik" name="NamaPemilik" required>
                    </div>
                    <div class="mb-3">
                        <label for="HargaKos" class="form-label">Harga Kos</label>
                        <input type="number" class="form-control" id="HargaKos" name="HargaKos" required>
                    </div>
                    <div class="mb-3">
                        <label for="KamarMandi" class="form-label">Jumlah Kamar Mandi</label><br>
                        <input type="radio" id="KamarMandi" name="KamarMandi" value="KM Luar" required> Kamar Mandi Luar
                        <input type="radio" id="KamarMandi" name="KamarMandi" value="KM Dalam" required> Kamar Mandi Dalam
                    </div>
                    <div class="mb-3">
                        <label for="JumlahPerkamar" class="form-label">Jumlah Penghuni per Kamar</label>
                        <input type="text" class="form-control" id="JumlahPerkamar" name="JumlahPerkamar" required>
                    </div>
                    <div class="mb-3">
                        <label for="KategoriKos" class="form-label">Kategori Kos</label><br>
                        <input type="radio" id="KategoriKos" name="KategoriKos" value="Perempuan" required> Perempuan
                        <input type="radio" id="KategoriKos" name="KategoriKos" value="Laki-laki" required> Laki-Laki
                        <input type="radio" id="KategoriKos" name="KategoriKos" value="Campuran" required> Campuran
                    </div>
                    <div class="mb-3">
                        <label for="Wilayah" class="form-label">Wilayah</label><br>
                        <input type="radio" id="Wilayah" name="Wilayah" value="Rungkut" required> Rungkut
                        <input type="radio" id="Wilayah" name="Wilayah" value="Gunung Anyar" required> Gunung Anyar
                    </div>
                    <div class="mb-3">
                        <label for="Alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="Alamat" name="Alamat" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="Deskripsi" name="Deskripsi" rows="5" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="Gambar" name="Gambar" accept="image/*" required>
                    </div>
                    <div class="text-center mt-5">
                        <button type="submit" class="btn btn-primary">Tambahkan Kos</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Category End -->

        <!-- Footer Start -->
        <!-- ... -->
        <!-- Footer End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>