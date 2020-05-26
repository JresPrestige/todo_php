<?php
require 'model.php';
$id = $_GET['id'];
$model = new Model();
$model->delete($id);

header("location: index.php");
