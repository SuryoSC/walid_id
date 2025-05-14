<?php
// $host = 'localhost';
// $user = 'root'; // sesuaikan
// $pass = '';     // sesuaikan
// $dbname = 'jajal_app';

// $conn = new mysqli($host, $user, $pass, $dbname);

// if ($conn->connect_error) {
//     die("Koneksi gagal: " . $conn->connect_error);
// }
?>
<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "walidid";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connect_error) {
    echo "koneksi database rusak";
    die("error!");
}

// echo "berhasil terhubung dengan database";
?>