<!DOCTYPE html>
<html lang="en">

<head>
    <script>
            function register() {
                // Logika registrasi pengguna
                // ...

                // Menampilkan alert dan mengarahkan ke halaman index
                alert("Registrasi berhasil!");
                window.location.href = "FormLoginUser.php";
            }
    </script>
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
    <title>Register</title>
    <style>
        .passwordIcon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Form Register Penyewa</h3>
                        <h7>Silahkan Isi Data Berikut Ini!</h7>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="registeruser.php">
                            <div class="form-group row">
                                <label for="username" class="col-sm-4 col-form-label">Username:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fullname" class="col-sm-4 col-form-label">Nama Panggilan:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="namapanggilan" name="namapanggilan" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fullname" class="col-sm-4 col-form-label">Full Name:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="fullname" name="fullname" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-4 col-form-label">Password:</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="password" name="password" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fas fa-eye password-icon" onclick="togglePassword()"></i>
                                        </span>  
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-8 offset-sm-4">
                                    <button type="submit" onclick="register()" class="btn btn-primary">Register</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("password");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
</body>
</html>