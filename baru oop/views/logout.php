<?php
session_start();

// Hancurkan semua data sesi
session_unset();
session_destroy();

// Arahkan pengguna kembali ke halaman login setelah logout
header("Location: v_login.php");
exit();
?>
