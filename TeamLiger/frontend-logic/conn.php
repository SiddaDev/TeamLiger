<?php
session_start();
$servername = "";
$username = "";
$password = "";
$db = "MJTutorials";

// Create database connection
$conn = mysqli_connect($servername, $username, $password, $db);
  
// Check connection
if(mysqli_connect_error()){
 echo "Connection establishing failed!";
}
else{}
?>