<?php
include_once './../../vendor/autoload.php';

use Project\Controllers\Product;

$student = new Product();

$student->destroy($_GET['id']);

header('Location: ./index.php');