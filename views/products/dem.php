<?php
include_once './../../vendor/autoload.php';

use Project\Controllers\Product;

$ProductObj = new Product();

$cat_Info = $ProductObj->details($_GET['id']);

use Project\Controllers\Category;

$categoryoObj = new Category();
$categories = $categoryoObj->index();
?>
<?php include_once('pro_header.php'); ?>
<!-- Top Nav -->


<!-- <div style="width: 500px; margin:0 auto;">
            <a href="./index.php" style="width: 500px; margin:0 auto;" color="black">List</a>

            <form action="./update_product.php?id=<?= $cat_Info['id'] ?>" method="post">
                <input name="product_id" value="<?= $cat_Info['product_id'] ?>" placeholder="Enter Product ID">
                <input name="name" value="<?= $cat_Info['name'] ?>" placeholder="Enter Student Name">
                <button>Update</button>
            </form>
        </div> -->

<!--End Top Nav -->

<br>
<br>
<div class="col-md-12">
    <!-- <a href="./index.php"><button type="submit" class="btn btn-info w-100"> Product list</button> </a> -->
    <div class="main-content ">
        <div class="mt-5 w-100 text-center p-3">
            <div class="card ">
                <div class="card-body">
                    <form class="form-horizontal" action="./update_product.php?id=<?= $cat_Info['id'] ?>" method="post" enctype="multipart/form-data">

                        <fieldset>

                            <!-- Form Name -->
                            <legend>PRODUCT Edit</legend>

                            <!-- Text input-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="product_id">PRODUCT ID</label>
                                        <div class="col-md-12 p-4">
                                            <input id="product_id" type="text" name="product_id" value="<?= $cat_Info['product_id'] ?>" placeholder="Enter Product ID" class="form-control w-100 text-center">


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <!-- Text input-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">PRODUCT NAME</label>
                                        <div class="col-md-12 p-4">
                                            <input id="name" name="name" placeholder="Enter Product Name" class="form-control input-md" type="text" value="<?= $cat_Info['name'] ?>">


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <select id="product_category" name="product_category" class="form-select" aria-label="Default select example">
                                            <option><?php //echo $cat_Info['id']; ?><?php if ($cat_Info['id'] == $cat_Info['id']) {
                                                                                        //echo "selected";
                                                                                    } ?>
                                                <?php echo $cat_Info['product_category']; ?></option>
                                            <?php
                                            foreach ($categories as $category) {
                                            ?>
                                                <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                            <?php
                                            }
                                            ?>


                                            <!-- <option value="<?php echo $cat_Info['id']; ?>" <?php if ($cat_Info['id'] == $cat_Info['id']) {
                                                                                                    echo "selected";
                                                                                                } ?>>
                                                <?php echo $cat_Info['name']; ?></option> -->

                                        </select>
                                        <br>
                                        <?= $_SESSION['errors']['product_category'] ?? null ?>
                                    </div>

                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="product_price">PRODUCT Price
                                        </label>
                                        <div class="col-md-12 p-4">
                                            <input id="product_price" name="product_price" placeholder="Enter Prodcut price" class="form-control input-md" type="text" value="<?= $cat_Info['product_price'] ?>">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION
                                            FR</label>
                                        <div class="col-md-12 p-4">
                                            <input id="product_description" name="product_description" placeholder="PRODUCT DESCRIPTION FR" class="form-control input-md" type="textbox" value="<?= $cat_Info['product_description'] ?>">


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Select Basic -->


                            <!-- Text input-->


                            <!-- Text input-->


                            <!-- Textarea -->


                            <!-- Text input-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="percentage_discount">PERCENTAGE
                                            DISCOUNT</label>
                                        <div class="col-md-12 p-4">
                                            <input id="percentage_discount" name="percentage_discount" placeholder="PERCENTAGE DISCOUNT" class="form-control input-md" value="<?= $cat_Info['percentage_discount'] ?>" type="text">



                                        </div>
                                    </div>
                                </div>
                            </div>




                            <!-- Search input-->



                            <!-- Text input-->
                            <!-- <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="online_date">ONLINE DATE</label>
                                                <div class="col-md-12 p-4">
                                                    <input id="online_date" name="online_date" placeholder="ONLINE DATE" class="form-control input-md" type="date">
                                                    <br>
                                                    <?= $_SESSION['errors']['online_date'] ?? null ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->



                            <!-- Text input-->
                            <div class="card aligns-items-center justify-content-center card text-center w-100">
                                <div class="card-body">
                                    <div class="form-group">

                                        <div class="col-md-12 p-4">
                                            <!-- <input id="approuved_by" name="approuved_by" placeholder="APPROUVED BY" class="form-control input-md" required="" type="text"> -->

                                            <!-- File Button -->
                                            <!-- <div class="card">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label" for="filebutton">main_image</label>
                                                                <div class="col-md-12 p-4">
                                                                    <input  
                type="file" 
                name="picture" 
               
               
            >
            <br>
            <?= $_SESSION['errors']['picture'] ?? null ?> <br>">
                                                                </div>
                                                            </div>?php
