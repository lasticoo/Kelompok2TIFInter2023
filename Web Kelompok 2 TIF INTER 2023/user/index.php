<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff;
            /* Warna dasar homepage */
        }

        .navbar {
            background-color: #B4D4FF;
            /* Warna navbar */
        }

        .carousel-item img {
            max-height: 500px;
            /* Atur tinggi gambar slider */
            object-fit: cover;
            /* Jaga rasio gambar */
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Wisata Indonesia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Pemesanan Tiket</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Cek Status Bayar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Service Jadwal</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Cetak Status Tiket</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Form Pengaduan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tampilan Data</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/bromo1.png" class="d-block w-100" alt="Gunung Bromo">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Gunung Bromo</h5>
                    <p>Keindahan alam yang menakjubkan di Jawa Timur.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/bromo2.png" class="d-block w-100" alt="Wisata di Bali">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Gunung Bromo</h5>
                    <p>Menikmati keindahan pantai dan budaya yang kaya.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>