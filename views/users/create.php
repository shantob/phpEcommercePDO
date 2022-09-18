<!--  -->


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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <style>
    a {
      text-decoration: none;
    }
  </style>
  <link rel="stylesheet" href="admin/css/style.css">
</head>

<body>
  <section class="h-100 h-custom gradient-custom-2">
    <h1 class="text-center py-2 text-success bg-light sticky-top">Register Your Account</h1>

    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class=" card-registration card-registration-2" style="">
            <div class=" p-0">
              <div class="row g-0">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 ">
                  <div class="card text-light">
                    <div class="card-body bg-info " style=" border-radius: 15px;">
                      <div class="p-5">
                        <h3 class="fw-normal mb-5 text-center h1" style="color: #f5f5f5;">Your Infomation</h3>
                        <form action="./store.php" method="post" class="text-light" enctype="multipart/form-data">
                          <!-- <input type="text" name="id" placeholder="Enter User Id"> <br>
            <input type="text" name="name" placeholder="Enter User Name">
            <button>Add</button> -->


                          <label for="id"> User Id :</label> <br>
                          <input type="text" class="form-control" name="user_id" value="<?= $_SESSION['old']['user_id'] ?? null ?>" placeholder="Enter User ID" />
                          <br>
                          <small class="text-danger"><?= $_SESSION['errors']['user_id'] ?? null ?> </small><br>

                          <label for="name"> user Name</label> <br>
                          <input type="text" name="name" class="form-control" value="<?= $_SESSION['old']['name'] ?? null ?>" placeholder="Enter User Name">
                          <br>
                          <?= $_SESSION['errors']['name'] ?? null ?>

                          <label for="password"> Password</label> <br>
                          <input type="password" class="form-control" name="password" value="<?= $_SESSION['old']['password'] ?? null ?>" placeholder="enter a password" /> <br>

                          <small class="text-danger"><?= $_SESSION['errors']['password'] ?? null ?></small><br>

                          <label for="user_type">User Type:</label><br>

                          <select id="user_type" class="form-control" name="user_type" value="<?= $_SESSION['old']['user_type'] ?? null ?>">
                            <option value="">--select--</option>

                            <option value="regular">Regular</option>
                            <option value="paid">Paid</option>
                            <option value="VIP">VIP</option>
                          </select><br>

                          <small class="text-danger"><?= $_SESSION['errors']['user_type'] ?? null ?></small><br>


                          <label for="gender">Select Gender</label><br>

                          Male : <input type="radio" name="gender" value="Male" value="<?= $_SESSION['old']['gender'] ?? null ?>" />
                          Female : <input type="radio" name="gender" value="Female" value="<?= $_SESSION['old']['gender'] ?? null ?>" /><br>
                          <small class="text-danger"><?= $_SESSION['errors']['gender'] ?? null ?></small>
                          <br>



                          <label for="email">Type Email</label>
                          <input type="textbox" name="email" class="form-control" placeholder="Enter a Email ID" value="<?= $_SESSION['old']['email'] ?? null ?>" /><br>

                          <small class="text-danger"><?= $_SESSION['errors']['email'] ?? null ?></small><br>

                          <label for="contact_on">Type Your Phone Number</label> <br>
                          <input type="textbox" class="form-control" name="contact_on" placeholder="Enter a Contact No" value="<?= $_SESSION['old']['contact_no'] ?? null ?>" />

                          <br>
                          <?= $_SESSION['errors']['contact_on'] ?? null ?>






                          <label for="picture">Upload Your Picture</label>
                          <input type="file" class="form-control" name="picture"><br>
                          <small class="text-danger"><?= $_SESSION['errors']['picture'] ?? null ?></small> <br>

                          <!-- <input 
                type="file" 
                name="picture" 
               
               
            ><br>
            <?= $_SESSION['errors']['picture'] ?? null ?> <br>  -->


                          <button class="btn btn-success w-100">Add</button>

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
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>