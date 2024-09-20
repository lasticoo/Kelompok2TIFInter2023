<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - WandeLust</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/formhome.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand" href="formhome.php">
                <img src="image/LOGO_WONDERLUST-removebg-preview 2.png" alt="Logo WanderLust" class="navbar-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Katalog</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="text-center">Form Registrasi</h2>
        <form id="registrationForm" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="gender" name="gender" required>
                    <option value="">Pilih...</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="birthdate" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate" required>
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>

        <div id="successMessage" class="mt-4 alert alert-success d-none"></div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $gender = htmlspecialchars($_POST['gender']);
            $birthdate = htmlspecialchars($_POST['birthdate']);

            // Simpan data ke database atau lakukan tindakan lainnya
            echo "<script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const successMessage = document.getElementById('successMessage');
                        successMessage.textContent = 'Registrasi berhasil untuk $name ($email)';
                        successMessage.classList.remove('d-none');
                    });
                  </script>";
        }
        ?>
    </div>

    <footer class="footer">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-md-4 col-sm-12 text-center mb-4">
                    <h3>Pembuat</h3>
                    <p>
                        Kelompok 2 <br>
                        Teknik Informatika Golongan Internasional 2023 <br>
                        Politeknik Negeri Jember
                    </p>
                </div>
                <div class="col-md-4 col-sm-12 text-center mb-4">
                    <h3>Follow Us</h3>
                    <ul class="list-unstyled">
                        <li><a href="https://www.instagram.com/lasticoo" class="footer-link">Instagram Wanderlust</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 text-center mb-4">
                    <h3>Developer Team</h3>
                    <ul class="list-unstyled">
                        <li><a href="https://www.instagram.com/lasticoo" class="footer-link">Lastico Ridho Alparesz</a></li>
                        <li><a href="#" class="footer-link">Muhammad Fadillah Iqbal Arianto</a></li>
                        <li><a href="#" class="footer-link">Syausan Nouvalia Barozat</a></li>
                        <li><a href="#" class="footer-link">Nisrina Azhari Jinan</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center bg-light py-3">
            &copy; 2024 <strong>WandeLust</strong>. All Rights Reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>