<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashoard Category Add</title>
    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!-- custom css -->
    <link rel="stylesheet" href="./../css_js/css/style.css" />
</head>

<body>
    <!-- Side-Nav -->
    <div class="zindex-modal-backdrop side-navbar active-nav d-flex justify-content-between flex-wrap flex-column bg-warning" id="sidebar">
        <ul class="nav flex-column text-white w-100">
            <a href="index.html" class="nav-link h1 text-light my-2">
                Dashboard </br>
            </a>
            <a href="profile.html"><li href="" class="nav-link">
                <i class="bx bx-user-check"></i>
                <span class="mx-2">Profile</span>
            </li></a>
            <a href="./../../views/products/"><li href="" class="nav-link">
                <i class="bx bxs-dashboard"></i>
                <span class="mx-2">Product List</span>
            </li></a>

            <a href="./../../views/products/create_product.php"><li href="" class="nav-link">
                <i class="bx bxs-dashboard"></i>
                <span class="mx-2">Product Add</span>
            </li></a>
            <a href="./index.php"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Category</span>
            </li></a>
           <a href="./create.php"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Category Add</span>
            </li></a> 
           <a href="notification.html"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Notification</span>
            </li></a> 
            <a href="invoice.html"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Invoice</span>
            </li></a>
            <a href="userdetels.html"><li  class="nav-link">
                <i class="bx bx-user-check"></i>
                <span class="mx-2">User Detels</span>
            </li></a>
        </ul>

        <span href="" class="nav-link h4 w-100 ">
            <a href=""><i class="bx bxl-instagram-alt text-danger"></i></a>
            <a href=""><i class="bx bxl-twitter px-2 mx-5 text-danger"></i></a>
            <a href=""><i class="bx bxl-facebook text-danger mb-4"></i></a>
            <a href="./../forntend/index.php"><button type="submit" class="btn btn-secondary w-100 my-2">Log Out</button></a>
        </span>
       
    </div>
    <nav class="navbar top-navbar navbar-light bg-warning m-0 px-5 sticky-top" style="height:80px ">
        <div class="input-group">
            <a href="index.html" class="nav-link h1 text-light ">
                Dashboard </br>
            </a>
            <input style="margin-left: 5rem; margin-right: 1rem;" type="search" class="form-control mt-2"
                placeholder="Search Product">
            <div class="input-group-">
                <button class="btn btn-secondary mt-2" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Wrapper -->
    <div class=" my-container active-cont">