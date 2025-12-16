<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$conn = new mysqli($servername,$username,$password);
if($conn-> connect_error)
{
  die("Connection aborted;" . $conn->connect_error);
}
else
{
  echo"Connection established";
}	
	
	
?>