<?php 
include '../db.php';
session_start();

$email = $_SESSION['email'];

if (!$email) {
    header('location:login_employe.php');
    exit();
}

    echo "Employe";

?>






