<?php
session_start();
// Cek apakah pengguna sudah login
if (!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form CV</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Form CV</h1>
        <form action="display_cv.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            <br>
            <label for="tempat_lahir">Tempat Lahir:</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir" required>
            <br>
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
            <br>
            <label for="riwayat_pendidikan">Riwayat Pendidikan:</label>
            <textarea id="riwayat_pendidikan" name="riwayat_pendidikan" required></textarea>
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>