<!doctype html>
<html lang="en">

<?php include_once "head.php"; ?>

<body>
    <?php
    include_once './../../vendor/autoload.php';

    use Project\Controllers\Category;

    $categoryoObj = new Category();
    $categories = $categoryoObj->index();

    use Project\Controllers\Product;
    // card show ..........
    $ProductObj = new Product();

    $Products = $ProductObj->index();
    // foreach ($Products as $Product) {
    //     $P_category = $Product['product_category'];
    // }
    // $productcatagoryshow = $ProductObj->categoryShow($_GET['P_category']);
    // print_r($productcatagoryshow);
    // die();
    // singal show..........
    //$ProductShow = new Product();

    //$ProductToShow = $ProductShow->details($_GET['id']);


    ?>
    <div class="container p-2">

        <?php include_once "nav-header.php"; ?>
        <?php
        if (isset($_SESSION['massage'])) {
            // echo "<pre>";
            // print_r($_SESSION);
            // die();
    ?>
        <span class="alert alert-success" role="alert"><?= $_SESSION['massage']; ?></span>
    <?php

        }
    unset($_SESSION['massage']);

    ?>
        <div class="main-content d-flex col-md-12">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1619533394727-57d522857f89?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bW9kZWwlMjBtYW58ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class=" w-100" height="500">
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12">
                    <!-- start -->
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="https://images.unsplash.com/photo-1591370874773-6702e8f12fd8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y29tcHV0ZXIlMjBoYXJkd2FyZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="..." height="500">
                                <div class="carousel-caption d-none d-md-block text-light">
                                    <h5>E-commerce</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="https://images.unsplash.com/photo-1604671801908-6f0c6a092c05?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzF8fHNob2VzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="..." height="500">
                                <div class="carousel-caption d-none d-md-block text-light">
                                    <h5>Computer</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.unsplash.com/photo-1592503254549-d83d24a4dfab?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8ZSUyMGNvbW1lcmNlJTIwcGhvdG9ncmFwaHl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="..." height="500">
                                <div class="carousel-caption d-none d-md-block text-light">
                                    <h5>Electricital</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <!-- end -->

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="row">

                    <?php
                    //use PDOException;

                    //class Student
                    foreach ($categories as $category) { ?>

                        <div class="col-lg-3 col-md-6 mt-2 p-2 text-center">
                            <a href="show.php?id=<?= $category['id'] ?>" class="btn btn-tag btn-rounded bg-success text-light" data-mdb-close="true">
                                <i class="fas fa-layer-group me-2 hover-overlay hover-zoom hover-shadow ripple"></i>
                                <?= $category['name'] ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <!--Carousel Wrapper-->
                <video controls height="500" class="w-100" loop autoplay muted>
                    <source src="What is eCommerce_.mp4" type="video/mp4">
                </video>
                <!--Carousel Wrapper-->
            </div>
        </div>
        <h1 class="text-danger border-dark">Trending <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
            </svg></h1>
        <h4 class="text-light bg-warning p-2 text-center">T-Shirt & Shirt</h4>

        <!-- start modal.................................................... -->

        <!-- Modal -->



        <div class="row">
            <div class="col-md-12 d-flex col-sm-12">
                <!-- modal end......................... -->
                <?php foreach ($Products as $Product) { ?>
                    <div class="col-lg-3 col-md-6" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <a href="show.php?id=<?= $Product['id'] ?>">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img class="fs-card-img" src="../../assets/uploads/<?= $Product['picture'] ?>" alt="" width="100%" height="100%">
                                    <h3><?= $Product['product_category'] ?></h3>
                                    <p><?= $Product['product_description'] ?></p>
                                    <h3 class="text-danger"><?= $Product['product_price'] ?></h3>
                                    <div class="" id="liveToastBtn"><button class="btn btn-success twxt-light">SHOP NOW</button>
                                        <!--  -->
                                    </div>
                                    <!--  -->

                                </div>
                            </div>
                        </a>


                    </div>
                <?php } ?>
            </div>
        </div>
        <h2 class="text-light bg-warning p-2 text-center">Sneakers</h2>
        <div class="row">
            <div class="col-md-12 d-flex">
                <?php
                if ($Product['product_category'] = "w90rj") {
                    foreach ($Products as $Product) {
                        //$Product ="SELECT FROM product_info WHERE product_category=w90rj";
                ?>
                        <div class="col-lg-3 col-md-6" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <a href="show.php?id=<?= $Product['id'] ?>">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img class="fs-card-img" src="../../assets/uploads/<?= $Product['picture'] ?>" alt="" width="100%" height="100%">
                                        <h3><?= $Product['product_category'] ?></h3>
                                        <p><?= $Product['product_description'] ?></p>
                                        <h3 class="text-danger"><?= $Product['product_price'] ?></h3>
                                        <div class="bg-success text-light btn" id="liveToastBtn">SHOP NOW
                                            <!--  -->
                                        </div>
                                        <!--  -->

                                    </div>
                                </div>
                            </a>


                        </div>
                <?php

                    }
                } else {
                    echo "<h2>No product in this category!!</h2>";
                }
                ?>
            </div>
        </div>
        <h2 class="text-light bg-warning p-2 text-center">Electrical & Macanical</h2>

        <div class="row">
            <div class="col-md-12 d-flex">

                <?php
                if ($Product['product_category'] == "Electricital & Eachicinal") {
                    foreach ($Products as $Product) {

                ?>
                        <div class="col-lg-3 col-md-6" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <a href="show.php?id=<?= $Product['id'] ?>">
                                <div class="card ">
                                    <div class="card-body text-center h-80">
                                        <img class="fs-card-img" src="../../assets/uploads/<?= $Product['picture'] ?>" alt="" width="100%" height="100%">
                                        <h3><?= $Product['product_category'] ?></h3>
                                        <p><?= $Product['product_description'] ?></p>
                                        <h3 class="text-danger"><?= $Product['product_price'] ?></h3>
                                        <div class="bg-success text-light btn" id="liveToastBtn">SHOP NOW
                                            <!--  -->
                                        </div>
                                        <!--  -->

                                    </div>
                                </div>
                            </a>


                        </div>
                    <?php

                    }
                } else {
                    ?>
                    <h2 class="text-center">No porduct in this category</h2>
                <?php
                }
                ?>
            </div>
        </div>
        <!-- sticky bottom////////// -->
        <div class=" position-fixed bottom-0 end-0">
            <div class="card">
                <a href="addtocard.php">
                    <div class="card-body">
                        <h6 class="text-primary text-centers curcor-pointer">
                            <p class="text-danger text-center">(9+)</p>Your Collection
                            <h3 class=" text-center"><a class="text-danger" href="productlist.html">+</a>

                            </h3>
                        </h6>
                </a>
            </div>
            </a>
        </div>
    </div>
    <!-- ................................ -->
    <!-- fooder//////////////////////////////// -->
    <?php include_once "footer.php" ?>
    </div>


    <!-- modal......................... -->
    ...

    </div>

    <!-- Footer -->

    <!-- Footer -->
    <?php require_once "script.php" ?>
</body>

</html>