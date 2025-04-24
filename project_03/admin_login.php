<?php
	session_start();
	include("connection.php");
?>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		table{
			border:1px solid skyblue;
			text-align:center;
			padding:30px;
			background-color:skyblue;
			box-shadow:2px 8px 16px 2px rgba(0,0,0,0.2);
		}
		input[type="text"],input[type="password"]{
			padding:10px;
			background-color:skyblue;
			border-radius:10px;
		}
		font{
			padding:10px;
		}
		</style>
</head>

    <body>
	<form method="POST"> 
		<table align="center">
			<tr>
				<td>
					<font face="Calibri" size="5">USERNAME : </font>
				</td>
				<td>
					<input type="text" placeholder="Enter the username" name="user">
				</td>
			</tr>
		
			<tr>
				<td>
					<font face="Calibri" size="5">PASSWORD : </font>
				</td>	
				<td>
					<input type="password" placeholder="Password" name="pass">
				</td>
			</tr>
			<tr>	
				<td colspan="2">
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
        </table>
</form>

<?php
	if(isset($_POST['submit']))
	{
		$u=$_POST['user'];
		$p=$_POST['pass']; 
		if(empty($u) || empty($p))
		{
			echo "<script>alert('username or password is empty')</script>";
		}


		else
		{
            $sql="select * from admin where username='$u' and password='$p'";
			$result = mysqli_query($con,$sql);
			if($row=mysqli_fetch_array($result))
			{
				$_SESSION['id']=$row['id'];
				$sid=$_SESSION['id'];
			    header('location:admin_dash.php');
			}
			else
			{
				echo "<script>alert('Not valid')</script>";
			}
		}
	}

?>
</body>

</html>