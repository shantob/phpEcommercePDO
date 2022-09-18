<?php

namespace Project\Controllers;

use Exception;
use PDO;

class Select
{
    public $id;
    public $name;
    public $conn;
    public $product_id;
    public $product_category;
    public $product_price;
    public $percentage_discount;
    // public $picture;
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
            //die();
        }
    }
    public function store(array $data)
    {
        // echo "<pre>";
        // print_r($data);
        // die();
        $_SESSION['old'] = $data;
        $sql = "INSERT INTO cart (name,product_id,product_price) VALUES (:P_name,:P_id,:P_price)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'P_name' => $data['name'], 'P_id' => $data['product_id'], 'P_price' => $data['product_price'],

        ]);
        unset($_SESSION['old']);
        $_SESSION['massage'] = "Successfully Created!!!";
        return true;

        //  array_push($_SESSION, $data);
        // echo "<pre>";
        // print_r($_SESSION);
    }


    public function show()
    {

        $sql = "SELECT * FROM cart ORDER BY id desc";
        $stmt = $this->conn->query($sql);

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //    echo "<pre>";
        //    print_r($data);
        //    die();
        return $data;
    }

    public function sum()
    {
        $sql =  "SELECT SUM(product_price) FROM cart";
        $stmt = $this->conn->query($sql);

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function update($data, $id)
    {

        ($_SESSION['selectlist'][$this->findIndes($id)] = $data);

        $_SESSION['massage'] = "Successfully Updated!!!";
    }
    public function destroy(int $di)
    {
        // echo "<pre>";
        //    print_r( $id);
        //    die();
        $stmt = $this->conn->prepare("DELETE FROM `cart` WHERE id=$di");

        // if ($statement->execute($data)) {
        //     echo "Post deleted successfully!";
        // }

        $stmt->execute(['id' => $di]);
        // echo "<pre>";
        // print_r($stmt);
        // die();
        $_SESSION['massage'] = "Successfully Deleted!!!";
    }
    public function findIndes(int $id): int
    {
        $selects = $_SESSION['selectlist'];
        $index = null;
        foreach ($selects as $key => $select) {
            if ($select['id'] == $id) {
                $index = $key;
            }
        }
        //print_r($foodInfo);
        return $index;
    }
}
