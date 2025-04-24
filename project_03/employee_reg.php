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
		<div>
			<center><h1><font face="Algerian">EMPLOYEE REGISTRATION</font></h1>
				<br><br>
				<form method="POST">
					<table align="center" cellspacing="30">
					<tr>
						<td>
							<font size="5" >NAME :</font>
						</td>
						<td>
							<input  class="input" type="text" placeholder="Enter your name" name="name">
						</td>
					</tr>
					<tr>
						<td>
							<font size="5" >EMAIL :</font>
						</td>
						<td>
							<input type="email" class="input" placeholder="Email" name="email">
						</td>
					</tr>
					<tr>
						<td>
							<font size="5">DATE OF JOINING :</font>
						</td>
						<td>
							<input  class="input" type="date" name="doj">
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
							<font size="5">QUALIFICATION :</font>
						</td>
						<td>
							<select name="qualification"  class="input">
								<option value="be">BE</option>
								<option value="mca">MCA</option>
								<option value="mtech">M.TECH</option>
								<option value="mba">MBA</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>
							<font size="5">CURRENT DESIGNATION :</font>
						</td>
						<td>
						<select name="current_designation"  class="input">
								<option value="ui">UI Developer</option>
								<option value="php">PHP Developer</option>
								<option value="wordpress">Wordpress Developer</option>
								<option value="java">Java Developer</option>
								<option value="dm">Digital Marketing</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<font size="5">WORK EXPERIANCE :</font>
						</td>
						<td>
							<input  class="input" type="number" name="work_experience" min="1" max="50">
						</td>
					</tr>
					<tr>
						<td>
							<font size="5">SALARY :</font>
						</td>
						<td>
							<input  class="input" type="text" placeholder="Salary" name="salary">
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
							<input  class="input" type="submit" onclick="save();" name="Save" value="Save">
						</td>
						<td align="left">
							<a href="index.php"><input  class="input" type="button"  name="cancel" value="Cancel"></a>
						</td>
					</tr>
				</table>
				</form>
			</center>
		</div>  
		<?php  
if(isset($_POST['Save']))
{
	$n=$_POST['name'];
	$e=$_POST['email'];
	$d=$_POST['doj'];
	$g=$_POST['gender'];
	$q=$_POST['qualification'];
	$c=$_POST['current_designation'];
	$w=$_POST['work_experience'];
	$s=$_POST['salary'];
	$u=$_POST['username'];
	$p=$_POST['password'];

$query="insert into employee(name,email,doj,gender,qualification,current_designation,work_experience,salary,username,password)values('$n','$e','$d','$g','$q','$c','$w','$s','$u','$p')";
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