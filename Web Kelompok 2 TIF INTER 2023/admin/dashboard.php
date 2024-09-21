<?php
session_start();
require_once "koneksi.php";
date_default_timezone_set('Asia/Jakarta');

if(empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo'
    <br><br><br><br><br><br><br><br>
    <center>
    <b>Maaf, silahkan login kembali</b><br>
    <b>Anda sudah keluar dari sistem</b><br>
    <b>atau anda belum melakukan login</b><br>

    <a href="index.php" title="Klik Gambar ini untuk kembali ke Halaman Login"><img src="image/key1.png" height="100" width="100"></img></a>

    </center> 
    ';
}else
{
    

?>


<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <style>
        body{
            margin:0;
            padding : 0;
            height: 100%;
            }
            
            .nav-pills {
    background-color: #FFAF00; /* Background untuk sidebar */
    color: white;
    min-height: 100vh; /* Membuat sidebar memanjang sampai bawah */
    padding-top: 20px; /* Tambah jarak atas */
}

.nav-pills .nav-link {
    color: #ffffff; 
    border-radius: 2px; 
}

.nav-pills .nav-link.active {
    background-color: #007bff; /* Warna background link aktif */
    color: #ffffff; /* Warna teks untuk link aktif */
}


.nav-pills .nav-link:hover {
    background-color: #495057; 
    color: #ffffff;
}


.col-lg-2.position-fixed {
    position: fixed;
    top: 50%; 
    left: 0; 
    width: 17%;
    height: 200vh; /* Pastikan sidebar memanjang seluruh layar */
    padding: 40px; 
    background-color: #FFAF00; /* Background untuk sidebar */
    z-index: 1000;
}

    
        </style>
    </head>

    <body>
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 py-2 bg-dark text-end top-fixed">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    User
                </button>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                 <li><a class="dropdown-item" href="#">
                 <div class="d-flex align-items-center">
          
            <div class="flex-shrink-0">
                <img class="mr-3" src="image/user.png" height="50" width="50" alt="Generic placeholder image" style="border-radius: 50%; object-fit: cover;">
            </div>
            <!-- Teks di sebelah kanan gambar -->
            <div class="flex-grow-1 ms-3">
                <h5 class="mb-0"><?php echo $_SESSION['namaadmin'] ?></h5>
                <small><p class="text-muted"><i class="bi bi-clock-fill"></i>Pkl <?php echo date('H:i:s')  ?>WIB</l></small>
            </div>
        </div>
                    </a></li>

                    <li><a class="dropdown-item" href="dashboard.php?hal=user"><i class="bi bi-gear"></i>Setting</a></li>
                    <li><a class="dropdown-item" href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar dari aplikasi?')">
                        <img src="image/logout(1).png">Logout</a></li>
                </ul>
       </div>

            </div>
        </div>
        <div class="row mt-4">
    <div class="col-lg-2 position-fixed vh-100" style="left: 0; top: 54px; padding: 0;">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link <?php echo (isset($_GET['hal']) && $_GET['hal'] == 'home' ? "active" : "") ?>" href="dashboard.php?hal=home">Home</a>
            <a class="nav-link <?php echo (isset($_GET['hal']) && $_GET['hal'] == 'profile' ? "active" : "") ?>" href="dashboard.php?hal=profile">Profile</a>
            <a class="nav-link <?php echo (isset($_GET['hal']) && $_GET['hal'] == 'galeri' ? "active" : "") ?>" href="dashboard.php?hal=galeri">Galeri</a>
            <a class="nav-link <?php echo (isset($_GET['hal']) && $_GET['hal'] == 'destinasi-wisata' ? "active" : "") ?>" href="dashboard.php?hal=destinasi-wisata">Destinasi Wisata</a>
            <a class="nav-link <?php echo (isset($_GET['hal']) && $_GET['hal'] == 'berita' ? "active" : "") ?>" href="dashboard.php?hal=berita">Berita</a>
            <a class="nav-link <?php echo (isset($_GET['hal']) && $_GET['hal'] == 'kategori' ? "active" : "") ?>" href="dashboard.php?hal=kategori">Kategori</a>
            <a class="nav-link <?php echo (isset($_GET['hal']) && $_GET['hal'] == 'keluhan' ? "active" : "") ?>" href="form_service.php?hal=keluhan">Keluhan Pengguna</a>
        </div>
    </div>
</div>


            <div class="col-lg-10 offset-2">

             <?php
              
              if(isset($_GET['hal'])){

                switch($_GET['hal']) {
                    case 'home'; 
                    include "modul/mod_home/home.php";
                    break;
                    case 'profile':
                        include "modul/mod_profile/profile.php";
                    break;
                    case 'galeri':
                        include "modul/mod_galeri/galeri.php";
                        break;
                    case 'destinasi-wisata':
                        include "modul/mod_wisata/wisata.php";
                        break;
                    case 'kategori':
                        include "modul/mod_kategori/kategori.php";
                        break;
                    case 'berita':
                        include "modul/mod_berita/berita.php";
                        break;
                    case 'user':
                        include "modul/mod_user/user.php";
                        break;
                        default:
                        echo "<h1>Halaman Tidak Ditemukan</h1>";
                
                }
              }else{
                header("location:dashboard.php?hal=home");
              }
             


             ?>
            </div>   
        </div>


      </div>
        <footer>
        </footer>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
<?php
}
?>