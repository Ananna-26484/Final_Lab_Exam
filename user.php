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
	  
       <?php echo $_SESSION['name']; 
             echo " from user dashboard";
       
       
       ?>
       <br>
	  <a href="logout.php">logout</a>

		</body>
        </html>		