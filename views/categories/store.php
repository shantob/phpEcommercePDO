<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo 'Only Post Request Allowed Here';
    die();
}

include_once './../../vendor/autoload.php';

use Project\Controllers\Category;

$student = new Category();

if (!$student->store($_POST)) {
    header('Location: ./create.php');
} else {
    header('Location: ./index.php');
}
