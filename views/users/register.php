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
        <form action="./store.php" method="post"  enctype="multipart/form-data">
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

                
                

               

                <!-- <tr>
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
                </tr> -->



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