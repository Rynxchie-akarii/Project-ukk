<?php
include_once "../models/HpModel.php"; // Memasukkan HpModel

$hpModel = new HpModel();
$dataHp = $hpModel->getAllHp();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menerapkan OOP untuk UKK</title>
    <link rel="stylesheet" href="../views/style/tb.css">
    <link rel="stylesheet" href="../views/style/nb.css"> 
</head>
<body>

<?php
// Start the session to access session variables
session_start();

// Check if the user is logged in by looking for a session variable (e.g., 'username')
$loggedIn = isset($_SESSION['username']) ? true : false;
?>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="logo">Gudang hp samsung</a>
            <link rel="stylesheet" href="../views/style/navbar1.css"> 
            <ul class="navbar-links">
             <li><a href="home.php" class="nav-link">Home</a></li>
            <li><a href="v_add.php" class="nav-link">Tambah data</a></li>
            <li><a href="supplier.php" class="nav-link">Supplier</a></li>
            <!-- Menambahkan item Logout -->
            <li><a href="logout.php" class="nav-link">Logout</a></li>
            </ul>
            <div class="navbar-toggle" id="navbar-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

<h2>Data Gudang HP Samsung</h2>

<div class="container">
    <table>
        <thead>
            <tr>
                <th>No.</th> <!-- Ganti ID dengan No. -->
                <th>Nama HP</th>
                <th>Varian</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Nama Supplier</th>
                <th>Alamat</th>
                <th>No telpon</th>
                <th>Tanggal Masuk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no = 1; // Inisialisasi nomor urut
        foreach ($dataHp as $row) : ?>
            <tr>
                <td><?= $no++; ?></td> <!-- Menampilkan nomor urut -->
                <td><?= htmlspecialchars($row['nama_hp']); ?></td>
                <td><?= htmlspecialchars($row['varian']); ?></td>
                <td><?= htmlspecialchars($row['stok']); ?></td>
                <td>Rp <?= number_format($row['harga'], 0, ',', '.'); ?></td>
                <td><?= htmlspecialchars($row['nama_supplier']); ?></td>
                <td><?= htmlspecialchars($row['alamat']); ?></td>
                <td><?= htmlspecialchars($row['no_telepon']); ?></td>
                <td><?= htmlspecialchars($row['tanggal_masuk']); ?></td>
                <td>
                   <a href="v_edit.php?id=<?= $row['id']; ?>" style="color: #3498db; font-weight: bold; text-decoration: none;" onmouseover="this.style.color='#2980b9';" onmouseout="this.style.color='#3498db';">Edit</a> |
                   <a href="delete.php?id=<?= $row['id']; ?>" style="color: #e74c3c; font-weight: bold; text-decoration: none;" onmouseover="this.style.color='#c0392b';" onmouseout="this.style.color='#e74c3c';" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
