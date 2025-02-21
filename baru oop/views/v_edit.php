<?php
// edit_hp.php

// Menyertakan controller untuk memproses data sebelum menampilkan form
require_once '../controllers/crud_hp.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data HP</title>
    <link rel="stylesheet" href="../views/style/edit.css">
</head>
<body>

    <div class="container">
        <h2>Edit Data HP</h2>
        <form action="../controllers/crud_hp.php" method="POST">
            <input type="hidden" name="id" value="<?= isset($dataHp['id']) ? $dataHp['id'] : ''; ?>">

            <label for="nama_hp">Nama HP:</label><br>
            <input type="text" name="nama_hp" value="<?= isset($dataHp['nama_hp']) ? $dataHp['nama_hp'] : ''; ?>" required><br>

            <label for="varian">Varian:</label><br>
            <input type="text" name="varian" value="<?= isset($dataHp['varian']) ? $dataHp['varian'] : ''; ?>" required><br>

            <label for="stok">Stok:</label><br>
            <input type="number" name="stok" value="<?= isset($dataHp['stok']) ? $dataHp['stok'] : ''; ?>" required><br>

            <label for="harga">Harga:</label><br>
            <input type="number" name="harga" value="<?= isset($dataHp['harga']) ? $dataHp['harga'] : ''; ?>" required><br>

            <label for="tanggal_masuk">Tanggal Masuk:</label><br>
            <input type="date" name="tanggal_masuk" value="<?= isset($dataHp['tanggal_masuk']) ? $dataHp['tanggal_masuk'] : ''; ?>" required><br>

            <input type="submit" value="Update Data">
        </form>
    </div>

</body>
</html>
