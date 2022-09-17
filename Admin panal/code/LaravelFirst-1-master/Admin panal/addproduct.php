<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashoard Add Product</title>
    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!-- custom css -->
    <link rel="stylesheet" href="admin/css/style.css" />
</head>

<body>
    <!-- Side-Nav -->
    <div class="zindex-modal-backdrop side-navbar active-nav d-flex justify-content-between flex-wrap flex-column bg-warning" id="sidebar">
        <ul class="nav flex-column text-white w-100">
            <a href="index.html" class="nav-link h1 text-light my-2">
                Dashboard </br>
            </a>
            <a href="profile.html">
                <li href="" class="nav-link">
                    <i class="bx bx-user-check"></i>
                    <span class="mx-2">Profile</span>
                </li>
            </a>
            <a href="productlist.html">
                <li href="" class="nav-link">
                    <i class="bx bxs-dashboard"></i>
                    <span class="mx-2">Product List</span>
                </li>
            </a>

            <a href="addproduct.html">
                <li href="" class="nav-link">
                    <i class="bx bxs-dashboard"></i>
                    <span class="mx-2">Product Add</span>
                </li>
            </a>
            <a href="category.html">
                <li href="" class="nav-link">
                    <i class="bx bx-conversation"></i>
                    <span class="mx-2">Category</span>
                </li>
            </a>
            <a href="categoryadd.html">
                <li href="" class="nav-link">
                    <i class="bx bx-conversation"></i>
                    <span class="mx-2">Add Category</span>
                </li>
            </a>
            <a href="notification.html">
                <li href="" class="nav-link">
                    <i class="bx bx-conversation"></i>
                    <span class="mx-2">Notification</span>
                </li>
            </a>
            <a href="invoice.html">
                <li href="" class="nav-link">
                    <i class="bx bx-conversation"></i>
                    <span class="mx-2">Invoice</span>
                </li>
            </a>
            <a href="userdetels.html">
                <li class="nav-link">
                    <i class="bx bx-user-check"></i>
                    <span class="mx-2">User Detels</span>
                </li>
            </a>
        </ul>

        <span href="" class="nav-link h4 w-100 ">
            <a href=""><i class="bx bxl-instagram-alt text-danger"></i></a>
            <a href=""><i class="bx bxl-twitter px-2 mx-5 text-danger"></i></a>
            <a href=""><i class="bx bxl-facebook text-danger mb-4"></i></a>
            <a href="login.html"><button type="submit" class="btn btn-secondary w-100 my-2">Log Out</button></a>
        </span>

    </div>


    <nav class="navbar top-navbar navbar-light bg-warning m-0 px-5 sticky-top" style="height:80px ">
        <div class="input-group">
            <a href="index.html" class="nav-link h1 text-light ">
                Dashboard </br>
            </a>
            <input style="margin-left: 5rem; margin-right: 1rem;" type="search" class="form-control mt-2" placeholder="Search Product">
            <div class="input-group-">
                <button class="btn btn-secondary mt-2" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </nav>



    <!-- Main Wrapper -->
    <div class=" my-container active-cont ">
        <!-- Top Nav -->
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

        <!--End Top Nav -->

        <br>
        <br>
        <div class="col-md-12">

            <div class="main-content ">
                <div class="mt-5 w-100 text-center p-3">
                    <div class="card ">
                        <div class="card-body">
                            <form class="form-horizontal" action="./store_product.php" method="post" enctype="multipart/form-data">

                                <fieldset>

                                    <!-- Form Name -->
                                    <legend>PRODUCT ADD</legend>

                                    <!-- Text input-->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="product_id">PRODUCT ID</label>
                                                <div class="col-md-12 p-4">
                                                    <input id="product_id" type="text" name="product_id" value="<?= $_SESSION['old']['product_id'] ?? null ?>" placeholder="Enter Product ID" class="form-control w-100 text-center">
                                                    <br>
                                                    <?= $_SESSION['errors']['product_id'] ?? null ?> <br>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>
                                                <div class="col-md-12 p-4">
                                                    <input id="name" name="name" placeholder="Enter Product Name" class="form-control input-md" type="text" 
                                                    value="<?= $_SESSION['old']['name'] ?? null ?>">
                                                    <br>
                                                    <?= $_SESSION['errors']['name'] ?? null ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <select id="product_category" name="product_categorye" class="form-select" aria-label="Default select example">
                                                    <option selected>Select Category</option>
                                                    <option value="w90rj">w90rj</option>
                                                    <option value="vettr">vettr</option>
                                                    <option value="eger">eger</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="product_name_fr">PRODUCT Price
                                                    FR</label>
                                                <div class="col-md-12 p-4">
                                                    <input id="product_price" name="product_price" placeholder="Enter Prodcut price" class="form-control input-md" 
                                                     type="text"
                                                     value="<?= $_SESSION['old']['product_price'] ?? null ?>">

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
                                                    <input id="product_description" name="product_description" placeholder="PRODUCT DESCRIPTION FR" class="form-control input-md" type="textbox"
                                                    value="<?= $_SESSION['old']['product_description'] ?? null ?>"
                                                    >

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
                                                    <input id="percentage_discount" name="percentage_discount" placeholder="PERCENTAGE DISCOUNT" class="form-control input-md" 
                                                    value="<?= $_SESSION['old']['percentage_discount'] ?? null ?>" type="text">
                                                    <?= $_SESSION['errors']['percentage_discount'] ?? null ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <!-- Search input-->



                                    <!-- Text input-->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="online_date">ONLINE DATE</label>
                                                <div class="col-md-12 p-4">
                                                    <input id="online_date" name="online_date" placeholder="ONLINE DATE" class="form-control input-md" type="date">

                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <!-- Text input-->
                                    <div class="card aligns-items-center justify-content-center card text-center w-100">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="approuved_by">APPROUVED BY</label>
                                                <div class="col-md-12 p-4">
                                                    <input id="approuved_by" name="approuved_by" placeholder="APPROUVED BY" class="form-control input-md" required="" type="text">

                                                    <!-- File Button -->
                                                    <div class="card">
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
                                                        <label class="col-md-4 control-label " for="singlebutton">Single
                                                            Button</label>
                                                        <div class="col-md-12 p-4 d-flex justify-content-center">
                                                            <button id="singlebutton" name="singlebutton" class="btn btn-primary text-center px-5 m-2">Add </button>
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