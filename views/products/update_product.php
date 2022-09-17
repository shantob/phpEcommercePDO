<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo 'Only Post Request Allowed Here';
    die();
}

include_once './../../vendor/autoload.php';

use Project\Controllers\Product;

$Products_update = new Product();

echo '<pre>';
print_r($_POST);

$Products_update->update($_POST, $_GET['id']);

header('Location: ./index.php');
