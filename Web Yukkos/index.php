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
                <a href="index.php" class="navbar-brand d-flex align-items-center text-center">
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
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <!-- <a href="about.html" class="nav-item nav-link">About</a> -->
                        <div class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kategori Kos</a>
                            <div class="dropdown-menu rounded-0 m-0 dropdown-menu-end">
                                <a href="haruslogin.php" class="dropdown-item">Perempuan</a>
                                <a href="haruslogin.php" class="dropdown-item">Laki-laki</a>
                                <a href="haruslogin.php" class="dropdown-item">Campuran</a>
                                <a href="haruslogin.php" class="dropdown-item">Semua Kos</a>
                            </div>
                        </div>
                        <a href="testimoni.php" class="nav-item nav-link active">Testimoni</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle btn btn-primary px-3 d-none d-lg-flex"
                        data-bs-toggle="dropdown">Login</a>
                    <div class="dropdown-menu rounded-0 m-0 dropdown-menu-end">
                        <a href="FormLoginUser.php" class="dropdown-item">Penyewa</a>
                        <a href="FormLoginPemilik.php" class="dropdown-item">Pemilik</a>
                        <!-- <a href="" class="btn btn-primary px-3 d-none d-lg-flex">Add Property</a> -->
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Cari <span class="text-primary">Berbagai Kos</span>
                        Disini!!!</h1>
                    <p class="animated fadeIn mb-4 pb-2">Annyeong Haseyo Yeorobun!!👋🏻👋🏻👋🏻 <br>
                        Jelajahi berbagai pilihan hotel berkualitas dengan harga terjangkau. <br>
                        Yuk, mulai mencari kos dengan:</p>
                    <h5>YUKKOS!🙌🏻🙌🏻<h5>
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
                                <select class="form-select border-0 py-3" onchange="redirectToPage(this.value)">
                                    <option selected>--- Pilih Kategori Kos! ---</option>
                                    <option value="1">Perempuan</a></option>
                                    <option value="2">Laki-laki</option>
                                    <option value="3">Campuran</option>
                                    <option value="4">Semua Kos</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3" onchange="redirectToPage(this.value)">
                                    <option selected>--- Pilih Lokasi Kos! ---</option>
                                    <option value="5">Rungkut</option>
                                    <option value="6">Gunung Anyar</option>
                                </select>
                            </div>

                            <!-- <script>
                                function redirectToPage(selectedValue) {
                                    switch (selectedValue) {
                                        case '1':
                                            window.location.href = 'FormPerempuan.php';
                                            break;
                                        case '2':
                                            window.location.href = 'FormLaki-laki.php';
                                            break;
                                        case '3':
                                            window.location.href = 'FormCampuran.php';
                                            break;
                                        case '4':
                                            window.location.href = 'FormAllKost.php';
                                            break;
                                        case '5':
                                            window.location.href = 'KosRungkut.php';
                                            break;
                                        case '6':
                                            window.location.href = 'KosGunungAnyar.php';
                                            break;
                                        // Tambahkan case lainnya untuk setiap nilai yang ingin diarahkan ke URL yang berbeda
                                        default:
                                            // Aksi default jika tidak ada nilai yang cocok
                                            break;
                                    }
                                }
                            </script> -->
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100 py-3">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->

        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Rekomendasi Kos!</h1>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-3" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <?php
                            include ("koneksi.php");
                            $sql="SELECT * FROM tb_kos WHERE id_kos BETWEEN 1 AND 6";
                            $hasil = mysqli_query($koneksi, $sql);

                            $jmlKos = mysqli_num_rows ($hasil);
                            if ($jmlKos > 0) {
                                while ($row = mysqli_fetch_assoc($hasil)) {
                            ?>

                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/property-1.jpg" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            <?= $row["KategoriKos"]; //echo $row["KategoriKos"] ?>
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">
                                            <?= "Rp".number_format($row["HargaKos"], 0, ",", ".").",-"; ?>
                                        </h5>
                                        <a class="d-block h5 mb-2" href="about.php">
                                            <?= $row["NamaKos"]; //echo $row["NamaKos"] ?>
                                        </a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>
                                            <?= $row["Alamat"]; //echo $row["Alamat"] ?>
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>
                                            <?= $row["JumlahPerkamar"]; //echo $row["JumlahPerkamar"] ?></a>
                                        </small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>
                                            <?= $row["KamarMandi"]; //echo $row["KamarMandi"] ?></a>
                                        </small>
                                        <a href="transaksi.php?id_kos=<?php echo $row['id_kos'];?>" class="btn btn-primary">Beli</a>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                }
                            } 
                            ?>

                            <div class="col-12 text-center">
                                <a class="btn btn-primary py-3 px-5" href="haruslogin.php">Browse More Kos >>></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->


        <!-- Call to Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded w-100" src="img/call-to-action.jpg" alt="">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">Contact With Yukkos! Customer Service</h1>
                                </div>
                                <a href="https://api.whatsapp.com/send?phone=081231236960"
                                    class="btn btn-primary py-3 px-4 me-2">
                                    <i class="fa fa-phone-alt me-2"></i>Hubungi CS</a>
                                <a href="" class="btn btn-dark py-3 px-4">
                                    <i class="fa fa-question-alt me-2"></i>LihatPertanyaan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Testimoni!</h1>
                    <p>Apa kata mereka?</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>Yukkos Mantap!!!</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg"
                                    style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Hermione</h6>
                                    <small>Mahasiswa</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>Yukkos Bagus!</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg"
                                    style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Gabriel</h6>
                                    <small>Mahasiswa</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>Keren sekali </p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg"
                                    style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Michael</h6>
                                    <small>Mahasiswa</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


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