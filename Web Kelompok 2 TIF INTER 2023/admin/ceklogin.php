<?php
include "koneksi.php";

session_start();


$username =  mysqli_real_escape_string($db, $_POST['username']);
$password = ($_POST['password']);

$hashed_password = mysqli_real_escape_string($db, md5($password));

$query = mysqli_query($db, "SELECT * FROM admin WHERE username='$username' AND password='$hashed_password'");
$cek = mysqli_num_rows($query);
$r = mysqli_fetch_array($query);

if ($cek > 0){
    $_SESSION['namaadmin'] = $r['nama_admin'];
    $_SESSION['username'] = $r['username'];
    $_SESSION['password'] = $r['password'];
    $_SESSION['idadmin']  = $r['id_admin'];

    
    if(!empty($_POST["remember"])){
        setcookie("username", $_POST["username"], time() + (60 * 60 * 24 * 5), "/");
        setcookie("password", $_POST["password"], time() + (60 * 60 * 24 * 5), "/"); 
    } else {
        // Hapus cookie jika "Remember Me" tidak dicentang
        setcookie("username", "", time() - 3600, "/");
        setcookie("password", "", time() - 3600, "/");
    }

    header("location:dashboard.php?hal=home");

}else{
    header("location:gagal_login.php");
}


?>