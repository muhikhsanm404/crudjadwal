<!DOCTYPE html>
<html>

<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Edit Data Jadwal Pelajaran</h1>
    <?php
    session_start();
    include 'koneksi.php';

    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
    }

    $id = $_GET['id'];
    $query = "SELECT * FROM jadwal WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    ?>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label>Hari:</label>
        <input type="text" name="hari" value="<?php echo $row['hari']; ?>">
        <label>Jam:</label>
        <input type="text" name="jam" value="<?php echo $row['jam']; ?>">
        <label>Pelajaran:</label>
        <input type="text" name="pelajaran" value="<?php echo $row['pelajaran']; ?>">
        <label>Guru:</label>
        <input type="text" name="guru" value="<?php echo $row['guru']; ?>">
        <button type="submit">Update</button>
    </form>
    <h4> 2023 &copy KWAN HOI LAM </h4>
</body>

</html>