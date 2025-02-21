<?php
include '../models/SupplierModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_supplier = $_POST['nama_supplier'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];

    $supplierModel = new SupplierModel();
    $supplierModel->addSupplier($nama_supplier, $alamat, $no_telepon);

    header('Location: ../views/supplier.php');
    exit;
}
?>