include_once './../../vendor/autoload.php';

use Project\Controllers\Product;

$ProductObj = new Product();

$cat_Info = $ProductObj->details($_GET['id']);

use Project\Controllers\Category;

$categoryoObj = new Category();
$categories = $categoryoObj->index();
?>
<?php include_once('pro_header.php'); ?>
<!-- Top Nav -->


<!-- <div style="width: 500px; margin:0 auto;">
            <a href="./index.php" style="width: 500px; margin:0 auto;" color="black">List</a>

            <form action="./update_product.php?id=<?= $cat_Info['id'] ?>" method="post">
                <input name="product_id" value="<?= $cat_Info['product_id'] ?>" placeholder="Enter Product ID">
                <input name="name" value="<?= $cat_Info['name'] ?>" placeholder="Enter Student Name">
                <button>Update</button>
            </form>
        </div> -->

<!--End Top Nav -->

<br>
<br>
<div class="col-md-12">
    <!-- <a href="./index.php"><button type="submit" class="btn btn-info w-100"> Product list</button> </a> -->
    <div class="main-content ">
        <div class="mt-5 w-100 text-center p-3">
            <div class="card ">
                <div class="card-body">
                    <form class="form-horizontal" action="./update_product.php?id=<?= $cat_Info['id'] ?>" method="post" enctype="multipart/form-data">

                        <fieldset>

                            <!-- Form Name -->
                            <legend>PRODUCT Edit</legend>

                            <!-- Text input-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="product_id">PRODUCT ID</label>
                                        <div class="col-md-12 p-4">
                                            <input id="product_id" type="text" name="product_id" value="<?= $cat_Info['product_id'] ?>" placeholder="Enter Product ID" class="form-control w-100 text-center">


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <!-- Text input-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">PRODUCT NAME</label>
                                        <div class="col-md-12 p-4">
                                            <input id="name" name="name" placeholder="Enter Product Name" class="form-control input-md" type="text" value="<?= $cat_Info['name'] ?>">


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <select id="product_category" name="product_category" class="form-select" aria-label="Default select example">
                                            <option><?php //echo $cat_Info['id']; ?><?php if ($cat_Info['id'] == $cat_Info['id']) {
                                                                                        //echo "selected";
                                                                                    } ?>
                                                <?php echo $cat_Info['product_category']; ?></option>
                                            <?php
                                            foreach ($categories as $category) {
                                            ?>
                                                <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                            <?php
                                            }
                                            ?>


                                            <!-- <option value="<?php echo $cat_Info['id']; ?>" <?php if ($cat_Info['id'] == $cat_Info['id']) {
                                                                                                    echo "selected";
                                                                                                } ?>>
                                                <?php echo $cat_Info['name']; ?></option> -->

                                        </select>
                                        <br>
                                        <?= $_SESSION['errors']['product_category'] ?? null ?>
                                    </div>

                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="product_price">PRODUCT Price
                                        </label>
                                        <div class="col-md-12 p-4">
                                            <input id="product_price" name="product_price" placeholder="Enter Prodcut price" class="form-control input-md" type="text" value="<?= $cat_Info['product_price'] ?>">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION
                                            FR</label>
                                        <div class="col-md-12 p-4">
                                            <input id="product_description" name="product_description" placeholder="PRODUCT DESCRIPTION FR" class="form-control input-md" type="textbox" value="<?= $cat_Info['product_description'] ?>">


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Select Basic -->


                            <!-- Text input-->


                            <!-- Text input-->


                            <!-- Textarea -->


                            <!-- Text input-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="percentage_discount">PERCENTAGE
                                            DISCOUNT</label>
                                        <div class="col-md-12 p-4">
                                            <input id="percentage_discount" name="percentage_discount" placeholder="PERCENTAGE DISCOUNT" class="form-control input-md" value="<?= $cat_Info['percentage_discount'] ?>" type="text">



                                        </div>
                                    </div>
                                </div>
                            </div>




                            <!-- Search input-->



                            <!-- Text input-->
                            <!-- <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="online_date">ONLINE DATE</label>
                                                <div class="col-md-12 p-4">
                                                    <input id="online_date" name="online_date" placeholder="ONLINE DATE" class="form-control input-md" type="date">
                                                    <br>
                                                    <?= $_SESSION['errors']['online_date'] ?? null ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->



                            <!-- Text input-->
                            <div class="card aligns-items-center justify-content-center card text-center w-100">
                                <div class="card-body">
                                    <div class="form-group">

                                        <div class="col-md-12 p-4">
                                            <!-- <input id="approuved_by" name="approuved_by" placeholder="APPROUVED BY" class="form-control input-md" required="" type="text"> -->

                                            <!-- File Button -->
                                            <!-- <div class="card">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label" for="filebutton">main_image</label>
                                                                <div class="col-md-12 p-4">
                                                                    <input  
                type="file" 
                name="picture" 
               
               
            >
            <br>
            <?= $_SESSION['errors']['picture'] ?? null ?> <br>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
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
                                                <label class="col-md-4 control-label " for="singlebutton">Single
                                                    Button</label>
                                                <div class="col-md-12 p-4 d-flex justify-content-center">
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
                                                        </div>
                                                    </div> -->
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
                                                <label class="col-md-4 control-label " for="singlebutton">Single
                                                    Button</label>
                                                <div class="col-md-12 p-4 d-flex justify-content-center">
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



