<?php
?>
<?php
include_once './../../vendor/autoload.php';

use Project\Controllers\Product;
use Project\Controllers\Category;

$ProductObj = new Product();

$pro_Info = $ProductObj->details($_GET['id']);
$categorytofind = new Category();

$categories = $categorytofind->index();

//print_r($studentInfo);

?>
<?php include ('./../header/header.php'); ?>
<!-- Top Nav -->


<!-- <div style="width: 500px; margin:0 auto;">
            <a href="./index.php" style="width: 500px; margin:0 auto;" color="black">List</a>

            <form action="./update_product.php?id=<?= $pro_Info['id'] ?>" method="post">
                <input name="product_id" value="<?= $pro_Info['product_id'] ?>" placeholder="Enter Product ID">
                <input name="name" value="<?= $pro_Info['name'] ?>" placeholder="Enter Student Name">
                <button>Update</button>
            </form>
        </div> -->

<!--End Top Nav -->

<br>
<br>



<!--End Top Nav -->

<div class="col-md-12">
    <!-- <a href="./index.php"><button type="submit" class="btn btn-info w-100"> Product list</button> </a> -->
    <div class="main-content ">
        <div class="mt-5 w-100 text-center p-3">
            <div class="card ">
                <div class="card-body">
                    <form class="form-horizontal" action="./update_product.php?id=<?= $pro_Info['id'] ?>" method="post" enctype="multipart/form-data">

                        <fieldset>

                            <!-- Form Name -->
                            <legend class="mb-5">PRODUCT Edit</legend>

                            <!-- Text input-->
                            <div class="col-md-12 d-flex">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="mx-4 control-label" for="product_id">PRODUCT ID</label>
                                        <div class="col-md-12 p-4">
                                            <input id="product_id" type="text" name="product_id" value="<?= $pro_Info['product_id'] ?>" placeholder="Enter Product ID" class="form-control w-100 text-center">


                                        </div>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mx-4 control-label" for="name">PRODUCT NAME</label>
                                        <div class="col-md-12 p-4">
                                            <input id="name" name="name" placeholder="Enter Product Name" class="form-control input-md" type="text" value="<?= $pro_Info['name'] ?>">



                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="col-md-12 d-flex">
                                <div class="col-md-6">
                                <div class="form-group">
                                        <select id="product_category" name="product_category" class="form-select" aria-label="Default select example">
                                        <option selected disabled>Select Category</option>
                                            <?php foreach ($categories as $category) { ?>
                                                
                                                <option <?php if ($pro_Info['product_category'] == $category['name']) { echo "selected";  } ?> value="<?= $category['name'] ?>"> <?= $category['name'] ?></option>
                                            <?php  } ?>

                                            <!-- <option selected>Select Category</option>
                                                    <option value="w90rj">w90rj</option>
                                                    <option value="vettr">vettr</option>
                                                    <option value="eger">eger</option> -->
                                        </select>
                                        <br>
                                        <?= $_SESSION['errors']['product_category'] ?? null ?>
                                    </div>

                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mx-4 mt-4 control-label" for="product_price">PRODUCT PRICE
                                        </label>
                                        <div class="col-md-12 p-4">
                                            <input id="product_price" name="product_price" placeholder="Enter Prodcut price" class="form-control input-md" type="text" value="<?= $pro_Info['product_price'] ?>">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label h5" for="product_description">PRODUCT DESCRIPTION
                                    FR</label>
                                <div class="col-md-12 p-4">
                                    <textarea id="product_description" name="product_description" placeholder="PRODUCT DESCRIPTION FR" class="form-control input-md" type="textbox"><?= $pro_Info['product_description'] ?></textarea>


                                </div>
                            </div>


                            <!-- Select Basic -->


                            <!-- Text input-->


                            <!-- Text input-->


                            <!-- Textarea -->


                            <!-- Text input-->
                            <div class="col-md-12 d-flex">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="percentage_discount">PERCENTAGE
                                            DISCOUNT</label>
                                        <div class="col-md-12 p-4">
                                            <input id="percentage_discount" name="percentage_discount" placeholder="PERCENTAGE DISCOUNT" class="form-control input-md" value="<?= $pro_Info['percentage_discount'] ?>" type="text">

                                        </div>
                                    </div>
                                </div>




                                <!-- Search input-->



                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label mt-4" for="online_date">ONLINE DATE</label>
                                        <div class="col-md-12 p-4">
                                            <input id="online_date" name="online_date" placeholder="ONLINE DATE" class="form-control input-md" type="date" value="<?= $pro_Info['online_date'] ?>">
                                            <br>
                                            <?= $_SESSION['errors']['online_date'] ?? null ?>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- Text input-->
                            <div class="card aligns-items-center justify-content-center card text-center w-100">
                                <div class="card-body">
                                    <div class="form-group">

                                        <div class="col-md-12 p-2">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="filebutton">Upload Image</label>
                                                <div class="col-md-12 px-2">
                                                    <input type="file" name="picture"> <img src="./../../assets/uploads/<?= $pro_Info['picture'] ?>" alt="">
                                                    <br>
                                                    <?= $_SESSION['errors']['picture'] ?? null ?> <br>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- File Button -->
                            <!-- <div class="card">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label" for="filebutton">auxiliary_images</label>
                                                                <div class="col-md-12 p-4">
                                                                    <input id="filebutton" name="filebutton" class="input-file" type="file">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->

                            <!-- Button -->
                            <div class="form-group">
                                <div class="col-md-12 p-2 justify-content-center">
                                    <button id="singlebutton" name="singlebutton" class="btn btn-primary text-center px-5 m-2">update </button>
                                    <button id="singlebutton" name="singlebutton" class="btn btn-danger text-center px-5 m-2">Cancle</button>
                                </div>
                            </div>

                </div>
            </div>
        </div>
    </div>


    </fieldset>
    </form>
    <?php
    if (isset($_SESSION['errors'])) {
        unset($_SESSION['errors']);
    }
    ?>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>