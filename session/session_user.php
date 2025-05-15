<?php
    if(!isset($_SESSION['id'])) {
        header('location: form_login.php');
        exit();
    }
?>