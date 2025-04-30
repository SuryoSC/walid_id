<?php

$email = $_POST['email'];

if(empty($email)) {
    echo "<script>
        alert('Email wajib diisi!');
        window.location.href = 'forgot-password.php';
    </script>";
} else {
    header('Location:recover-password.php');
    exit;
}
?>