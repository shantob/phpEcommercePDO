<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    echo 'Only Post request are allowed';
    die();
}
// namespace Project;

//include_once "./App/Product.php";
include_once './../../vendor/autoload.php';


use Project\Controllers\Select;

$selectlist = new Select();

$selectlist->store($_POST);
header('location: index.php?success=Form is Sumited successfully');
// if(!$selectlist->store($_POST)){
//     header('location: create.php?error=Form is Sumited unsuccessfully and required');
// }else{
//     header('location: index.php?success=Form is Sumited successfully');
// }