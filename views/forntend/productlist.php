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
        <h1 class="text-danger border-dark">Trending <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
            </svg></h1>

        <?php
        //use PDOException;

        //class Student
        foreach ($categories as $key => $category) {
        ?>

            <h4 class="text-light bg-warning p-2 text-center"><?= $category['name'] ?></h4>

            <!-- start modal.................................................... -->

            <!-- Modal -->



            <div class="row">
                <div class="col-md-12 d-flex col-sm-12">
                    <!-- modal end......................... -->
                    <?php foreach ($Products as $Product) { 
                        if ($Product['product_category'] === $category['name']) {
                            ?>
                               <div class="col-lg-3 col-md-6" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <a href="show.php?id=<?= $Product['id'] ?>">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img class="fs-card-img" src="../../assets/uploads/<?= $Product['picture'] ?>" alt="" width="100%" height="100%">
                                      
                                        <h3><?= $Product['name'] ?></h3>
                                        <p><?= $Product['product_category'] ?></p>
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

                            <?php
                        }
                       }  
                       
                       if (empty($Product['product_category'])) {
                        echo "No product anleavail here";
                       }
                       
                      
                       ?>
                </div>
            </div>
        <?php
        }
        ?>
        
        <div class="row">
         
        </div>
        
        <div class="row">
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