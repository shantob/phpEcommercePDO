

    <?php
    include_once './../../vendor/autoload.php';

    use Project\Controllers\Category;

    $CategoryObj = new Category();

    $cat_Info = $CategoryObj->details($_GET['id']);

    //print_r($studentInfo);

    ?>

    
<?php include ('./../header/header.php'); ?>





<br>
        <br>
        <div class="col-md-10">

            <div class="main-content">

            <a href="./index.php"><button type="submit" class="btn btn-info w-100">Back to Category List</button></a>
            <br>
            <br>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body  text-center">
                            <div class=" w-100 ">
                                <div class=" px-2">
                                    <label for="caregory" class="mb-4 h1 text-dark"> Update Category</label>
                                  

                                  
 
                                    <div style="width: 500px; margin:0 auto;">
        

        <form action="./update.php?id=<?= $cat_Info['id']?>" method="post">
            <input name="category_id" value="<?= $cat_Info['category_id']?>" placeholder="Enter Student ID">
            <input name="name" value="<?= $cat_Info['name']?>"  placeholder="Enter Student Name">
            <br>
            <br>
            <button type="submit" class="btn btn-primary w-100">UPDATE</button>
            
        </form>
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