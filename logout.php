<?php
session_start();
session_destroy(); // Hapus session
header('Location: index.php'); // Redirect ke halaman login
exit();
?>