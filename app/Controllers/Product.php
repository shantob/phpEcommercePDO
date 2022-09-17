<?php

namespace Project\Controllers;

use Exception;
use PDO;
//use PDOException;

//class Student
class Product
{
    public $P_category;
    public $id;
    public $name;
    public $conn;
    private $dbUserName = 'root';
    private  $dbpassword = '';
    private  $dbName = 'ecomm_ajob';


    public function __construct()
    {
        //session_start();
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


        $sql = "SELECT * FROM product_info ORDER BY id desc";
        $stmt = $this->conn->query($sql);

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //    echo "<pre>";
        //    print_r($data);
        //    die();
        return $data;
    }
    // public function categoryShow($P_category)
    // {
    //     $sql = "SELECT * FROM product_info WHERE product_category=$P_category";
    //     $stmt = $this->conn->query($sql);

    //     $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     //    echo "<pre>";
    //     //    print_r($data);
    //     //    die();
    //     return $data;
    // }
    public function store(array $data)
    {
        $uploaddir = './../../assets/uploads/';

        // $uploadfile = $uploaddir . $_FILES['picture']['name'];

        $allowed_exttension=array('gif','png','jpg','jpeg');
        $actuaImageName = $_FILES['picture']['name'];
        $formattedImageName = date('Y-m-d') . time() . $actuaImageName;
        $uploadfile = $uploaddir . $formattedImageName;
        $uploadfiletocheck = $uploaddir . $_FILES['picture']['name'];
      //  die($formattedImageName);
         move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile);
         
	 //$imageName=$_FILES['img']['name'];
	 $file_extension=pathinfo($actuaImageName,PATHINFO_EXTENSION);
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

            if (empty($data['product_id'])) {
                $_SESSION['errors']['product_id'] = 'Required';
            } elseif (!is_numeric($data['product_id'])) {
                $_SESSION['errors']['product_id'] = 'Must be an integer';
            }

            if (empty($data['name'])) {
                $_SESSION['errors']['name'] = 'Required';
            }
            if (empty($data['product_category'])) {
                $_SESSION['errors']['product_category'] = 'Required';
            }
            if (empty($data['product_price'])) {
                $_SESSION['errors']['product_price'] = 'Required';
            }
            if (empty($data['product_description'])) {
                $_SESSION['errors']['product_description'] = 'Required';
            }
            if (empty($data['percentage_discount'])) {
                $_SESSION['errors']['percentage_discount'] = 'Required';
            }
            if (empty($data['online_date'])) {
                $_SESSION['errors']['online_date'] = 'Required';
            }
            // if (empty($data['picture'])) {
            //     $_SESSION['errors']['picture'] = 'Required';
            // }
             

            if(!in_array($file_extension,$allowed_exttension)){
		
	    $_SESSION['errors']['picture']="only gif,png,jpg and jpeg are allowed";
	
		

        

       }   //is_string($a)
       elseif ($_FILES["picture"]["size"] > 5000000) {
        $_SESSION['errors']['picture']="file too large";
      }

      elseif (file_exists($uploadfiletocheck)) {
        $_SESSION['errors']['picture']= "Sorry, file already exists.";
        
      }
    // elseif (file_exists($uploadfile)) {
    //   $_SESSION['errors']['picture']= "Sorry, file already exists.";
        
    //  }

            if (isset($_SESSION['errors'])) {
                return false;
            }

            // $_SESSION['students'][] = $data;
            //try {

            // $pdo = new PDO('mysql:host=localhost;dbname=categories', 'root', 'root');
            $sql = "INSERT INTO product_info (name,product_id,picture,product_category,product_price,product_description,
            percentage_discount,online_date
            ) VALUES (:s_name,:c_id,:p_picture,:p_category,:p_price,:p_description,:p_discount,:o_date)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['s_name' => $data['name'], 'c_id' => $data['product_id'],
            'p_picture'=>$formattedImageName,
            'p_category'=> $data['product_category'],
            'p_price'=> $data['product_price'],'p_description'=> $data['product_description'],
            'p_discount'=> $data['percentage_discount'],'o_date'=> $data['online_date'],

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
            $sql = "SELECT * FROM product_info where id=$id";
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
            // $sql = "UPDATE  product_info SET name=:c_name, product_id=:c_id  WHERE id=:r_id";
            // $stmt = $this->conn->prepare($sql);
            // $stmt->execute([
            //     'r_id' => $id,
            //     'c_name' => $data['name'],
            //     'c_id' => $data['product_id']


                $sql = "UPDATE  product_info SET name=:c_name, product_id=:c_id ,product_price=:p_price,
            product_description=:p_description,percentage_discount=:p_discount
             WHERE id=:r_id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'r_id' => $id,
                'c_name' => $data['name'],
                'c_id' => $data['product_id'],
                'p_price' => $data['product_price'],
                'p_description' => $data['product_description'],
                'p_discount' => $data['percentage_discount']
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
            // $sql = "DELETE FROM product_info WHERE id=:id";
            $stmt = $this->conn->prepare("DELETE FROM product_info WHERE id=:s_id");
            $stmt->execute(['s_id' => $id]);


            $_SESSION['message'] = 'Successfully Deleted';
        } catch (Exception $th) {
            $_SESSION['errors']['sqlError'] = $th->getMessage();
            // die();
        }
    }

   
}
