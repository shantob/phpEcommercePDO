<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashoard Product List</title>
    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!-- custom css -->
    <link rel="stylesheet" href="admin/css/style.css" />
</head>

<body>
<?php
    //session_start();
    // include_once './store.php';
   // $students = $_SESSION['students'] ?? [];

   include_once './../../vendor/autoload.php';

   use Project\Controllers\Product;
   
   $ProductObj = new Product();
   
   $Products=$ProductObj->index();

   if (isset($_SESSION['errors'])) {
    print_r($_SESSION['errors']);
    echo '<ul>';
    foreach ($_SESSION['errors'] as $key => $error) {
        echo '<li>The ' . $key . ' Field ' . $error . '</li>';
    }
    echo '</ul>';
}
    if (isset($_SESSION['message'])) {
        echo  $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
    <!-- Side-Nav -->
    <div class="zindex-modal-backdrop side-navbar active-nav d-flex justify-content-between flex-wrap flex-column bg-warning" id="sidebar">
        <ul class="nav flex-column text-white w-100">
            <a href="index.html" class="nav-link h1 text-light my-2">
                Dashboard </br>
            </a>
            <a href="profile.html"><li href="" class="nav-link">
                <i class="bx bx-user-check"></i>
                <span class="mx-2">Profile</span>
            </li></a>
            <a href="productlist.html"><li href="" class="nav-link">
                <i class="bx bxs-dashboard"></i>
                <span class="mx-2">Product List</span>
            </li></a>

            <a href="addproduct.html"><li href="" class="nav-link">
                <i class="bx bxs-dashboard"></i>
                <span class="mx-2">Product Add</span>
            </li></a>
            <a href="category.html"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Categpry</span>
            </li></a>
           <a href="categoryadd.html"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Category Add</span>
            </li></a> 
           <a href="notification.html"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Notification</span>
            </li></a> 
            <a href="invoice.html"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Invoice</span>
            </li></a>
            <a href="userdetels.html"><li  class="nav-link">
                <i class="bx bx-user-check"></i>
                <span class="mx-2">User Detels</span>
            </li></a>
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
    <div class=" my-container active-cont">
        <!-- Top Nav -->

        <!--End Top Nav -->

        <br>
        <br>
        <div class="col-md-12">

            <div class="main-content">


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body  text-center">
                            <div class=" w-100 ">
                                <div class=" px-2">
                                    <label for="caregory" class="mb-4 h1 text-dark">Product List</label>
                                    <table class="table table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">SR</th>
                                                <th scope="col">Product ID</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">product picture</th>
                                                <th scope="col">product Price</th>
                                                <th scope="col">Product Category</th>
                                                <th scope="col">PRODUCT DESCRIPTION</th>
                                                <th scope="col">PERCENTAGE

                                                    DISCOUNT</th>
                                                    <th scope="col">ONLINE DATE</th>
                                                    ONLINE DATE
                                                <th colspan="3" scope="col">Action</th>
   
                                        </thead>
                                        <tbody>
                                            <?php
            $sl=0;
            foreach ($Products as $Product) { ?>
                <tr> 
                    <td> <?= ++$sl ?> </td>
                   
                    <td><?= $Product['product_id'] ?></td>
                    <td><?= $Product['name'] ?></td>
                    <!-- <td><?= $Product['picture'] ?></td> -->
                    <td><img src="./../../assets/uploads/<?= $Product['picture']?>" height="80" alt=""></td>
                    <td><?= $Product['product_category'] ?></td>
                    <td><?= $Product['product_description'] ?></td>
                    <td><?= $Product['percentage_discount'] ?></td>
                    <td><?= $Product['online_date'] ?></td>
                    <td>
                    <a href="show_product.php?id=<?= $Product['id'] ?>"><button type="submit" class="btn btn-info w-100">View</button></a>
                    <a href="edit_product.php?id=<?= $Product['id'] ?>"><button type="submit" class="btn btn-primary w-100">UPDATE</button></a>
                        <a href="show_product.php?id=<?= $Product['id'] ?>">Show</a>
                        <a href="edit_product.php?id=<?= $Product['id'] ?>">Edit</a>
                        <a href="delete_product.php?id=<?= $Product['id'] ?>" onclick="return confirm('Are You Sure Want to Delete ?')"><button type="submit" class="btn btn-danger w-100">delete</button></a>
                    </td>
                </tr>
            <?php } ?>
                                            <!-- <tr>
                                                <th scope="row"><?= ++$sl ?></th>
                                                <td>Mark</td>
                                                <td><img src="https://th.bing.com/th/id/R.e88c4d812a531229511a68320bd07316?rik=sGNtVo6Vk0pGDw&pid=ImgRaw&r=0&sres=1&sresct=1" height="80" alt=""></td>
                                                <td>Lorem, ipsum dolor.</td>
                                                <td>3350</td>
                                                <td>3500</td>
                                                <td><a href="productshow.html"><button type="submit" class="btn btn-info w-100">View</button></a></td>
                                                <td><a href="productedit.html"><button type="submit" class="btn btn-primary w-100">UPDATE</button></a></td>
                                                <td><button type="submit" class="btn btn-danger w-100">delete</button></td>
                                            </tr> -->
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>
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

