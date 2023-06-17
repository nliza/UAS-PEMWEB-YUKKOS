<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Yukkos!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/yukos.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

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
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="beranda.php" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">Yukkos!</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="beranda.php" class="nav-item nav-link active">Home</a>
                        <!-- <a href="about.html" class="nav-item nav-link">About</a> -->
                        <div class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kategori Kos</a>
                            <div class="dropdown-menu rounded-0 m-0 dropdown-menu-end">
                                <a href="FormPerempuan.php" class="dropdown-item">Perempuan</a>
                                <a href="FormLaki-laki.php" class="dropdown-item">Laki-laki</a>
                                <a href="FormCampuran.php" class="dropdown-item">Campuran</a>
                                <a href="FormAllKost.php" class="dropdown-item">Semua Kos</a>
                            </div>
                        </div>
                        <a href="testimoni.php" class="nav-item nav-link active">Testimoni</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div class="nav-item dropdown">
                    <form action="logout.php" method="post">
                        <button type="submit" class="btn btn-primary px-3 d-none d-lg-flex">Logout</button>
                    </form>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Hallo, <span class="text-primary">Angel</span></h1>
                    <p class="animated fadeIn mb-4 pb-2">Scrool kebawah ya untuk lihat kos lainnya!!</p>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>--- Pilih Kategori Kos! ---</option>
                                    <option value="1">Perempuan</a></option>
                                    <option value="2">Laki-laki</option>
                                    <option value="3">Campuran</option>
                                    <option value="4">Semua Kos</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>--- Pilih Lokasi Kos! ---</option>
                                    <option value="5">Rungkut</option>
                                    <option value="6">Gunung Anyar</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100 py-3">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">

                    <?php
                    include ("koneksi.php");

                    $id_kos = isset($_GET['id_kos']) ? $_GET['id_kos'] : '';
                    $id_kos = mysqli_real_escape_string($koneksi, $id_kos);

                    $sql="SELECT * FROM tb_kos WHERE id_kos='$id_kos'";
                    $hasil = mysqli_query($koneksi, $sql);
                    $nomorWhatsapp = "085706297929";
                    $waUrl = "https://api.whatsapp.com/send?phone=" . $nomorWhatsapp;

                    $row = $hasil->fetch_assoc();
                    ?>

                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="img/kos.jpeg">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4"> </h1>
                        <table class="table">
                            <h3>
                                <?php echo $row['NamaKos'] ?>
                            </h3>
                            <thead>
                                <tr>
                                    <th>Nama Pemilik: </th>
                                    <th>
                                        <?php echo $row['NamaPemilik'] ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Harga Kos :</td>
                                    <td>
                                        <?php echo $row['HargaKos'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kamar Mandi :</td>
                                    <td>
                                        <?php echo $row['KamarMandi'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jumlah Per Kamar :</td>
                                    <td>
                                        <?php echo $row['JumlahPerkamar'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Wilayah :</td>
                                    <td>
                                        <?php echo $row['Wilayah'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat Lengkap :</td>
                                    <td>
                                        <?php echo $row['Alamat'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Deskripsi :</td>
                                    <td>
                                        <?php echo $row['Deskripsi'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nomor Whatsapp :</td>
                                    <td>
                                        <?php echo '<a href="' . $waUrl . '" target="_blank" class="btn btn-primary">Hubungi Pemilik via Whatsapp</a>';
                                    ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <center>
                        <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
                            <a href="FormCheckout.php?id_kos=<?php echo $id_kos; ?>" class="btn btn-success center">Klik untuk memesan</a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <!-- About End -->

    </div>
    
    <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Rungkut, Surabaya Timur, Indonesia
                        </p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+062 8123 1236 960</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>yukkos@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">Home</a>
                        <a class="btn btn-link text-white-50" href="">Kategori Kos</a>
                        <a class="btn btn-link text-white-50" href="">Testimoni</a>
                        <a class="btn btn-link text-white-50" href="">Contact</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Photo Yukkos</h5>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-3.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-4.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-5.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4"><br><br><br>Newsletter</h5>
                        <p>Yukkos the best!</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Yukkos</a>, All Right Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>