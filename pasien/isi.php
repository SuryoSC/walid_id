<?php
    include "../service/koneksi.php";
    session_start();

    $id = $_GET["id"];
    echo "jadwal id :" . $id . "<br>";

    $id_user = $_SESSION["id"];

    $sql = "SELECT * FROM users WHERE id=$id_user";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();

    $user = $data["email"];
    $password = $data["password"];

    echo "id user:" . $id_user . "<br>";
    echo "email user:" . $user . "<br>";
    echo "password" . $password . "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>