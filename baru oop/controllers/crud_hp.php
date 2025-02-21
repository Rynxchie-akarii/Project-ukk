<?php
include_once "../models/HpModel.php";

// Membuat objek HpModel
$hpModel = new HpModel();

// Cek jika request method POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama_hp = $_POST['nama_hp'];
    $varian = $_POST['varian'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $tanggal_keluar = $_POST['tanggal_keluar'];
    $id_supplier = $_POST['id_supplier'];
    
    // Cek apakah ada ID dalam POST, menandakan update data
    if (isset($_POST['id']) && is_numeric($_POST['id'])) {
        $id = $_POST['id'];
        
        // Update data HP
        $updateStatus = $hpModel->updateHp($id, $nama_hp, $varian, $stok, $harga, $tanggal_masuk, $tanggal_keluar);

        if ($updateStatus) {
            // Redirect ke halaman index setelah berhasil update
            header("Location: ../views/tampil_data.php");
            exit();
        } else {
            echo "Gagal memperbarui data!";
        }
    } else {
        // Menambahkan data HP baru
        if ($hpModel->addHp($nama_hp, $varian, $stok, $harga, $tanggal_masuk, $tanggal_keluar, $id_supplier)) {
            // Redirect ke halaman index setelah berhasil
            header("Location: ../views/tampil_data.php");
        } else {
            echo "Gagal menambahkan data.";
        }
    }

} elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Cek apakah request GET untuk edit data, dan ID ada dalam URL
    $id = $_GET['id']; // Ambil ID dari URL
    
    // Ambil data HP berdasarkan ID
    $dataHp = $hpModel->getHpById($id);
    
    // Pastikan data ditemukan
    if (!$dataHp) {
        echo "Data tidak ditemukan!";
        exit();
    }
    
    // Form akan terisi data HP yang diambil dari database
    $nama_hp = $dataHp['nama_hp'];
    $varian = $dataHp['varian'];
    $stok = $dataHp['stok'];
    $harga = $dataHp['harga'];
    $tanggal_masuk = $dataHp['tanggal_masuk'];
    $tanggal_keluar = $dataHp['tanggal_keluar'];
    $id_supplier = $dataHp['id_supplier'];
} else {
    // Redirect jika tidak ada ID untuk edit atau data tidak ditemukan
    header("Location: ../views/tampil_data.php");
    exit();
}

// Menutup koneksi database
$hpModel->closeConnection();
?>
