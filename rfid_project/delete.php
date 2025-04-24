<?php
include("connection.php");
$id=$_GET['eid'];
$sql="delete from employee where eid='$id'";

$result=mysqli_query($conn,$sql);

if($result==TRUE)
{
	header('location:view_employee.php');
}
?>