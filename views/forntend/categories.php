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
        <div class="row">
        </div>

        <?php
        //use PDOException;

        //class Student
        $gei_id = $_GET['id'];
        foreach ($categories as $key => $category) {
            //print_r($category);
            //die();
            //if($_GET('id')==$category['name']){ 
            $getCategory = ($gei_id === $category['name']);
            if ($getCategory > 0) {

        ?>

                <h4 class="text-light bg-warning p-2 text-center"><?= $category['name'] ?></h4>
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




                        ?>
                    </div>
                </div>
        <?php
            } else {
                //echo "empaty list  ";
            }
        }
        // if (empty($category['name'])) {
        //     echo "No product anleavail here";
        // }
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