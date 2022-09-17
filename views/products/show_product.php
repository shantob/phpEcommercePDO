<?php
include_once './../../vendor/autoload.php';

use Project\Controllers\Product;

$ProductShow = new Product();

$ProductToShow = $ProductShow->details($_GET['id']);

//print_r($studentInfo);

?>





<?php include ('./../header/header.php'); ?>
        <!-- Top Nav -->

        <!--End Top Nav -->

        <br>
        <br>
        <div class="col-md-12">
        <a href="./index.php"><button type="submit" class="btn btn-info w-100"> Back to Product list</button> </a>
            <div class="main-content">

         
        <div class="col-md-12">
                    <div class="card">
                        <div class="card-body  text-center">
                            <div class=" w-100 ">
                                <div class=" px-2">
                                   

                                <div class="col-lg-12 d-flex sticky-top my-5">
                    <div class="col-lg-3 mt-2  p-2">
                        <a href="#" class="btn btn-tag btn-rounded bg-success text-light" data-mdb-close="true" style="">
                            <i class="fas fa-layer-group me-2 hover-overlay hover-zoom hover-shadow ripple"></i> Sneakers</a>
                    </div>
                    <div class="col-lg-3 mt-2 p-2">
                        <a href="#" class="btn btn-tag btn-rounded bg-success text-light" data-mdb-close="true" style="">
                            <i class="fas fa-layer-group me-2 hover-overlay hover-zoom hover-shadow ripple"></i> Shirt &
                            T-Shirt</a>
                    </div>
                    <div class="col-lg-3 mt-2 p-2">
                        <a href="#" class="btn btn-tag btn-rounded bg-success text-light" data-mdb-close="true" style="">
                            <i class="fas fa-layer-group me-2 hover-overlay hover-zoom hover-shadow ripple"></i> Cosmitics
                            &amp; Fashion</a>
                    </div>
                    <div class="col-lg-3 mt-2 p-2">
                        <a href="#" class="btn btn-tag btn-rounded bg-success text-light" data-mdb-close="true" style="">
                            <i class="fas fa-layer-group me-2 hover-overlay hover-zoom hover-shadow ripple"></i> Electricital
                            &amp; Mationary</a>
                    </div>
                </div>
                <h1>Product Info</h1>
                <h3 class="text-light bg-warning p-2 text-center">Product Category:<?= $ProductToShow['product_category'] ?></h3>

                

<h4><p>Product Id: <?= $ProductToShow['product_id'] ?></p> </h4>
<h4>  <p>Name: <?= $ProductToShow['name'] ?></p></h4>
<p> Picture :<img src="./../../assets/uploads/<?= $ProductToShow['picture']?>" alt ="Profile Picture"> </p>

                
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="./../../assets/uploads/<?= $ProductToShow['picture']?>"
                                    alt="" height="100" >
                                <p><?= $ProductToShow['product_description'] ?></p>
                                <h3 class="text-danger">Price:<?= $ProductToShow['product_price'] ?></h3>
                                <div class="bg-success text-light btn">EDIT Now</div>
        
                      

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


    </div>
    </div>
    </div>
    </div>
    <!--Main Navigation-->

    <!--Main layout-->


    </div>
    </div>

    <!-- bootstrap js -->
    <script>
        var menu_btn = document.querySelector("#menu-btn");
        var sidebar = document.querySelector("#sidebar");
        var container = document.querySelector(".my-container");
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav");
            container.classList.toggle("active-cont");
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>

</html>

