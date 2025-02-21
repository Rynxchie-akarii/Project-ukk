<?php
// Mengambil data supplier dari model
include '../models/SupplierModel.php';

$supplierModel = new SupplierModel();
$suppliers = $supplierModel->getAllSuppliers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Supplier</title>
    <link rel="stylesheet" href="../views/style/table_supplier.css">
</head>
<body>

    <h1>Daftar Supplier</h1>

    <!-- Container Flex untuk menyusun tabel dan tombol -->
    <div class="content-container">
        <!-- Tabel Data Supplier -->
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Supplier</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($suppliers as $supplier): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= htmlspecialchars($supplier['nama_supplier']) ?></td>
                    <td><?= htmlspecialchars($supplier['alamat']) ?></td>
                    <td><?= htmlspecialchars($supplier['no_telepon']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Tombol-tombol dalam Flex container -->
        <div class="button-container">
            <a href="add_supplier.php" class="btn">Tambah Supplier</a>
            <a href="tampil_data.php" class="cancel-btn">Cancel</a>
        </div>
    </div>

</body>
</html>
