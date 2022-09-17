<?php
include_once './../../vendor/autoload.php';

use Project\Controllers\Category;

$categoryShow = new Category();

$categoryToShow = $categoryShow->details($_GET['id']);

//print_r($studentInfo);

?>


<?php include ('./cat_header.php'); ?>





<br>
        <br>
        <div class="col-md-10">

            <div class="main-content">

            <a href="./index.php"><button type="submit" class="btn btn-info w-100">Category List</button></a>
            <br>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body  text-center">
                            <div class=" w-100 ">
                                <div class=" px-2">
                                    <label for="caregory" class="mb-4 h1 text-dark"> Category Info</label>
                                  

                                  
 
<p>Category Id: <?= $categoryToShow['category_id'] ?></p>
<p>Name: <?= $categoryToShow['name'] ?></p>
<p> Picture :<img src="./../../assets/uploads/<?= $categoryToShow['picture']?>" alt ="Profile Picture"> </p>

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

