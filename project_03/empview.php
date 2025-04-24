<?php
include('connection.php');
?>
<html>
<head>
		
	<!-- <link rel="stylesheet" href="project4.css"> -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="project4.css">
	<title></title>
</head>
<body>
	<h1 style="color:blue;text-align: center;">Employee View</h1>
<center><a href="index.php"><input type="button" value="logout" name="logout"></a></center>

<form method="post">
	<table align="center" cellspacing="40">
		<tr>
			<th><a href="studview.php"><input type="button" name="stud" value="Student View"></a></th>
			<th><a href="trainview.php"><input type="button" name="train" value="Trainer View"></a></th>
			<th><a href="empview.php"><input type="button" name="emp" value="Employee View"></a></th>
		</tr>
	</table>
</form>
<!------------------------------------------------------------------------->

<div class="container mt-3">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" href="#all">All</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu1">UI/BE</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu2">M.TECH/JAVA</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu3">BE/PHP</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu4">MBA/Digital Marketing</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu5">M.Tech</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu6">MBA</a>
    </li>
  </ul>


  <!-- Tab panes -->
<div class="tab-content">
<div id="all" class="container tab-pane active"><br>
<p><table class="table table-primary table-striped">
	<tr>
	<th>name</th>
		<th>email</th>
		<th>gender</th>
		<th>doj</th>
		<th>qualification</th>
		<th>current designation</th>
		<th>work experience</th>
		<th>salary</th>
		<th>username</th>
		<th>password</th>
		<th></th>
	</tr>
<?php
$sql="select * from employee";
$result=mysqli_query($con,$sql);
			
while($row=mysqli_fetch_array($result))
{
	$name=$row['name'];
	$email=$row['email'];
	$gender=$row['gender'];
	$doj=$row['doj'];
	$qualification=$row['qualification'];
	$current_designation=$row['current_designation'];
	$work_experience=$row['work_experience'];
	$salary=$row['salary'];
	$username=$row['username'];
	$password=$row['password'];
?>
<tr>
<?php
	$id= $row['id'];
	?>
    <td><?php echo "$name"?></td>
	<td><?php echo "$email"?></td>
	<td><?php echo "$gender"?></td>
	<td><?php echo "$doj"?></td>
	<td><?php echo "$qualification"?></td>
	<td><?php echo "$current_designation"?></td>
	<td><?php echo "$work_experience"?></td>
	<td><?php echo "$salary"?></td>
	<td><?php echo "$username"?></td>
	<td><?php echo "$password"?></td>
	<td><?php echo "<a href='deleteemp.php?id=".$id."
	'><input type='button' name='delete' value='deleteemp'></a>"?></td>
</tr>
<?php
	}
?></table></p>
</div>

<div id="menu1" class="container tab-pane fade"><br>
<p> 
<table class="table table-primary table-striped">
	<tr>
	    <th>name</th>
		<th>email</th>
		<th>gender</th>
		<th>doj</th>
		<th>qualification</th>
		<th>current designation</th>
		<th>work experience</th>
		<th>salary</th>
		<th>username</th>
		<th>password</th>
		<th></th>
	</tr>
<?php
$sql="select * from employee where qualification='be' and current_designation='ui'";
$result=mysqli_query($con,$sql);
			
while($row=mysqli_fetch_array($result))
{
	$name=$row['name'];
	$email=$row['email'];
	$gender=$row['gender'];
	$doj=$row['doj'];
	$qualification=$row['qualification'];
	$current_designation=$row['current_designation'];
	$work_experience=$row['work_experience'];
	$salary=$row['salary'];
	$username=$row['username'];
	$password=$row['password'];
?>
<tr>
    <td><?php echo "$name"?></td>
	<td><?php echo "$email"?></td>
	<td><?php echo "$gender"?></td>
	<td><?php echo "$doj"?></td>
	<td><?php echo "$qualification"?></td>
	<td><?php echo "$current_designation"?></td>
	<td><?php echo "$work_experience"?></td>
	<td><?php echo "$salary"?></td>
	<td><?php echo "$username"?></td>
	<td><?php echo "$password"?></td>
	<td><?php echo "<a href='deleteemp.php?id=".$id."
	'><input type='button' name='delete' value='deleteemp'></a>"?></td>
</tr>
<?php
	}
