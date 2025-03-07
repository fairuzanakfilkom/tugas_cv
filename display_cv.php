<?php
session_start();
// Cek apakah pengguna sudah login
if (!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit();
}

// Ambil data dari form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $riwayat_pendidikan = $_POST['riwayat_pendidikan'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Anda</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>CV Anda</h1>
        <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
        <p><strong>Nama:</strong> <?php echo $nama; ?></p>
        <p><strong>Tempat Lahir:</strong> <?php echo $tempat_lahir; ?></p>
        <p><strong>Tanggal Lahir:</strong> <?php echo $tanggal_lahir; ?></p>
        <p><strong>Riwayat Pendidikan:</strong> <?php echo $riwayat_pendidikan; ?></p>
        <br>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>