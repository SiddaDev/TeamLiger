<?php
include "conn.php";
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "INSERT INTO student(s_id,Name,Email,Password) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'dsss',rand(0,9999),$_POST['Name'],$_POST['Email'],$_POST['Pass']);
    if(mysqli_stmt_execute($stmt)){
      echo "<script type=\"text/javascript\"> window.location.href ='/';</script>";
    }else
      echo "Error:".$query.$_POST['Name'];
    }
?>