?></table>
</p>
</div>
	
<div id="menu2" class="container tab-pane fade"><br>
<p><table class="table table-primary table-striped">
	<tr>
	    <th>name</th>
		<th>email</th>
		<th>gender</th>
		<th>doj</th>
		<th>qualification</th>
		<th>current designation</th>
		<th>work experience</th>
		<th>salary</th>
		<th>username</th>
		<th>password</th>
		<th></th>
	</tr>
<?php
$sql="select * from employee where qualification='mtech' and current_designation='java'";
$result=mysqli_query($con,$sql);
			
while($row=mysqli_fetch_array($result))
{
	$name=$row['name'];
	$email=$row['email'];
	$gender=$row['gender'];
	$doj=$row['doj'];
	$qualification=$row['qualification'];
	$current_designation=$row['current_designation'];
	$work_experience=$row['work_experience'];
	$salary=$row['salary'];
	$username=$row['username'];
	$password=$row['password'];
?>
<tr>
<td><?php echo "$name"?></td>
	<td><?php echo "$email"?></td>
	<td><?php echo "$gender"?></td>
	<td><?php echo "$doj"?></td>
	<td><?php echo "$qualification"?></td>
	<td><?php echo "$current_designation"?></td>
	<td><?php echo "$work_experience"?></td>
	<td><?php echo "$salary"?></td>
	<td><?php echo "$username"?></td>
	<td><?php echo "$password"?></td>
	<td><?php echo "<a href='deleteemp.php?id=".$id."
	'><input type='button' name='delete' value='deleteemp'></a>"?></td>
</tr>
<?php
	}
?></table></p>
</div>
  
<div id="menu3" class="container tab-pane fade"><br>
<p>
<table class="table table-primary table-striped">
	<tr>
	    <th>name</th>
		<th>email</th>
		<th>gender</th>
		<th>doj</th>
		<th>qualification</th>
		<th>current designation</th>
		<th>work experience</th>
		<th>salary</th>
		<th>username</th>
		<th>password</th>
		<th></th>
	</tr>
<?php
$sql="select * from employee where qualification='be' and current_designation='php'";
$result=mysqli_query($con,$sql);
			
while($row=mysqli_fetch_array($result))
{
	$name=$row['name'];
	$email=$row['email'];
	$gender=$row['gender'];
	$doj=$row['doj'];
	$qualification=$row['qualification'];
	$current_designation=$row['current_designation'];
	$work_experience=$row['work_experience'];
	$salary=$row['salary'];
	$username=$row['username'];
	$password=$row['password'];
?>
<tr>
<td><?php echo "$name"?></td>
	<td><?php echo "$email"?></td>
	<td><?php echo "$gender"?></td>
	<td><?php echo "$doj"?></td>
	<td><?php echo "$qualification"?></td>
	<td><?php echo "$current_designation"?></td>
	<td><?php echo "$work_experience"?></td>
	<td><?php echo "$salary"?></td>
	<td><?php echo "$username"?></td>
	<td><?php echo "$password"?></td>
	<td><?php echo "<a href='deleteemp.php?id=".$id."
	'><input type='button' name='delete' value='deleteemp'></a>"?></td>
</tr>
<?php
	}
?></table></p>
</div>


<div id="menu4" class="container tab-pane fade"><br>
<p>
<table class="table table-primary table-striped">
	<tr>
	    <th>name</th>
		<th>email</th>
		<th>gender</th>
		<th>doj</th>
		<th>qualification</th>
		<th>current designation</th>
		<th>work experience</th>
		<th>salary</th>
		<th>username</th>
		<th>password</th>
		<th></th>
	</tr>
<?php
$sql="select * from employee where qualification='mba' and current_designation='dm'";
$result=mysqli_query($con,$sql);
			
