<?php
	session_start();
	include("connection.php");
    $id= $_GET['id'];
    $sql="delete from student where id='$id'";
    $result=mysqli_query($con,$sql);

    if($result==TRUE)
    {
        header('location:studview.php');
    }
?>