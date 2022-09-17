<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="width: 500px; margin:0 auto;">

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

        <a href="./index.php"><button type="submit" class="btn btn-info w-100">Back to Product List</button></a>
        <form action="./store.php" method="post" enctype="multipart/form-data">
            <input 
                type="text" 
                name="category_id" 
                value="<?= $_SESSION['old']['category_id'] ?? null ?>"
                placeholder="Enter Student ID"
            ><br>
            <?= $_SESSION['errors']['category_id'] ?? null ?> <br>

            <input 
                type="text" 
                name="name" 
                value="<?= $_SESSION['old']['name'] ?? null ?>" 
                placeholder="Enter Student Name"
            ><br>
            <?= $_SESSION['errors']['name'] ?? null ?>

<br>
            <input 
                type="file" 
                name="picture" 
               
               
            ><br>
            <?= $_SESSION['errors']['picture'] ?? null ?> <br>

            <button>Add</button>
        </form>

        <?php
            if (isset($_SESSION['errors'])) {
                unset($_SESSION['errors']);
            }
        ?>

    </div>
</body>

</html>