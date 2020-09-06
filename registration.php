<?php
if(isset($_GET['submit']))
{
  
    $name=$_GET['username'];
  if(strlen($name)>0)
  {
    echo"Name:  ";
        echo $name ;      
    
  }
  else
  {
    echo "Name can not be empty";
    }   
      
}

if(isset($_GET['submit']))
{
  
    $email=$_GET['email'];
  if(strlen($email)>0)
  {
    echo"Email:  ";
        echo $email ;      
    
  }
  else
  {
    echo "email can not be empty";
    }   
      
}

?>