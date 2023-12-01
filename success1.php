
<?php
$servername = "127.0.0.1";
$username = "root";
$Password ="";
$dbname = "studinfosystem";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$user=$_POST['email'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $Password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // $select = "SELECT email from registration where email = ? limit 1";
    // use exec() because no results are returned
    $SQL="INSERT INTO admin (fname,lname,user,password,confirmpassword,Position)VALUES('$firstname','$lastname','$user',MD5('$password') ,MD5('$confirm'),'CLIENT')";
    $conn->exec($SQL);
    //echo "New record created successfully";
    }
catch(PDOException $e)
    {
    //echo $sql . "<br>" . $e->getMessage();
    // echo $SQL . "<br>" . $e->getMessage();
    }

$conn = null;

include "login.php";
  ?>
 