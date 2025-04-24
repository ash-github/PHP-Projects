<?php
$servername="localhost";
$username="root";
$password="";
$dbname="attendance";

$con=mysqli_connect($servername,$username,$password,$dbname);

//create connection
if(!$con)
{
	echo "Failed to connect to MySql:".mysqli_connect_error();
}
?>