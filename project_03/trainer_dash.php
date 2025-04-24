<?php
	include('connection.php');
	session_start();
	if(empty($_SESSION['id']))
	{
		header('location:trainer_login.php');
	}
	$sid=$_SESSION['id'];
	$sql="select *from trainer where id='$sid'";
	$result=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result))
	{
		//$id=$row['id'];
		$name=$row['name'];
		$email=$row['email'];
	$gender=$row['gender'];
	$date=$row['date'];
	$qualification=$row['qualification'];
	$current_designation=$row['current_designation'];
	$experience=$row['experience'];
	$username=$row['username'];
	$password=$row['password'];
	}
	?>
<html>
<head>
	<style>
		* {
			padding: 0;
			margin: 0;
		}
		div {
			width: 100%;
			text-align: center;
		}
		h1{
			background-color: grey;
			border-radius: 10px;
			width: fit-content;
			margin-top: 2em;
			padding: 10px 15px;
			box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
			font-size:36px;
		}
	</style>
</head>
<body bgcolor="#45A8E5">
	<div>
		<center><h1><font face="Algerian">TRAINER DASHBOARD</font></h1></center>
	</div>
	<?php
	echo "<center>";
	echo "<table cellspacing='30px' bgcolor='white'>";
	echo "<tr><td>Name = ".$name;
	echo "</td></tr>";
	echo "<tr><td>Email = ".$email;
	echo "</td></tr>";
	echo "<tr><td>Course = ".$gender;
	echo "</td></tr>";
	echo "<tr><td>Date = ".$date;
	echo "</td></tr>";
	echo "<tr><td>Qualification = ".$qualification;
	echo "</td></tr>";
	echo "<tr><td>Current Designation = ".$current_designation;
	echo "</td></tr>";
	echo "<tr><td>Work Experience = ".$experience;
	echo "</td></tr>";
	echo "<tr><td>Username = ".$username;
	echo "</td></tr>";
	echo "<tr><td>Password = ".$password;
	echo "</td></tr>";
	echo "<tr><td colspan='2'><a href='updatetrainer.php?id'><center><input type='button' name='update' value='update'></ center></a></td></tr>";
	echo "</table>";
	echo "<a href='logout.php'><input type='button' name='logout' value='logout'></a>";
	echo "</center>";
	?>
</body>
</html>