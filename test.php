<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, email FROM users where id='2'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   //// echo "id: " . $row["id"]. " - Name: " . $row["email"]. " " . "<br>";
   $a=$row["email"];
   echo $a;
  }
} else {
  echo "0 results";
}
$conn->close();
?>