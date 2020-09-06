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
  $email=$_POST['email'];
  $password=$_POST['password'];
  $gender=$_POST['gender'];
  $dob=$_POST['birthday'];
  $type=$_POST['type'];
  
  
  

$sql = "INSERT INTO users(name,email,type,password,gender,birthday)
VALUES ('".$name."','".$email."','".$type."','".$password."','".$gender."','".$dob."')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


}





}


?>