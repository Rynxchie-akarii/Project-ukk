<?php
// Memasukkan model HpModel untuk mengambil data supplier
include_once "../models/HpModel.php";

// Membuat objek HpModel
$hpModel = new HpModel();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data HP</title>
    <link rel="stylesheet" href="../views/style/add.css">
</head>
<body>

<div class="container">
    <h2>Tambah Data HP</h2>

    <form action="../controllers/crud_hp.php" method="POST">
        <div class="form-group">
            <label for="nama_hp">Nama HP:</label>
            <input type="text" name="nama_hp" required>
        </div>

        <div class="form-group radio-buttons">
            <label for="varian">Varian:</label>
            <label>
                <input type="radio" name="varian" value="128 GB" required>
                128 GB
            </label>
            <label>
                <input type="radio" name="varian" value="256 GB" required>
                256 GB
            </label>
        </div>

        <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="number" name="stok" required>
        </div>

        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" name="harga" required>
        </div>

        <div class="form-group">
            <label for="tanggal_masuk">Tanggal Masuk:</label>
            <input type="date" name="tanggal_masuk" required>
        </div>

        <!-- Dropdown untuk memilih Supplier -->
        <div class="form-group">
            <label for="id_supplier">Pilih Supplier:</label>
            <select name="id_supplier" required>
                <option value="" disabled selected>Pilih Supplier</option>
                <?php foreach ($suppliers as $supplier): ?>
                    <option value="<?php echo $supplier['id_supplier']; ?>">
                        <?php echo $supplier['name']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Button container -->
        <div class="btn-container">
            <button type="button" class="btn-cancel" onclick="window.location.href='tampil_data.php'">Cancel</button>
            <button type="submit" class="btn-submit">Tambah Data</button>
        </div>
    </form>
</div>

</body>
</html>
