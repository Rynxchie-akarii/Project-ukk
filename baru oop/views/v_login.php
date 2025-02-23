<?php
session_start(); // Memulai sesi untuk memeriksa apakah pengguna sudah login

// Jika pengguna sudah login, arahkan ke dashboard
if (isset($_SESSION['username'])) {
    header("Location: ../views/dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../views/style/login.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="../controllers/auth_controller.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" name="login">Login</button>
        </form>
        <p>Don't have an account? <a href="V_registrasi.php">Register here</a></p>
    </div>
</body>
</html>
