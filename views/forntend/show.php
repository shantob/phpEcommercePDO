<!doctype html>
<html lang="en">

<?php include_once "head.php" ?>

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

    // singal show..........
    $ProductShow = new Product();

    $ProductToShow = $ProductShow->details($_GET['id']);


    ?>
    <div class="container p-2">
        <?php require_once "nav-header.php" ?>

        <div class="row">
            <form action="./add_to_buy.php" method="post">
            <div class="col-lg-12 col-sm-12">
                <div class="row">

                    <h1>Product Info</h1>
                    <h3 class="text-light bg-warning p-2 text-center">Product Category:<?= $ProductToShow['product_category'] ?></h3>



                    <div class="col-md-12 d-flex mx-5">
                        <div class="col-md-5">
                            <h4>
                            <p>Id: <input type="hidden" value="<?= $ProductToShow['id'] ?>"></p>
                            </h4>
                            <h4>
                            <p>Product Id: <?= $ProductToShow['product_id'] ?></p>
                                <input type="hidden" name="product_id" value="<?= $ProductToShow['product_id'] ?>"></p>
                            </h4>
                            <h4>
                                <p>Name: <?= $ProductToShow['product_category'] ?>
                                    <input type="hidden" name="name" value="<?= $ProductToShow['name'] ?>"></p>
                            </h4>
                            <h4>
                                <p>Product Category : <?= $ProductToShow['product_category'] ?></p>
                            </h4>
                            <h4>
                                <p>Product Price : <?= $ProductToShow['product_price'] ?>
                                    <input type="hidden" name="product_price" value="<?= $ProductToShow['product_price'] ?>"></p>
                            </h4>
                            <h4>
                                <p>Product Description : <?= $ProductToShow['product_description'] ?></p>
                            </h4>
                            <h4>
                                <p>Product Discount : <?= $ProductToShow['percentage_discount'] ?></p>
                            </h4>
                            <h4>
                                <p>Product Publishing date : <?= $ProductToShow['online_date'] ?></p>
                            </h4>

                        </div>
                        <div class="col-md-7">
                            <p><img width="600rem" src="./../../assets/uploads/<?= $ProductToShow['picture'] ?>" alt="Profile Picture"> </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <button class="btn btn-success w-100" class="mt-5">Buy Now</button>
                <button disabled class="btn btn-danger w-100" class="mt-5">Cancle</button>
            </div>
            </form>

            <!-- start modal.................................................... -->

            <!-- Modal -->




            <!-- sticky bottom////////// -->
            <div class="col-md-12 d-flex sticky-bottom">
                <div class="col-md-5">

                </div>
                <div class="col-md-3 ">
                    <div class="sticky-bottom">
                        <div class="card">
                            <a href="addtocard.html">
                                <div class="card-body text-center">
                                    <h6 class="text-primary text-centers curcor-pointer">
                                        <p class="text-danger">(9+)</p>Your Collection
                                        <h3 class=" text-center"><a class="text-danger" href="productlist.html">+</a>

                                        </h3>
                                    </h6>
                            </a>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ................................ -->
        <!-- fooder//////////////////////////////// -->
        <?php require_once "footer.php" ?>
    </div>


    <!-- modal......................... -->
    ...



    <!-- Footer -->

    <!-- Footer -->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>