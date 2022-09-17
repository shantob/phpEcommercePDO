<?php include_once './../../vendor/autoload.php';

use Project\Controllers\Product;

$ProductObj = new Product();

$Products=$ProductObj->index(); ?>

<?php include_once('pro_header.php');?>
        <!-- Top Nav -->

        <!--End Top Nav -->

        <br>
        <br>
        <div class="col-md-12">

            <div class="main-content">
            <?php
    //session_start();
    // include_once './store.php';
   // $students = $_SESSION['students'] ?? [];

   

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
            <a href="./create_product.php"><button type="submit" class="btn btn-info w-100">Create Product </button> </a>
            <br>
            <br>
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
                                                <th scope="col">Product Picture</th>
                                                <th scope="col">Product Price</th>
                                                <th scope="col">Product Category</th>
                                                <th scope="col">Product Description</th>
                                                <th scope="col">Percentage Discount</th>
                                                 <th scope="col">Update Date</th>
                                                    
                                                <th colspan="3" scope="col">Action</th>
                                             </tr>
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
                    <td><img src="./../../assets/uploads/<?= $Product['picture']?>" height="25" alt=""></td>
                    
                    <td><?= $Product['product_price'] ?></td>
                    <td><?= $Product['product_category'] ?></td>
                    <td><?= $Product['product_description'] ?></td>
                    <td><?= $Product['percentage_discount'] ?></td>
                    <td><?= $Product['online_date'] ?></td>
                    <td>
                    <a href="show_product.php?id=<?= $Product['id'] ?>"><button type="submit" class="btn btn-info w-100">View</button></a>
                    <a href="edit_product.php?id=<?= $Product['id'] ?>"><button type="submit" class="btn btn-primary w-100">UPDATE</button></a>
                        <!-- <a href="show_product.php?id=<?= $Product['id'] ?>">Show</a>
                        <a href="edit_product.php?id=<?= $Product['id'] ?>">Edit</a> -->
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

