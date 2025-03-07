<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi password (domain dari email)
    $domain = explode('@', $email)[1]; // Ambil domain dari email
    if ($password === $domain) {
        // Simpan email di session
        $_SESSION['email'] = $email;
        // Redirect ke halaman form CV
        header('Location: form_cv.php');
        exit();
    } else {
        echo "Login gagal! Password harus domain dari email.";
    }
}
?>