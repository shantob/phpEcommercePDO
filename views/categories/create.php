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




<?php include ('./../header/header.php'); ?>
        <!-- Top Nav -->

        <!--End Top Nav -->

        <br>
        <br>
        <div class="col-md-10">

            <div class="main-content">

            <a href="./index.php"><button type="submit" class="btn btn-info w-100">Back to Category List</button></a>
            <br>
            <br>
                <div class="col-md-12 text-center d-flex">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">
                        <div class="card bg-warning">
                            <div class="card-body ">
                                <label for="caregory" class="my-4">
                                    <h2 class="text-center text-light">Add Category</h2>
                                </label>
                                




<form action="./store.php" method="post" enctype="multipart/form-data">
    
    <input 
        type="text" 
        name="category_id" 
        class="form-control"
        value="<?= $_SESSION['old']['category_id'] ?? null ?>"
        placeholder="Enter Category ID"
    ><br>
    <!-- <input 
        type="text" 
        name="" 
        
        value="<?= $_SESSION['errors']['category_id'] ?? null ?>"
         -->
    
    <?= $_SESSION['errors']['category_id'] ?? null ?> <br>

    <input 
        type="text" 
        name="name" 
        class="form-control"
        value="<?= $_SESSION['old']['name'] ?? null ?>" 
        placeholder="Enter Category Name"
    >
    <br>
    <?= $_SESSION['errors']['name'] ?? null ?>

<br>
    <input 
        type="file" 
        name="picture" 
       
        
    ><br>
    <?= $_SESSION['errors']['picture'] ?? null ?> <br>

    <button type="submit" class="btn btn-light mx-2">Create Category</button>
                                    <button type="reset" class="btn btn-dark mx-2">Cancle</button>
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