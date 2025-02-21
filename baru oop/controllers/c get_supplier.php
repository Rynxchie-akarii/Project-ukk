<?php
// get_suppliers.php

require_once "../models/SupplierModel.php";

// Membuat objek SupplierModel
$supplierModel = new SupplierModel();

// Mendapatkan semua data supplier
$suppliers = $supplierModel->getAllSuppliers();

// Menutup koneksi database setelah mendapatkan data
$supplierModel->closeConnection();
?>
