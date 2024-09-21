<?php
$server="localhost";
$username="root";
$password="";
$database="db_wisata";

$db = new mysqli($server, $username, $password, $database);

if($db->connect_error){
    die ("Koneksi gagal " . $db->connect_error);
}

?>