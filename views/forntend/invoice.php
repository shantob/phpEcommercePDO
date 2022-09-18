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
    <div class="container p-4">

        <div class="main-section text-center">

            <h1 class="text-danger p-5">Your Payment Slip</h1>

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
                            <div class="col-xl-12">

                                <ul class="list-unstyled float-end">
                                    <li style="font-size: 30px; color: red;">Company</li>
                                    <li>123, Dhaka Street</li>
                                    <li>123-456-789</li>
                                    <li>ajabecom@mail.com</li>
                                </ul>
                            </div>
                        </div>

                        <div class="row text-center">
                            <h3 class="text-uppercase text-center mt-3" style="font-size: 40px;">Invoice</h3>
                            <p><?= rand(111119,999999) ?></p>
                        </div>

                        <div class="row mx-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">SL NO</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Amount</th>
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
                                            <td><i class="fas fa-dollar-sign"></i> <?= $select['product_price'] ?></td>
                                        </tr>
                                    <?php

                                    } ?>


                                </tbody>
                            </table>

                        </div>
                        <?php
                        foreach ($totalcart as $ammunt) {
                            foreach ($ammunt as $value) {

                        ?>
                                <div class="row">
                                    <div class="col-xl-8">
                                        <ul class="list-unstyled float-end me-0">
                                            <li><span class="me-3 float-start">Total Amount:</span><i class="fas fa-dollar-sign"></i> <?= $value ?> ৳
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xl-8" style="margin-left:60px">
                                        <p class="float-end" style="font-size: 30px; color: red; font-weight: 400;font-family: Arial, Helvetica, sans-serif;">
                                            Total:
                                            <span><i class="fas fa-dollar-sign"></i> <?= $value ?> ৳</span>
                                        </p>
                                    </div>

                                </div>
                        <?php
                            }
                        }
                        ?>
                        <div class="row mt-2 mb-5">
                            <p class="fw-bold">Date: <span class="text-muted"><?php echo date("Y-M-D"); ?></span></p>
                            <p class="fw-bold mt-3">Signature:</p>
                        </div>

                    </div>



                </div>
                <div class="card-footer bg-black"></div>
            </div>
            <li><a href="index.php"><button type="submit" class="btn btn-primary p-3 my-5">Thank You </button></a></li>
        </div>


        <!-- fooder//////////////////////////////// -->

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