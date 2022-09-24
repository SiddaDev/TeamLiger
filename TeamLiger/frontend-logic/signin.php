<?php
include "conn.php";
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $umail = $_POST['email'];
  $pass = $_POST['password'];
  $sql = "SELECT * FROM student WHERE Email=?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "s", $_POST['email']);
  mysqli_stmt_execute($stmt);
  $result1 = mysqli_stmt_get_result($stmt);
  $result = mysqli_fetch_assoc($result1);
  if(!strcmp($result['Email'],$umail) == !strcmp($result['Password'],$pass)){
    echo "<script type=\"text/javascript\"> window.location.href ='/';</script>";
  }else{
    $error = "Your Login Name or Password is invalid";
    echo $error.mysqli_error($conn)."<br><a href=\"../Signin.html\">Back To Login</a>";
  }
}
?>
