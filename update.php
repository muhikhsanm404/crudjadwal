<?php
include 'koneksi.php';

$id = $_POST['id'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$pelajaran = $_POST['pelajaran'];
$guru = $_POST['guru'];

$query = "UPDATE jadwal SET hari='$hari', jam='$jam', pelajaran='$pelajaran', guru='$guru' WHERE id='$id'";
mysqli_query($koneksi, $query);

header("Location: index.php");
