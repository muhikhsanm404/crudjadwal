<?php

include 'koneksi.php';
session_start();
if (!empty($_POST)) {
    $username = $_POST["username"];
    $password = $_POST["password"];
}
$data = mysqli_query($koneksi, "SELECT * FROM akun WHERE username = '$username' AND password='$password'");
$cek = mysqli_num_rows($data);
if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:index.php");
} else {
    header("location:login.php?pesan=gagal");
}
