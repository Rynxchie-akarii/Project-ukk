<?php
include_once "../models/HpModel.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hpModel = new HpModel();
    $hpModel->deleteHp($id);

    // Redirect to index.php after deleting
    header("Location: index.php");
}
?>
