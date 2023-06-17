<?php
// Mengambil data kos berdasarkan ID kos yang dipilih
require 'koneksi.php';
$id_kos = $_GET['id_kos']; // ID kos yang ingin dipesan
$query_kos = "SELECT NamaKos, HargaKos, KategoriKos FROM tb_kos WHERE id_kos = '$id_kos'";
$result_kos = mysqli_query($koneksi, $query_kos);
$dataKos = mysqli_fetch_assoc($result_kos);
$NamaKos = $dataKos['NamaKos'];
$KategoriKos = $dataKos['KategoriKos'];
$hargaKos = $dataKos['HargaKos'];

// Menghitung total harga
if (isset($_POST['lamasewa'])) {
    $lamasewa = $_POST['lamasewa'];
    $totalHarga = $lamasewa * $hargaKos;
} else {
    $totalHarga = 0;
}

// Metode pembayaran options
$pembayaranOptions = array(
    'transfer' => 'Transfer Bank',
    'cash' => 'Pembayaran Tunai',
    'gopay' => 'GoPay',
    'ovo' => 'OVO'
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="utf-8">
    <title>Yukos!</title>
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

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 d-flex justify-content-center align-items-center rounded">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Form Checkout <?php echo $NamaKos; ?></h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="proses_checkout.php">
                            <input type="hidden" name="id_transaksi" value="<?php echo $id_transaksi; ?>">
                            <div class="form-group">
                                <label for="NamaKos">Nama Kos:</label>
                                <input type="text" class="form-control" id="NamaKos" name="NamaKos" value="<?php echo $NamaKos; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="KategoriKos">Kategori Kos:</label>
                                <input type="text" class="form-control" id="KategoriKos" name="KategoriKos" value="<?php echo $KategoriKos; ?>" readonly>
                            </div>
                            <div class="form-group row">
                                <div>
                                    <label for="namalengkap">Nama Lengkap:</label>
                                    <div class="col-sm-8">
                                        <input type="varchar" class="form-control" id="namalengkap" name="namalengkap" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div>
                                    <label for="email">Email:</label>
                                    <div class="col-sm-8">
                                        <input type="varchar" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div>
                                    <label for="lamasewa">Lama menyewa per bulan:</label>
                                    <div class="col-sm-8">
                                        <input type="number" name="lamasewa" id="lamasewa" class="form-control"
                                            onchange="updateTotal()">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div>
                                    <label for="harga">Harga Kos:</label>
                                    <input type="text" name="harga" id="harga" class="form-control"
                                        value="<?php echo $hargaKos; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div>
                                    <label for="totalHarga">Total Harga:</label>
                                    <input type="text" name="totalHarga" id="totalHarga" class="form-control"
                                        value="<?php echo $totalHarga; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div>
                                    <label for="metodepembayaran">Metode Pembayaran:</label>
                                    <select name="metodepembayaran" id="metodepembayaran" class="form-control">
                                        <?php foreach ($pembayaranOptions as $value => $label) {
                                            echo '<option value="' . $value . '">' . $label . '</option>';
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1 offset-sm-4">
                                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateTotal() {
            var harga = <?php echo $hargaKos; ?>;
            var lamasewa = document.getElementById('lamasewa').value;
            var totalHarga = 0;

            if (lamasewa && harga) {
                totalHarga = parseFloat(lamasewa) * parseFloat(harga);
            }

            document.getElementById('totalHarga').value = totalHarga;
        }
    </script>
</body>

</html>