<!DOCTYPE html>
<html>

<head>
    <title>UAS - CRUD JADWAL UNISBA</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>CRUD Jadwal</h1>
    <a href="tambah.php"> <button type="submitt"> Tambahkan Data </button></a>
    <a href="logout.php"> <button type="logout"> Logout </button></a> <br>
    </div>
    <form action="index.php" method="GET">
        <button type="submit">Cari </button>
        <input type="text" name="cari" id=cari placeholder="Cari...">


        <div class="table-container">
            <table>
                <tr>
                    <!-- <th>ID</th> -->
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Pelajaran</th>
                    <th>Guru</th>
                    <th>Aksi</th>
                </tr>
                <?php
                session_start();
                include 'koneksi.php';

                if (!isset($_SESSION['username'])) {
                    header("Location: login.php");
                    exit;
                }

                // Proses pencarian data
                if (isset($_GET['cari'])) {
                    $cari = $_GET['cari'];
                    $query = "SELECT * FROM jadwal WHERE hari LIKE '%$cari%' OR pelajaran LIKE '%$cari%' OR guru LIKE '%$cari%'";
                } else {
                    $query = "SELECT * FROM jadwal";
                }

                $result = mysqli_query($koneksi, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        // echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['hari'] . "</td>";
                        echo "<td>" . $row['jam'] . "</td>";
                        echo "<td>" . $row['pelajaran'] . "</td>";
                        echo "<td>" . $row['guru'] . "</td>";
                        echo "<td>";
                        echo "<button type='edit'> <a href='edit.php?id=" . $row['id'] . "'>Edit </button></a> | ";
                        echo "<button type='submitt'> <a href='hapus.php?id=" . $row['id'] . "'>Hapus </button> </a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Data tidak ditemukan</td></tr>";
                }
                ?>
            </table>
        </div>
    </form>
    <h4> 2023 &copy KWAN HOI LAM </h4>
</body>

</html>