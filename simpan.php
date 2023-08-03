<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$hari = $_POST['hari'];
$jam = $_POST['jam'];
$pelajaran = $_POST['pelajaran'];
$guru = $_POST['guru'];

$query = "INSERT INTO jadwal (hari, jam, pelajaran, guru) VALUES ('$hari', '$jam', '$pelajaran', '$guru')";
mysqli_query($koneksi, $query);

header("Location: index.php");
