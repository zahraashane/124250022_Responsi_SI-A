<?php 
    session_start();
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password=="123"){
        $_SESSION['login'] = true;
        header ("location : home.php");
        exit();
    } else {
        $_SESSION['error'] = "Username atau Password salah";
        header ('location : index.php');
        exit();
    }

?>