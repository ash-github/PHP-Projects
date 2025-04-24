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
	<title></title>
</head>
<body>
	<h1 style="color:blue;text-align: center;">Trainer View</h1>
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
<div class="container mt-3">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" href="#all">All</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu1">UI Developer</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu2">PHP Developer</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu3">JAVA Developer</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu4">Wordpress Developer</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu5">Digital Marketer</a>
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
		<th>date</th>
		<th>qualification</th>
		<th>current designation</th>
		<th>work experience</th>
		<th>username</th>
		<th>password</th>
		<th></th>
	</tr>
<?php
$sql="select * from trainer";
$result=mysqli_query($con,$sql);
			
while($row=mysqli_fetch_array($result))
{
	$name=$row['name'];
	$email=$row['email'];
	$gender=$row['gender'];
	$date=$row['date'];
	$qualification=$row['qualification'];
	$current_designation=$row['current_designation'];
	$experience=$row['experience'];
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
	<td><?php echo "$date"?></td>
	<td><?php echo "$qualification"?></td>
	<td><?php echo "$current_designation"?></td>
	<td><?php echo "$experience"?></td>
	<td><?php echo "$username"?></td>
	<td><?php echo "$password"?></td>
	<td><?php echo "<a href='deletetrain.php?id=".$id."
	'><input type='button' name='delete' value='deletetrain'></a>"?></td>
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
		<th>date</th>
		<th>qualification</th>
		<th>current designation</th>
		<th>work experience</th>
		<th>username</th>
		<th>password</th>
		<th></th>
	</tr>
<?php
$sql="select * from trainer where current_designation='ui'";
$result=mysqli_query($con,$sql);
			
while($row=mysqli_fetch_array($result))
{
	$name=$row['name'];
	$email=$row['email'];
	$gender=$row['gender'];
	$date=$row['date'];
	$qualification=$row['qualification'];
	$current_designation=$row['current_designation'];
	$experience=$row['experience'];
	$username=$row['username'];
	$password=$row['password'];
?>
<tr>
    <td><?php echo "$name"?></td>
	<td><?php echo "$email"?></td>
	<td><?php echo "$gender"?></td>
	<td><?php echo "$date"?></td>
	<td><?php echo "$qualification"?></td>
	<td><?php echo "$current_designation"?></td>
	<td><?php echo "$experience"?></td>
	<td><?php echo "$username"?></td>
	<td><?php echo "$password"?></td>
	<td><?php echo "<a href='deletetrain.php?id=".$id."
	'><input type='button' name='delete' value='deletetrain'></a>"?></td>
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
		<th>date</th>
		<th>qualification</th>
		<th>current designation</th>
		<th>work experience</th>
		<th>username</th>
		<th>password</th>
		<th></th>
	</tr>
<?php
$sql="select * from trainer where current_designation='php'";
$result=mysqli_query($con,$sql);
			
while($row=mysqli_fetch_array($result))
{
	$name=$row['name'];
	$email=$row['email'];
	$gender=$row['gender'];
	$date=$row['date'];
	$qualification=$row['qualification'];
	$current_designation=$row['current_designation'];
	$experience=$row['experience'];
	$username=$row['username'];
	$password=$row['password'];
?>
<tr>
    <td><?php echo "$name"?></td>
	<td><?php echo "$email"?></td>
	<td><?php echo "$gender"?></td>
	<td><?php echo "$date"?></td>
	<td><?php echo "$qualification"?></td>
	<td><?php echo "$current_designation"?></td>
	<td><?php echo "$experience"?></td>
	<td><?php echo "$username"?></td>
	<td><?php echo "$password"?></td>
	<td><?php echo "<a href='deletetrain.php?id=".$id."
	'><input type='button' name='delete' value='deletetrain'></a>"?></td>
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
		<th>date</th>
		<th>qualification</th>
		<th>current designation</th>
		<th>work experience</th>
		<th>username</th>
		<th>password</th>
		<th></th>
	</tr>
<?php
$sql="select * from trainer where current_designation='wordpress'";
$result=mysqli_query($con,$sql);
			
while($row=mysqli_fetch_array($result))
{
	$name=$row['name'];
	$email=$row['email'];
	$gender=$row['gender'];
	$date=$row['date'];
	$qualification=$row['qualification'];
	$current_designation=$row['current_designation'];
	$experience=$row['experience'];
	$username=$row['username'];
	$password=$row['password'];
?>
<tr>
    <td><?php echo "$name"?></td>
	<td><?php echo "$email"?></td>
	<td><?php echo "$gender"?></td>
	<td><?php echo "$date"?></td>
	<td><?php echo "$qualification"?></td>
	<td><?php echo "$current_designation"?></td>
	<td><?php echo "$experience"?></td>
	<td><?php echo "$username"?></td>
	<td><?php echo "$password"?></td>
	<td><?php echo "<a href='deletetrain.php?id=".$id."
	'><input type='button' name='delete' value='deletetrain'></a>"?></td>
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
		<th>date</th>
		<th>qualification</th>
		<th>current designation</th>
		<th>work experience</th>
		<th>username</th>
		<th>password</th>
		<th></th>
	</tr>
<?php
$sql="select * from trainer where current_designation='java'";
$result=mysqli_query($con,$sql);
			
while($row=mysqli_fetch_array($result))
{
	$name=$row['name'];
	$email=$row['email'];
	$gender=$row['gender'];
	$date=$row['date'];
	$qualification=$row['qualification'];
	$current_designation=$row['current_designation'];
	$experience=$row['experience'];
	$username=$row['username'];
	$password=$row['password'];
?>
<tr>
    <td><?php echo "$name"?></td>
	<td><?php echo "$email"?></td>
	<td><?php echo "$gender"?></td>
	<td><?php echo "$date"?></td>
	<td><?php echo "$qualification"?></td>
	<td><?php echo "$current_designation"?></td>
	<td><?php echo "$experience"?></td>
	<td><?php echo "$username"?></td>
	<td><?php echo "$password"?></td>
	<td><?php echo "<a href='deletetrain.php?id=".$id."
	'><input type='button' name='delete' value='deletetrain'></a>"?></td>
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
		<th>date</th>
		<th>qualification</th>
		<th>current designation</th>
		<th>work experience</th>
		<th>username</th>
		<th>password</th>
		<th></th>
	</tr>
<?php
$sql="select * from trainer where current_designation='dm'";
$result=mysqli_query($con,$sql);
			
while($row=mysqli_fetch_array($result))
{
	$name=$row['name'];
	$email=$row['email'];
	$gender=$row['gender'];
	$date=$row['date'];
	$qualification=$row['qualification'];
	$current_designation=$row['current_designation'];
	$experience=$row['experience'];
	$username=$row['username'];
	$password=$row['password'];
?>
<tr>
    <td><?php echo "$name"?></td>
	<td><?php echo "$email"?></td>
	<td><?php echo "$gender"?></td>
	<td><?php echo "$date"?></td>
	<td><?php echo "$qualification"?></td>
	<td><?php echo "$current_designation"?></td>
	<td><?php echo "$experience"?></td>
	<td><?php echo "$username"?></td>
	<td><?php echo "$password"?></td>
	<td><?php echo "<a href='deletetrain.php?id=".$id."
	'><input type='button' name='delete' value='deletetrain'></a>"?></td>
</tr>
<?php
	}
?></table></p>
</div>
</div>
</div>
</body>
</html>