<?php
require 'model.php';
$id = $_GET['id'];
$model = new Model();

$model->update($id);
header("location: index.php");
