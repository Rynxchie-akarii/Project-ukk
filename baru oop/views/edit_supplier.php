<?php
// Mengambil ID dari URL jika ada
include_once "../models/SupplierModel.php"; // Pastikan ini sudah benar

// Cek apakah ID ada dalam URL
if (isset($_GET['id_supplier'])) 
    $id = $_GET['id_supplier']; // Ambil ID dari URL
    $supplierModel = new SupplierModel();
    $supplierdata = $supplierModel->getSupplierById($id_supplier); // Ambil data berdasarkan ID
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Supplier</title>
</head>
<body>

<h2>Edit Supplier</h2>
<form method="POST" action="../controllers/edit_supplier_c.php?id_supplier=<?= $supplierdata['id_supplier']; ?>">
    <label for="nama_supplier">Nama Supplier:</label><br>
    <input type="text" name="nama_supplier" value="<?= htmlspecialchars($supplierdata['nama_supplier']); ?>" required><br><br>

    <label>Alamat:</label><br>
    <input type="text" name="alamat" value="<?= htmlspecialchars($dataSupplier['alamat']); ?>" required><br><br>

    <label>No Telepon:</label><br>
    <input type="number" name="no_telepon" value="<?= htmlspecialchars($dataSupplier['no_telepon']); ?>" required><br><br>

    <input type="submit" value="Update Supplier">
</form>

</body>
</html>
