<?php
include_once "../models/HpModel.php"; // Memasukkan HpModel
include_once "navbar.php"; // Memasukkan navbar terpisah

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
</head>
<body>


<div class="container">
    <table>
        <thead>
            <tr>
                <th>No.</th>
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
                <td><?= $no++; ?></td>
                <td><?= htmlspecialchars($row['nama_hp']); ?></td>
                <td><?= htmlspecialchars($row['varian']); ?></td>
                <td><?= htmlspecialchars($row['stok']); ?></td>
                <td>Rp <?= number_format($row['harga'], 0, ',', '.'); ?></td>
                <td><?= htmlspecialchars($row['nama_supplier']); ?></td>
                <td><?= htmlspecialchars($row['alamat']); ?></td>
                <td>
                    <?php
                        // Menambahkan awalan '08' jika belum ada
                        $no_telepon = $row['no_telepon'];
                        if (substr($no_telepon, 0, 2) !== "08") {
                            $no_telepon = "08" . $no_telepon;
                        }
                        echo htmlspecialchars($no_telepon);
                    ?>
                </td>
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
