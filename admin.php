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
      <style type='text/css'>
      body{
	  
	  background:url('eisty.jpg');background-repeat:no-repeat;background-size:100% 100%;
	  
	  }	  
	  </style>
	   <body><b>Welcome:</b><br>
	      <a href="add-author.html">Add Author</a> <br>
       <?php echo $_SESSION['name']; 
       
            echo " from admin dashboard";
       
       ?>
       
	  <a href="logout.php">logout</a>

		</body>
        </html>		