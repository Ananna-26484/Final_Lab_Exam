<?php

  mysql_connect("localhost","root","");
	mysql_select_db("eisty");
  $id=$_POST['id'];
  $query = "delete from authors where date='$a'";
	
	if(mysql_query($query)){
		
		
		header("location:view-author.php");
		
		
	}

?>
