

    <?php
    //session_start();
    // include_once './store.php';
   // $students = $_SESSION['students'] ?? [];

   include_once './../../vendor/autoload.php';

   use Project\Controllers\Category;
   
   $categoryObj = new Category();
   
   $categories=$categoryObj->index();

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

    
   
<?php include ('./cat_header.php'); ?>





<br>
        <br>
        <div class="col-md-10">

            <div class="main-content">

            <a href="./create.php"><button type="submit" class="btn btn-info w-100">Create new Category</button> </a>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body  text-center">
                            <div class=" w-100 ">
                                <div class=" px-2">
                                    <label for="caregory" class="mb-4 h1 text-dark"> Category List</label>
                                  

                                    
    <table border="1" style="width: 100%;" class="table table table-hover">
        <thead>
            <tr>
                <th>Sr.no</th>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Picture Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sl=0;
            foreach ($categories as $category) { ?>
                <tr> 
                    <td> <?= ++$sl ?> </td>
                   
                    <td><?= $category['category_id'] ?></td>
                    <td><?= $category['name'] ?></td>
                    <!-- <td><?= $category['picture'] ?></td> -->
                    <td><img src="./../../assets/uploads/<?= $category['picture']?>" height="35" alt=""></td>
                    <td>
                        <a href="show.php?id=<?= $category['id'] ?>"><button type="submit" class="btn btn-info w-100">View</button></a>
                        <a href="edit.php?id=<?= $category['id'] ?>"><button type="submit" class="btn btn-primary w-100">UPDATE</button></a>
                        <a href="delete.php?id=<?= $category['id'] ?>" onclick="return confirm('Are You Sure Want to Delete ?')"> <button type="submit" class="btn btn-danger w-100">delete</button></a>
                    </td>
                </tr>
            <?php } ?>
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

