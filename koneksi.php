<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "name_database";

$db = new mysqli($server, $username, $password, $database);

if($db->connect_error){
    die("koneksi eror" . $db->connect_error);
}

echo "Koneksi Berhasil";

?>
