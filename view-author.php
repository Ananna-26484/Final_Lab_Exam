<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, number, username FROM authors";
$result = $conn->query($sql);






if ($result->num_rows > 0) {
    // output data of each row



    while($row = $result->fetch_assoc()) {

        $name = $row["name"];
        $number = $row["number"];
        $username = $row["username"];


        echo '<tr> 
        <td>'.$name.'</td> 
        <td>'.$number.'</td> 
        <td>'.$username.'</td> 
        <td> <a href="#">Delete</a></td>
        <td><a href="#">Edit</a></td>
        
    </tr>';
}


$result->free();
} 

$conn->close();
?>

</body>
</html>