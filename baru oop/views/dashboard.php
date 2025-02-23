<?php
SESSION_START(); // Mulai sesi untuk memeriksa sesi login

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika tidak login, arahkan ke halaman login
    header("Location: ../Views/V_login.php");
    exit;
}

$username = $_SESSION['username']; // Menyimpan username dari sesi
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data hp</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../views/style/dashboard.css"> 

</head>
<body>

    <?php include 'navbar.php'; ?>

    <div class="content">
    <link rel="stylesheet" href="../views/style/ts.css"> 
    <h2>Selamat Datang di Gudang HP Samsung <strong><?php echo htmlspecialchars($username); ?>!</strong></h2>
    <p>Website ini adalah tempat bagi Anda untuk melihat, mengelola, dan menambah data produk HP Samsung yang tersedia di gudang kami..</p>
</div>
</body>
</html>