<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo 'Only Post Request Allowed Here';
    die();
}

include_once './../../vendor/autoload.php';

use Project\Controllers\Product;

$Products_store = new Product();

if (!$Products_store->store($_POST)) {
    header('Location: ./create_product.php');
} else {
    header('Location: ./index.php');
}
