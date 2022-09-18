<?php
include_once './../../vendor/autoload.php';

use Project\Controllers\User;

$UserObj = new User();

$User_Info = $UserObj->details($_GET['id']);

//print_r($studentInfo);

?>



<?php include('./../header/header.php'); ?>




<br>
<br>



<div class="col-md-12">
    <!-- <a href="./index.php"><button type="submit" class="btn btn-info w-100"> User list</button> </a> -->
    <div class="main-content ">
        <div class="mt-5 w-100 text-center p-3">
            <div class="card ">
                <div class="card-body">
                    <form class="form-horizontal" action="./update.php?id=<?= $User_Info['id'] ?>" method="post" enctype="multipart/form-data">

                        <fieldset>

                            <!-- Form Name -->
                            <legend class="mb-5">User Edit</legend>

                            <!-- Text input-->
                            <div class="col-md-12 d-flex">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="mx-4 control-label" for="user_id">User ID</label>
                                        <div class="col-md-12 p-4">
                                            <input name="user_id" value="<?= $User_Info['user_id'] ?>" placeholder="Enter User ID">



                                        </div>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mx-4 control-label" for="name">User NAME</label>
                                        <div class="col-md-12 p-4">
                                            <input id="name" name="name" placeholder="Enter User Name" class="form-control input-md" type="text" value="<?= $User_Info['name'] ?>">



                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="col-md-12 d-flex">
                                <div class="col-md-6">
                                    <div class="form-group">

                                    <label class="mx-4 control-label" for="name">User Type </label>
                                        <select id="user_type" class="form-control" name="user_type" value="<?= $_SESSION['old']['user_type'] ?? null ?>">
                                            <option value="">--select--</option>

                                            <option <?php if ($User_Info['user_type'] == "regular") {
                                                        echo "selected";
                                                    } ?> value="regular">Regular</option>
                                            <option <?php if ($User_Info['user_type'] == "paid") {
                                                        echo "selected";
                                                    } ?> value="paid">Paid</option>
                                            <option <?php if ($User_Info['user_type'] == "VIP") {
                                                        echo "selected";
                                                    } ?> value="VIP">VIP</option>
                                        </select><br>

                                    </div>

                                </div>




                            </div>
                            <!-- Text input-->








                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label mt-4" for="online_date">User Gender</label>
                                    
                                        

                                        Male : <input <?php if ($User_Info['gender'] == "Male") {
                                                            echo "checked";
                                                        } ?> type="radio" name="gender" value="Male" value="<?= $_SESSION['old']['gender'] ?? null ?>" />
                                        Female : <input <?php if ($User_Info['gender'] == "Female") {
                                                            echo "checked";
                                                        } ?> type="radio" name="gender" value="Female" value="<?= $_SESSION['old']['gender'] ?? null ?>" /><br>

                                        <br>
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
                                        <input type="file" name="picture"> <img src="./../../assets/uploads/<?= $User_Info['picture'] ?>" alt="" height="40">
                                        <br>
                                        <?= $_SESSION['errors']['picture'] ?? null ?> <br>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
             
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