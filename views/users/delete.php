<?php
include_once './../../vendor/autoload.php';

use Project\Controllers\User;

$student = new User();

$student->destroy($_GET['id']);

header('Location: ./index.php');