<?php
	session_start();
	include("connection.php");
    $id= $_GET['id'];
    $sql="delete from employee where id='$id'";
    $result=mysqli_query($con,$sql);

    if($result==TRUE)
    {
        header('location:empview.php');
    }
?>