<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - CRUD Jadwal</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>



    <?php
    $pesan = "";
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            $pesan = "Login gagal ! username dan password salah";
            echo "<div class='alert alert-danger mt-4' role=alert'>
                $pesan
            </div>
            ";
        } elseif ($_GET['pesan'] == "logout") {
            $pesan = "Anda telah berhasil logout";
            echo "<div class='alert alert-danger mt-4' role=alert'>
            $pesan
        </div>
        ";
        } elseif ($_GET['pesan'] == "belum_login") {
            $pesan = "Anda harus login untuk mengakses halaman admin";
            echo "<div class='alert alert-danger mt-4' role=alert'>
            $pesan
        </div>
        ";
        }
    }

    ?>

    <div class="login-box">
        <h2>Login</h2>
        <form action="ceklogin.php" method="post">
            <div class="user-box">
                <input type="text" name="username" placeholder="Username " required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" placeholder="Password" required="">
                <label>Password</label>
            </div>
            <button type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Login
            </button>
        </form>

        <p> Login Page &copy 2023 | Kwan Hoi Lam

    </div>


</body>

</html>