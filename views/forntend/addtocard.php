<?php
include_once './../../vendor/autoload.php';

use Project\Controllers\Select;
//session_start();
$showcardobj = new Select;
$showcard = $showcardobj->show();
$totalcart = $showcardobj->sum();
// echo "<pre>";


// // echo "<pre>";
// print_r($totalcart);
// die();
?>
<!doctype html>
<html lang="en">

<?php require_once "head.php" ?>

<body>
    <?php
    //session_start();



    // $selectlist = $_SESSION['selectlist'] ?? [];
    //

    ?>
    <div class="container p-4">
        <?php require_once "nav-header.php" ?>

        <div class="main-section text-center">
            <div class="card">
                <div class="card-header bg-black"></div>
                <div class="card-body">

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <i class="far fa-building text-danger fa-6x float-start"></i>
                            </div>
                        </div>


                        <div class="row">
                        </div>

                        <div class="row text-center">
                            <h3 class="text-uppercase text-center my-5" style="font-size: 40px;">Total Amount</h3>
                            <div class="divider py-1 bg-success mb-5"></div>

                        </div>

                        <div class="row mx-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Product ID</th>
                                        <th scope="col">Product Name</th>
                                        <!-- <th scope="col">Count</th> -->
                                        <th scope="col">Prize Rate</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //if (isset($_SESSION['products'])) {
                                    //$products = $_SESSION['products'];
                                    $i = 1;
                                    foreach ($showcard as $select) {
                                        // echo "<pre>";
                                        // print_r($select);
                                        // die();

                                    ?>

                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $select['name'] ?></td>
                                            <td><?= $select['product_id'] ?></td>
                                            <!-- <td><i class="fas fa-dollar-sign"></i> 2</td> -->
                                            <td><i class="fas fa-dollar-sign"></i> <?= $select['product_price'] ?></td>
                                            <td>
                                                <a href="show.php?id=<?= $select['id'] ?>"><button class="btn btn-info">Show</button></a>
                                                <a href="delete.php?id=<?= $select['id'] ?>" onclick="return confirm('Are You Sure want to be delete!!!')"><button class="btn btn-danger">Delete</button></a>
                                            </td>
                                        </tr>
                                    <?php

                                    } ?>


                                </tbody>
                            </table>
                            <div class="divider py-1 bg-success mb-5"></div>
                        </div>
                        <?php
                        foreach ($totalcart as $ammunt) {
                            foreach ($ammunt as $value) {
                                //     # code...

                                // echo "<pre>";
                                // print_r($value);
                                // die();

                        ?>
                                <div class="row h4" style="margin-right: 5rem;">
                                    <table class="text-end">
                                        <tr>
                                            <td> Total :</td>

                                            <td> <?= $value ?> ৳</td>


                                        </tr>
                                        <!-- <tr>
                                    <td> Discount :</td>
                                    <td> 5,000 ৳</td>

                                </tr>
                                <tr>
                                    <td> Shipment :</td>
                                    <td> 60,000 ৳</td>
                                </tr> -->
                                    </table>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="divider py-1 bg-success mb-5"></div>
                                    <h3 class="text-danger text-center"> Total : <?= $value ?> ৳</h3>

                                </div>
                        <?php
                            }
                        }
                        ?>
                        <div class="row mt-2 mb-5">


                            <button class="btn btn-success" type="submit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Payment Now</button>

                            <div class="offcanvas offcanvas-bottom  text-center" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Select For Payment
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body small">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-4">
                                            <a href="thankyou.html">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img src="https://seeklogo.com/images/B/bkash-logo-250D6142D9-seeklogo.com.png" alt="" height="50">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="thankyou.html">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img src="https://th.bing.com/th/id/OIP.-LbjaSdH5MRmrU4WXAgGsgHaDO?pid=ImgDet&rs=1" height="50" alt="">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="thankyou.html">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img src="https://futurestartup.com/wp-content/uploads/2016/09/DBBL-Mobile-Banking-Becomes-Rocket.jpg" height="50" alt="">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="card-footer bg-black"></div>
                    </div>
                </div>
                <div class=" position-fixed bottom-0 end-0">
                    <div class="card">
                        <a href="addtocard.html">
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

            <!-- fooder//////////////////////////////// -->
            <footer class="text-center text-lg-start bg-light text-muted">
                <!-- Section: Social media -->
                <section class="d-flex justify-content-center bg-dark justify-content-lg-between p-4 border-bottom">
                    <!-- Left -->
                    <div class="me-5 d-none text-light d-lg-block">
                        <span>Cotruct With Us :</span>
                    </div>
                    <!-- Left -->

                    <!-- Right -->
                    <div class="text-light">
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                    <!-- Right -->
                </section>
                <!-- Section: Social media -->

                <!-- Section: Links  -->
                <section class="">
                    <div class="container text-center text-md-start mt-5">
                        <!-- Grid row -->
                        <div class="row mt-3">
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <!-- Content -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    <i class="fas fa-gem me-3"></i>Company name
                                </h6>
                                <p>
                                    Here you can use rows and columns to organize your footer content. Lorem ipsum
                                    dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Products
                                </h6>

                                <p>
                                    <a href="#!" class="text-reset">Vue</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Laravel</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Useful links
                                </h6>
                                <p>
                                    <a href="#!" class="text-reset">Settings</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Orders</a>
                                </p>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                                <p>
                                    <i class="fas fa-envelope me-3"></i>
                                    shantobepary575@gmail.com
                                </p>
                                <p><i class="fas fa-phone me-3"></i> + 01 7XXXXXXX85</p>

                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->

                <!-- Copyright -->
                <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                    Published by- Shanto Bepary
                    <a class="text-reset fw-bold" href="#">sbrs.com.bd</a>
                </div>
                <!-- Copyright -->
            </footer>
        </div>


        <!-- modal......................... -->
        ...

    </div>

    <!-- Footer -->

    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>