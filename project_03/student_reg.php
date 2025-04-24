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
		.input{
			background-color: white;
			border-radius: 10px;
			padding: 15px;
			width: 200px;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);	
		}
	</style>
	<script type="text/javascript">
		function save(){
			var r=confirm("Redirect to login page");
			if(r==true){
				alert("You are Redirecting to login page");
			}
			else{
				alert("You have pressed cancel");
			}
		}
	</script>
</head>
	<body bgcolor="#45A8E5">
		<?php
		include("connection.php");
		?>
	<form method="POST">

		<div>
			<center><h1><font face="Algerian">STUDENT REGISTRATION</font></h1><br><br>
					<table align="center" cellspacing="30">
					   <tr>
						   <td>	
							   <font size="5">NAME :</font>
						   </td>
						   <td>
							   <input  class="input" type="text" placeholder="Enter your name" name="name">
						   </td>
					   </tr>
					   <tr>
						   <td>
							   <font size="5">EMAIL :</font>
						   </td>
						   <td>
							   <input  class="input" type="email" placeholder="Email" name="email">
						   </td>
					   </tr>
					  
					   <tr>
						   <td rowspan="2">
							   <font size="5">COURSES :</font>
						   </td>
						   <td>
						   </td>
					   </tr>
					   <tr>
						   <td>
						   <select class="input" name="course">
								   <option value="C/C++">C programming/C++</option>
								   <option value="PHP/UI">PHP/UI</option>
								   <option value="DM/Java">DM/Java</option>
							   </select>
						   </td>
					   </tr>
				   
					   <tr>
						   <td>
							   <font size="5">QUALIFICATION :</font>
						   </td>
						   <td>
							   <select class="input" name="qualification">
								   <option value="10th">10th</option>
								   <option value="12th">12th</option>
								   <option value="Graduate">Graduate</option>
							   </select>
						   </td>
					   </tr>
					   <tr>
						   <td>	
							   <font size="5">GENDER :</font>
						   </td>
						   <td>	
							   <input type="radio" name="gender" Value="Male"><font size="5" face="Algerian">Male</font>
							   <input type="radio" name="gender" Value="Female"><font face="Algerian" size="5">Female</font>
						   </td>
					   </tr>
					   <tr>
						   <td>
							   <font size="5">USERNAME :</font>
						   </td>
						   <td>
							   <input  class="input" type="text" placeholder="username" name="username">
						   </td>
					   </tr>
					   <tr>
						   <td>
							   <font size="5">PASSWORD :</font>	
						   </td>
						   <td>
							   <input  class="input" type="password" placeholder="password" name="password">	
						   </td>
					   </tr>
					   <tr align="center">
						   <td align="right">
							   <input  class="input" onclick="save();" type="submit"  name="save" value="Save">
						   </td>
						   <td align="left">
							   <a href="index.php"><input  class="input" type="button" value="Cancel" name="cancel"></a>
						   </td>
					   </tr>
					   </table>
				</center>
		</div></form>
		<?php
if(isset($_POST['save']))
{
	$n=$_POST['name'];
	$e=$_POST['email'];
	$c=$_POST['course'];
	$q=$_POST['qualification'];
	$g=$_POST['gender'];
	$u=$_POST['username'];
	$p=$_POST['password'];

$query="insert into student(name,email,course,qualification,gender,username,password)values('$n','$e','$c','$q','$g','$u','$p')";
$result=mysqli_query($con,$query);
if($result)
{
	echo "data inserted";
}

else
{
   echo "Sorry can't inserted your entry";
}
}
?>
	</body>
</html>