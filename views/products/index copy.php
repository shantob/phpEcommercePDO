<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
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

    <a href="./create_product.php">Create </a>
    <table border="1" style="width: 100%;">
        <thead>
            <tr>
                <th>Sr.no</th>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Picture Name</th>
                <th>Action</th>
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
                    <td><?= $Product['picture'] ?></td>
                    <td>
                        <a href="show_product.php?id=<?= $Product['id'] ?>">Show</a>
                        <a href="edit_product.php?id=<?= $Product['id'] ?>">Edit</a>
                        <a href="delete_product.php?id=<?= $Product['id'] ?>" onclick="return confirm('Are You Sure Want to Delete ?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</body>

</html>