<!--form ->$_COOKIE
<?php
session_start();

if (isset($_SESSION['errors'])) {
    print_r($_SESSION['errors']);
    echo '<ul>';
    foreach ($_SESSION['errors'] as $key => $error) {
        echo '<li>The ' . $key . ' Field ' . $error . '</li>';
    }
    echo '</ul>';
}
?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Account</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <style>
    a {
      text-decoration: none;
    }
  </style>
  <link rel="stylesheet" href="admin/css/style.css">
</head>

<body>
  <section class="h-100 h-custom gradient-custom-2">
    <h1 class="text-center py-5 text-success">Register Your Account</h1>

    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-6 " style="background-color: tomato;">
                  <div class="p-5">
                    <h3 class="fw-normal mb-5" style="color: #f5f5f5;">User Infomation</h3>


                    <a href="./index.php">List</a>
        <form action="./store.php" method="post">
           <!-- <input type="text" name="id" placeholder="Enter Student Id"> <br>
            <input type="text" name="name" placeholder="Enter Student Name">
            <button>Add</button> -->

            <table id="ta" class="place">


                <tr>

                   
                    <td> <label for="id"> User Id</label> </td>
                    <td> <input type="text" name="user_id"   value="<?= $_SESSION['old']['id'] ?? null ?>" placeholder="Enter Student ID" /> </td>
                  <td>  <br>
            <?= $_SESSION['errors']['user_id'] ?? null ?> <br> </td>
                </tr>


                <tr>

                    
                    <td> <label for="name"> user Name</label> </td>
                    <td> <input type="text" name="name" value="<?= $_SESSION['old']['name'] ?? null ?>"  placeholder="Enter Student Name"> </td>
                 <td>   <br>
            <?= $_SESSION['errors']['name'] ?? null ?>       </tr>
    </td>

               <tr>
                    <td> <label for="password"> Password</label> </td>
                    <td><input type="password" name="password" value="<?= $_SESSION['old']['password'] ?? null ?>" placeholder="enter a password"  /> </td>

                    <td> 
                         <br>
            <?= $_SESSION['errors']['password'] ?? null ?>       </tr>
    </td>

                </tr>




 


                <tr>
                    <td>
                        <label for="user_type">User Type:</label>
                    </td>
                    <td>
                        <select id="user_type" name="user_type" value="<?= $_SESSION['old']['user_type'] ?? null ?>">
                            <option value="">--select--</option>

                            <option value="regular">Regular</option>
                            <option value="paid">Paid</option>
                            <option value="VIP">VIP</option>
                        </select>
                    </td>
                     <td> 
                         <br>
            <?= $_SESSION['errors']['user_type'] ?? null ?>       </tr>
    </td>

                </tr>

                
                

               

                <tr>
                    <td> Email </td>
                    <td> <input type="textbox" name="email" placeholder="Enter a Email ID" value="<?= $_SESSION['old']['email'] ?? null ?>" /> </td>
 <td> 
                         <br>
            <?= $_SESSION['errors']['email'] ?? null ?>       </tr>
    </td>
                </tr>

                <tr>
                    <td> Contact NO </td>
                    <td> <input type="textbox" name="contact_no" placeholder="Enter a Contact No" value="<?= $_SESSION['old']['contact_no'] ?? null ?>" /> </td>
                    <td> 
                         <br>
            <?= $_SESSION['errors']['contact_no'] ?? null ?>       </tr>
    </td>
                </tr>



                <tr>
                    <td>
                        Gender:</td>

                    <td>
                        Male<input type="radio" name="gender" value="Male" value="<?= $_SESSION['old']['gender'] ?? null ?>" />
                        Female<input type="radio" name="gender" value="Female" value="<?= $_SESSION['old']['gender'] ?? null ?>" />
                    </td>
<td> 
                         <br>
                         <?= $_SESSION['errors']['gender'] ?? null ?>       </tr>
    </td>

                </tr>

  <tr>
    <td>Image</td>
    <td>
    <input 
        type="file" 
        name="picture" 
       
        
    ><br>
    <?= $_SESSION['errors']['picture'] ?? null ?> <br>
    </td>
  </tr>
               



    



                <tr>


                    <br>

                    <td>
                        Submit
                    </td>


                    <td> <button>Add</button></td>



                </tr>


            </table>
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
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
</body>

</html>