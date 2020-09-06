<?php

session_start();
if(!$_SESSION['name']){
	
	header("location: login.html");
	
}
?>



<html>
  <head>
    <title>welcome.php</title>
  </head>      
	   <body><b>Welcome:</b><br>
	      <a href="add-author.html">Add Author</a> <br>
       <?php echo $_SESSION['name']; 
       
            echo " from admin dashboard";
       
       ?>
       
	  <a href="logout.php">logout</a>

		</body>
        </html>		