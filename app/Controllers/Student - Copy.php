<?php

namespace Project\Controllers;

use Exception;
use PDO;
//use PDOException;

//class Student
class Category
{
    public $id;
    public $name;
    public $conn;
    private $dbUserName = 'root';
    private  $dbpassword = '';
    private  $dbName = 'categories';


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


        $sql = "SELECT * FROM category_info ORDER BY id desc";
        $stmt = $this->conn->query($sql);

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //    echo "<pre>";
        //    print_r($data);
        //    die();
        return $data;
    }
    public function store(array $data)
    {
        try {
        $_SESSION['old'] = $data;

        if (empty($data['category_id'])) {
            $_SESSION['errors']['category_id'] = 'Required';
        } elseif (!is_numeric($data['category_id'])) {
            $_SESSION['errors']['category_id'] = 'Must be an integer';
        }

        if (empty($data['name'])) {
            $_SESSION['errors']['name'] = 'Required';
        }

       
        //is_string($a)

        if (isset($_SESSION['errors'])) {
            return false;
        }

        // $_SESSION['students'][] = $data;
//try {

        // $pdo = new PDO('mysql:host=localhost;dbname=categories', 'root', 'root');
        $sql = "INSERT INTO category_info (name,category_id) VALUES (:s_name,:c_id)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['s_name' => $data['name'], 'c_id' => $data['category_id']]);


        unset($_SESSION['old']);
        $_SESSION['message'] = 'Successfully Created';
        return true;
}
        catch(Exception $e){
            S_SESSION['errors']['sqlError'] . $e->getMessage();
            die();
        }
    }

    public function details(int $id)
    { try {
        $sql = "SELECT * FROM category_info where id=$id";
        $stmt = $this->conn->query($sql);

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        //    echo "<pre>";
        //    print_r($data);
        //    die();
        return $data;
    }
    catch(Exception $e){
        echo ' Failed to show Details. Error: ' . $e->getMessage();
        die();

    }
        //return $_SESSION['students'][$this->findIndex($id)];
    }

    public function update(array $data, int $id)
    {  try{
        $sql = "UPDATE  category_info SET name=:c_name, category_id=:c_id  WHERE id=:r_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'r_id' => $id,
            'c_name' => $data['name'], 
            'c_id' => $data['category_id']]);

      //  $_SESSION['students'][$this->findIndex($id)] = $data;
        $_SESSION['message'] = 'Successfully Updated';}
        catch (Exception $e){

            echo 'Updation Failed. Error: ' . $e->getMessage();
            die();
        }
    }

    public function destroy(int $id)
    {
        try{
        // $sql = "DELETE FROM category_info WHERE id=:id";
        $stmt = $this->conn->prepare("DELETE FROM category_info WHERE id=:s_id");
        $stmt->execute(['s_id' => $id]);


        $_SESSION['message'] = 'Successfully Deleted';
    }
    catch(Exception $th){
        echo ' Failed To Delete Data. Error: ' . $th->getMessage();
        die();
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
