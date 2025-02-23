<?php
include '../models/SupplierModel.php';
include_once "navbar.php";

$supplierModel = new SupplierModel();
$suppliers = $supplierModel->getAllSuppliers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Supplier</title>
    <link rel="stylesheet" href="../views/style/tb.css">
    <link rel="stylesheet" href="../views/style/tombol.css">
</head>
<body>

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
                <td>
                    <?php 
                        // Menambahkan awalan '08' jika belum ada
                        $no_telepon = $supplier['no_telepon'];
                        if (substr($no_telepon, 0, 2) !== "08") {
                            $no_telepon = "08" . $no_telepon;
                        }
                        echo htmlspecialchars($no_telepon);
                    ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


    </div>

</body>
</html>
