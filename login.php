<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydB";

session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email=$_POST['email'];
$sql = "SELECT name, email, password,type FROM users where email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   //// echo "id: " . $row["id"]. " - Name: " . $row["email"]. " " . "<br>";
   $a=$row["email"];
   $b=$row['password'];
   $c=$row['type'];
   $d=$row['name'];

   //echo $a;
   ///echo $b;
  $email=$_POST['email'];
  $password=$_POST['password'];
   if($a==$email && $b==$password && $c=="admin"){

    $_SESSION['name']=$d;
    header("location:admin.php");
   }
   else if($a==$email && $b==$password && $c=="user"){

    $_SESSION['name']=$d;
    header("location:user.php");

   }
   else if($a==$email && $b==$password && $c=="super-admin"){

    $_SESSION['name']=$d;
    header("location:.php");

   }

   else{
      
      echo "not done";

   }

  
  }
} else {
  echo "0 results";
}
$conn->close();
?>