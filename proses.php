<?php
require 'model.php';
if (isset($_POST['tambah'])) {

    $ket = $_POST['keterangan'];

    $model = new Model();
    $model->insert($ket);

    header("location: index.php");
}