while($row=mysqli_fetch_array($result))
{
	$name=$row['name'];
	$email=$row['email'];
	$gender=$row['gender'];
	$doj=$row['doj'];
	$qualification=$row['qualification'];
	$current_designation=$row['current_designation'];
	$work_experience=$row['work_experience'];
	$salary=$row['salary'];
	$username=$row['username'];
	$password=$row['password'];
?>
<tr>
<td><?php echo "$name"?></td>
	<td><?php echo "$email"?></td>
	<td><?php echo "$gender"?></td>
	<td><?php echo "$doj"?></td>
	<td><?php echo "$qualification"?></td>
	<td><?php echo "$current_designation"?></td>
	<td><?php echo "$work_experience"?></td>
	<td><?php echo "$salary"?></td>
	<td><?php echo "$username"?></td>
	<td><?php echo "$password"?></td>
	<td><?php echo "<a href='deleteemp.php?id=".$id."
	'><input type='button' name='delete' value='deleteemp'></a>"?></td>
</tr>
<?php
	}
?></table></p>
</div>
	
<div id="menu5" class="container tab-pane fade"><br>
<p>
<table class="table table-primary table-striped">
	<tr>
	    <th>name</th>
		<th>email</th>
		<th>gender</th>
		<th>doj</th>
		<th>qualification</th>
		<th>current designation</th>
		<th>work experience</th>
		<th>salary</th>
		<th>username</th>
		<th>password</th>
		<th></th>
	</tr>
<?php
$sql="select * from employee where qualification='mtech'";
$result=mysqli_query($con,$sql);
			
while($row=mysqli_fetch_array($result))
{
	$name=$row['name'];
	$email=$row['email'];
	$gender=$row['gender'];
	$doj=$row['doj'];
	$qualification=$row['qualification'];
	$current_designation=$row['current_designation'];
	$work_experience=$row['work_experience'];
	$salary=$row['salary'];
	$username=$row['username'];
	$password=$row['password'];
?>
<tr>
<td><?php echo "$name"?></td>
	<td><?php echo "$email"?></td>
	<td><?php echo "$gender"?></td>
	<td><?php echo "$doj"?></td>
	<td><?php echo "$qualification"?></td>
	<td><?php echo "$current_designation"?></td>
	<td><?php echo "$work_experience"?></td>
	<td><?php echo "$salary"?></td>
	<td><?php echo "$username"?></td>
	<td><?php echo "$password"?></td>
	<td><?php echo "<a href='deleteemp.php?id=".$id."
	'><input type='button' name='delete' value='deleteemp'></a>"?></td>
</tr>
<?php
	}
?></table></p>
</div>
	
<div id="menu6" class="container tab-pane fade"><br>
<p><table class="table table-primary table-striped">
	<tr>
	    <th>name</th>
		<th>email</th>
		<th>gender</th>
		<th>doj</th>
		<th>qualification</th>
		<th>current designation</th>
		<th>work experience</th>
		<th>salary</th>
		<th>username</th>
		<th>password</th>
		<th></th>
	</tr>
<?php
$sql="select * from employee where qualification='mba'";
$result=mysqli_query($con,$sql);
			
while($row=mysqli_fetch_array($result))
{
	$name=$row['name'];
	$email=$row['email'];
	$gender=$row['gender'];
	$doj=$row['doj'];
	$qualification=$row['qualification'];
	$current_designation=$row['current_designation'];
	$work_experience=$row['work_experience'];
	$salary=$row['salary'];
	$username=$row['username'];
	$password=$row['password'];
?>
<tr>
<td><?php echo "$name"?></td>
	<td><?php echo "$email"?></td>
	<td><?php echo "$gender"?></td>
	<td><?php echo "$doj"?></td>
	<td><?php echo "$qualification"?></td>
	<td><?php echo "$current_designation"?></td>
	<td><?php echo "$work_experience"?></td>
	<td><?php echo "$salary"?></td>
	<td><?php echo "$username"?></td>
	<td><?php echo "$password"?></td>
	<td><?php echo "<a href='deleteemp.php?id=".$id."
	'><input type='button' name='delete' value='deleteemp'></a>"?></td>
</tr>
<?php
	}
?></table></p>
</div>
</div>
</div>
<!------------------------------------------------------------------------->
</body>
</html>