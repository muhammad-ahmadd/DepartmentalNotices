<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'dbConnect.php';

class Student {
    private $conn;
    private $name;
    private $password;
    private $email;

    public function __construct($name,$email, $password,$db) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->conn = $db;
    }

    public function save() 
    {
        
        // Check connection
        
        $sql = "INSERT INTO student (sname, semail, spassword)
        VALUES ('$this->name', '$this->email', '$this->password')";

        if ($this->conn->query($sql) === TRUE) 
        {
             header("Location:login.html");

        } else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    print_r("SS");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $student = new Student($name,$email,$password,$conn);
    $student->save();
}

?>

