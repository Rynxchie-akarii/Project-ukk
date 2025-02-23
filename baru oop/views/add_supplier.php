<?php
// Memasukkan model untuk kategori (misalnya jika ada kategori supplier dalam database)
include_once "../models/SupplierModel.php"; 

// Membuat objek SupplierModel
$supplierModel = new SupplierModel();

// Mengambil daftar supplier (misalnya dari database)
$suppliers = $supplierModel->getAllSuppliers(); // Pastikan ada method getAllSuppliers() yang mengambil daftar supplier
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Supplier</title>
    <link rel="stylesheet" href="../views/style/add_supp.css"> <!-- Menghubungkan file CSS -->
</head>
<body>
    <div class="form-container">
        <h1>Tambah Supplier</h1>
        <form action="../controllers/add_supplier_c.php" method="POST">
            <div class="form-group">
                <label for="nama_supplier">Nama Supplier:</label>
                <input type="text" name="nama_supplier" id="nama_supplier" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" id="alamat" required>
            </div>
            <div class="form-group">
                <label for="no_telepon">No Telepon:</label>
                <input type="text" name="no_telepon" id="no_telepon" required>
            </div>

                        <div class="form-group">
                <!-- Tombol Submit (Tambah Supplier) -->
                <button type="submit" class="btn-submit">Tambah Supplier</button>
            </div>

            <div class="form-group">
                <!-- Tombol Cancel yang mengarah ke supplier.php -->
                <a href="supplier.php" class="btn-cancel">Cancel</a>
            </div>

        </form>
    </div>
</body>
</html>
