
<html>
<head>
	<style>
			* {
			padding: 0;
			margin: 0;
		}
		input{
			background-color: white;
			border-radius: 10px;
			padding: 15px;
			width: 200px;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);	
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
	  <script type="text/javascript">
		function message()
		{
			alert("Redirect to Trainer dashboard");
		}
	</script>
</head>
<body bgcolor="#45A8E5">

<?php
	session_start();
	include("connection.php");
?>
	<center><h1><font face="Algerian">TRAINER LOGIN</font></h1>
	<form method="POST">
    	<table align="center" cellspacing="100">
		<tr>
			<td>
				<font face="Algerian" size="5">NAME : </font>
			</td>
			<td>
				<input type="text" placeholder="Enter the name" name="user">
			</td>
		</tr>

		<tr>
			<td>
				<font face="Algerian" size="5">PASSWORD : </font><br><br><br>
			</td>
			<td>
				<input type="password" placeholder="Password" name="pass">
			</td>
		</tr>
		<tr align="center">
			<td align="right">
				<input type="submit" onclick="message()" name="Login" value="Login"> 
			</td>    
			<td align="left">
			   <a href="index.php"><input type="button" name="cancel" value="Cancel"></a>
			</td>
		</tr>
	    </table>
    </form>
	</center>

	<?php
	if(isset($_POST['Login']))
	{
		$u=$_POST['user'];
		$p=$_POST['pass']; 
		if(empty($u) || empty($p))
		{
			echo "<script>alert('username or password is empty')</script>";
		}


		else
		{
            $sql="select * from trainer where username='$u' and password='$p'";
			$result=mysqli_query($con,$sql);
			if($row=mysqli_fetch_array($result))
			{
				$_SESSION['id']=$row['id'];
				$sid=$_SESSION['id'];
			    header('location:trainer_dash.php');
			}
			else
			{
				echo"<script>alert('Not valid')</script>";
			}
		}
	}

?>
</body>
</html>