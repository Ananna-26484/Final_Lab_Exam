<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

else{


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['name'];
  $number=$_POST['number'];
  $username=$_POST['username'];
  $password=$_POST['password'];
 
  
  
  

$sql = "INSERT INTO authors(name,number,username,password)
VALUES ('".$name."','".$number."','".$username."','".$password."')";



if ($conn->query($sql) === TRUE) {
    ///echo "Author record created successfully";
    header("location:view-author.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


}





}


?>