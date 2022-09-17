<?php
// $id = $_GET['id'];
// echo $id;
include_once './../../vendor/autoload.php';


use Project\Controllers\Apply;
use Project\Controllers\Select;

$selectCard = new Select();
$selectCard->destroy($_GET['id']);
header('location: addtocard.php');
