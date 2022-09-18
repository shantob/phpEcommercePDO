<?php

namespace Project\Controllers;

use Exception;
use PDO;
//use PDOException;

//class Student
class User
{
    public $id;
    public $name;
    public $conn;
    private $dbUserName = 'root';
    private  $dbpassword = '';
    private  $dbName = 'ecomm_ajob';


    public function __construct()
    {
        session_start();
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=' . $this->dbName, $this->dbUserName, $this->dbpassword);
            // throw new Exception("Some error message");
        } catch (Exception $e) {
            echo 'Database Connection Failed. Error: ' . $e->getMessage();
            die();
        }
    }
    public function index()
    {


        $sql = "SELECT * FROM user_info ORDER BY id desc";
        $stmt = $this->conn->query($sql);

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //    echo "<pre>";
        //    print_r($data);
        //    die();
        return $data;
    }

    public function matching(array $data)
    {

        $getdata = $data['email'];
        $getdata2 = $data['password'];


        $sql = "SELECT * FROM user_info WHERE email=$getdata AND password=$getdata2";
    //     echo "<pre>";
    //     print_r($sql);
    //   die();
        $stmt = $this->conn->query($sql);
       
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);


        print_r($data);
        die();
        $data=$_SESSION['match'];
if($data['email']==$getdata and $data['password']==$getdata2  ){
    echo "yes";
}
else{
    echo "no";
}
        // if (!$stmt->rowCount() == 0) {
        //     while ($data = $stmt->fetch()) {
        //         echo $data['email'] . "<br />\n";
        //     }
        // } else {
        //     echo 'Nothing found';
        // }
        // if ($stmt > 0) {
        //     echo "ok";
        // } else {
        //     echo "No";
        // }

         
           echo "<pre>";
           print_r($data);
         die();
        return $data;
    }
    public function store(array $data)
    {
        $uploaddir = './../../assets/uploads/';
        $uppercase = preg_match('@[A-Z]@', $data['password']);
        $lowercase = preg_match('@[a-z]@', $data['password']);
        $number    = preg_match('@[0-9]@', $data['password']);
        $specialchars = preg_match('@[^\w]@', $data['password']);


        // $uploadfile = $uploaddir . $_FILES['picture']['name'];

        $allowed_exttension = array('gif', 'png', 'jpg', 'jpeg');
        $actuaImageName = $_FILES['picture']['name'];
        $formattedImageName = date('Y-m-d') . time() . $actuaImageName;
        $uploadfile = $uploaddir . $formattedImageName;
        $uploadfiletocheck = $uploaddir . $_FILES['picture']['name'];
        //  die($formattedImageName);
        move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile);

        //$imageName=$_FILES['img']['name'];
        $file_extension = pathinfo($actuaImageName, PATHINFO_EXTENSION);
        //echo $uploadfile;
        //die($uploadfile);
        // echo '<pre>';
        // if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile)) {
        //     echo "File is valid, and was successfully uploaded.\n";
        // } else {
        //     echo "Possible file upload attack!\n";
        // }

        // echo "<pre>";
        // print_r($_FILES);
        // die();
        try {
            $_SESSION['old'] = $data;

            if (empty($data['user_id'])) {
                $_SESSION['errors']['user_id'] = 'Required';
            } elseif (!is_numeric($data['user_id'])) {
                $_SESSION['errors']['user_id'] = 'Must be an integer';
            }




            if (empty($data['name'])) {
                $_SESSION['errors']['name'] = 'Required';
            } elseif (!preg_match("/^[a-zA-z]*$/", $data['name'])) {
                // elseif (is_numeric($data['name'])) {
                $_SESSION['errors']['name'] = 'Must be an no numbers';
            }
            if (empty($data['password'])) {
                $_SESSION['errors']['password'] = 'Required';
            }

            //             elseif(!$uppercase || !$lowercase || !$number || !$specialchars ){
            //                 $_SESSION['errors']['password'] = 'Not in valid format. must  be uppercase,lowercase,numbers,special char';

            // // }
            //         if (empty($data['user_type'])) {
            //             $_SESSION['errors']['user_type'] = 'Required';
            //         }

            //         // if (empty($data['first_name'])) {
            //         //     $_SESSION['errors']['first_name'] = 'Required';
            //         // }

            //         // if (empty($data['last_name'])) {
            //         //     $_SESSION['errors']['last_name'] = 'Required';
            //         // }

            if (empty($data['email'])) {
                $_SESSION['errors']['email'] = 'Required';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {

                $_SESSION['errors']['email'] = 'Invalid email format';
            }

            // if (empty($data['contact_no'])) {
            //     $_SESSION['errors']['contact_no'] = 'Required';
            // }

            if (empty($data['gender'])) {
                $_SESSION['errors']['gender'] = 'Required';
            }





            // if (empty($data['picture'])) {
            //     $_SESSION['errors']['picture'] = 'Required';
            // }


            if (!in_array($file_extension, $allowed_exttension)) {

                $_SESSION['errors']['picture'] = "only gif,png,jpg and jpeg are allowed";
            }   //is_string($a)
            elseif ($_FILES["picture"]["size"] > 5000000) {
                $_SESSION['errors']['picture'] = "file too large";
            } elseif (file_exists($uploadfiletocheck)) {
                $_SESSION['errors']['picture'] = "Sorry, file already exists.";
            }
            // // elseif (file_exists($uploadfile)) {
            // //   $_SESSION['errors']['picture']= "Sorry, file already exists.";

            // //  }

            //         if (isset($_SESSION['errors'])) {
            //             return false;
            //         }

            // $_SESSION['students'][] = $data;
            //try {

            // $pdo = new PDO('mysql:host=localhost;dbname=categories', 'root', 'root');
            // $sql = "INSERT INTO product_info (name,product_id,picture,product_category,product_price,product_description,
            // percentage_discount,online_date
            // ) VALUES (:s_name,:c_id,:p_picture,:p_category,:p_price,:p_description,:p_discount,:o_date)";




            $sql = "INSERT INTO user_info (name,password,user_id,gender,user_type,picture,email,contact_on) VALUES (:s_name,:c_id,:us_id,:u_gender,:u_type,:u_pic,:u_email
   ,:u_contact)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                's_name' => $data['name'],
                'c_id' => $data['password'],
                'us_id' => $data['user_id'],
                'u_type' => $data['user_type'],
                'u_gender' => $data['gender'],
                'u_pic' => $formattedImageName,
                'u_email' => $data['email'],
                'u_contact' => $data['contact_on'],
                //'u_pic'=>$data['picture'],
            ]);



            unset($_SESSION['old']);
            $_SESSION['message'] = 'Successfully Created';
            return true;
        } catch (Exception $e) {
            $_SESSION['errors']['sqlError'] = $e->getMessage();
            // die();
        }
    }

    public function details(int $id)
    {
        try {
            $sql = "SELECT * FROM user_info where id=$id";
            $stmt = $this->conn->query($sql);

            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            //    echo "<pre>";
            //    print_r($data);
            //    die();
            return $data;
        } catch (Exception $e) {
            echo ' Failed to show Details. Error: ' . $e->getMessage();
            die();
        }
        //return $_SESSION['students'][$this->findIndex($id)];
    }

    public function update(array $data, int $id)
    {
        try {

            $uploaddir = './../../assets/uploads/';
            $uppercase = preg_match('@[A-Z]@', $data['password']);
            $lowercase = preg_match('@[a-z]@', $data['password']);
            $number    = preg_match('@[0-9]@', $data['password']);
            $specialchars = preg_match('@[^\w]@', $data['password']);


            // $uploadfile = $uploaddir . $_FILES['picture']['name'];

            $allowed_exttension = array('gif', 'png', 'jpg', 'jpeg');
            $actuaImageName = $_FILES['picture']['name'];
            $formattedImageName = date('Y-m-d') . time() . $actuaImageName;
            $uploadfile = $uploaddir . $formattedImageName;
            $uploadfiletocheck = $uploaddir . $_FILES['picture']['name'];
            //  die($formattedImageName);
            move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile);
            $sql = "UPDATE  user_info SET name=:c_name, user_id=:c_id,user_type=:u_type,gender=:u_gender
            ,picture=:u_pic
              WHERE id=:r_id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'r_id' => $id,
                'c_name' => $data['name'],
                'c_id' => $data['user_id'],
                'u_type' => $data['user_type'],
                'u_gender' => $data['gender'],
                'u_pic' => $formattedImageName,


                //     $sql = "UPDATE  user_info SET name=:c_name, user_id=:c_id
                //   WHERE id=:r_id";
                // $stmt = $this->conn->prepare($sql);
                // $stmt->execute([
                //     'r_id' => $id,
                //     'c_name' => $data['name'],
                //     'c_id' => $data['user_id'],


            ]);

            //  $_SESSION['students'][$this->findIndex($id)] = $data;
            $_SESSION['message'] = 'Successfully Updated';
        } catch (Exception $e) {

            $_SESSION['errors']['sqlError'] = $e->getMessage();
            // die();
        }
    }

    public function destroy(int $id)
    {
        try {
            // $sql = "DELETE FROM user_info WHERE id=:id";
            $stmt = $this->conn->prepare("DELETE FROM user_info WHERE id=:s_id");
            $stmt->execute(['s_id' => $id]);


            $_SESSION['message'] = 'Successfully Deleted';
        } catch (Exception $th) {
            $_SESSION['errors']['sqlError'] = $th->getMessage();
            // die();
        }
    }

    public function findIndex(int $id) //: //int|null
    {
        $students = $_SESSION['students'];
        $index = null;
        foreach ($students as $key => $student) {
            if ($student['id'] == $id) {
                $index = $key;
            }
        }

        return $index;
    }
}
