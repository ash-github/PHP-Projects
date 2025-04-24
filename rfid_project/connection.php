<?php
$servername="localhost";
$username="root";
$password="";
$dbname="rfid";

$conn=mysqli_connect($servername,$username,$password,$dbname);

//create connection
if(!$conn)
{
	echo "Failed to connect to MySql:".mysqli_connect_error();
}
?>