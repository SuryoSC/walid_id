<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "walid_id";

$db = mysqli_connect($hostname, $username, $password, $database_name);

    if($db->connect_error) {
        echo "koneksi error". $db->connect_error;
        die("error!");
    }

// echo "koneksi berhasil";

?>