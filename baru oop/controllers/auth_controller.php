<?php
session_start(); // Mulai sesi untuk dapat mengatur variabel sesi

include "../models/user_model.php"; // Include model user untuk login

$user = new Login(); // Inisialisasi objek Login

// Fungsi untuk menangani pesan error
function redirectWithMessage($url, $message) {
    $_SESSION['message'] = $message;
    header("Location: $url");
    exit;
}

// Login Proses
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $username = htmlspecialchars(trim($_POST['username'])); // Sanitasi input
    $password = $_POST['password']; // Password tidak langsung disha1 kan

    // Validasi input (misal: tidak boleh kosong)
    if (empty($username) || empty($password)) {
        redirectWithMessage('../views/v_login.php', 'Username atau password tidak boleh kosong');
    }

    // Melakukan proses login dan validasi password dengan password_verify
    $aksi = $user->login($username, $password);

    if ($aksi) {
        // Login berhasil, set session username
        $_SESSION['username'] = $username;
        // Arahkan ke halaman dashboard setelah login berhasil
        header("Location: ../views/dashboard.php");
        exit;
    } else {
        // Login gagal, kembalikan ke halaman login dengan pesan error
        redirectWithMessage('../views/v_login.php', 'Username atau password salah');
    }
}

// Logout Proses
if (isset($_GET['aksi']) && $_GET['aksi'] == 'logout') {
    session_destroy();
    redirectWithMessage('../views/v_login.php', 'Anda telah keluar dari sistem');
}

// Registrasi Akun Baru
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tambah_akun'])) {
    $username = htmlspecialchars(trim($_POST['username'])); // Sanitasi input
    $password = $_POST['password'];

    // Validasi input
    if (empty($username) || empty($password)) {
        redirectWithMessage('../views/v_registrasi.php', 'Username atau password tidak boleh kosong');
    }

    // Hash password menggunakan password_hash yang lebih aman
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Melakukan proses penambahan akun
    $aksi = $user->tambah_akun($username, $hashedPassword);

    if ($aksi) {
        redirectWithMessage('../views/v_login.php', 'Akun berhasil ditambahkan');
    } else {
        redirectWithMessage('../views/v_registrasi.php', 'Akun gagal ditambahkan');
    }
}
?>
