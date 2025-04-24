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
	<h1 style="color:blue;text-align: center;">Student View</h1>
<center><a href="index.php"><input type="button" value="logout" name="logout"></a></center><br><br>

<form method="post">
	<table align="center" cellspacing="40" cellpadding="10">
		<tr>
			<th><a href="studview.php"><input type="button" name="stud" value="Student View"></a></th>
			<th><a href="trainview.php"><input type="button" name="train" value="Trainer View"></a></th>
			<th><a href="empview.php"><input type="button" name="emp" value="Employee View"></a></th>
		</tr>
	</table><br><br>
</form>
<div class="container mt-3">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" href="#all">All</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu1">C/C++ Programming</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu2">PHP/UI</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu3">DM/Java</a>
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
		<th>course</th>
		<th>qualification</th>
		<th>username</th>
		<th>password</th>
		<th></th>
	</tr>
<?php
$sql="select * from student";
$result=mysqli_query($con,$sql);
			
while($row=mysqli_fetch_array($result))
{
	$name=$row['name'];
	$email=$row['email'];
	$gender=$row['gender'];
	$course=$row['course'];
	$qualification=$row['qualification'];
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
	<td><?php echo "$course"?></td>
	<td><?php echo "$qualification"?></td>
	<td><?php echo "$username"?></td>
	<td><?php echo "$password"?></td>
	<td><?php echo "<a href='deletestud.php?id=".$id."
	'><input type='button' name='delete' value='deletestud'></a>"?></td>
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
		<th>course</th>
		<th>qualification</th>
		<th>username</th>
		<th>password</th>
		<th></th>
	</tr>
<?php
$sql="select * from student where course='c/c++'";
$result=mysqli_query($con,$sql);
			
while($row=mysqli_fetch_array($result))
{
	$name=$row['name'];
	$email=$row['email'];
	$gender=$row['gender'];
	$course=$row['course'];
	$qualification=$row['qualification'];
	$username=$row['username'];
	$password=$row['password'];
?>
<tr>
	<td><?php echo "$name"?></td>
	<td><?php echo "$email"?></td>
	<td><?php echo "$gender"?></td>
	<td><?php echo "$course"?></td>
	<td><?php echo "$qualification"?></td>
	<td><?php echo "$username"?></td>
	<td><?php echo "$password"?></td>
	<td><?php echo "<a href='deletestud.php?id=".$id."
	'><input type='button' name='delete' value='deletestud'></a>"?></td>
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
		<th>course</th>
		<th>qualification</th>
		<th>username</th>
		<th>password</th>
		<th></th>
	</tr>
<?php
$sql="select * from student where course='php/ui'";
$result=mysqli_query($con,$sql);
			
while($row=mysqli_fetch_array($result))
{
	$name=$row['name'];
	$email=$row['email'];
	$gender=$row['gender'];
	$course=$row['course'];
	$qualification=$row['qualification'];
	$username=$row['username'];
	$password=$row['password'];

?>
<tr>
	<td><?php echo "$name"?></td>
	<td><?php echo "$email"?></td>
	<td><?php echo "$gender"?></td>
	<td><?php echo "$course"?></td>
	<td><?php echo "$qualification"?></td>
	<td><?php echo "$username"?></td>
	<td><?php echo "$password"?></td>
	<td><?php echo "<a href='deletestud.php?id=".$id."
	'><input type='button' name='delete' value='deletestud'></a>"?></td>
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
		<th>course</th>
		<th>qualification</th>
		<th>username</th>
		<th>password</th>
		<th></th>
	</tr>
<?php
$sql="select * from student where course='dm/java'";
$result=mysqli_query($con,$sql);
			
while($row=mysqli_fetch_array($result))
{
	$name=$row['name'];
	$email=$row['email'];
	$gender=$row['gender'];
	$course=$row['course'];
	$qualification=$row['qualification'];
	$username=$row['username'];
	$password=$row['password'];

?>
<tr>
	<td><?php echo "$name"?></td>
	<td><?php echo "$email"?></td>
	<td><?php echo "$gender"?></td>
	<td><?php echo "$course"?></td>
	<td><?php echo "$qualification"?></td>
	<td><?php echo "$username"?></td>
	<td><?php echo "$password"?></td>
	<td><?php echo "<a href='deletestud.php?id=".$id."
	'><input type='button' name='delete' value='deletestud'></a>"?></td>
</tr>
<?php
	}
?>
</div>
</div>
</div>
</body>
</html>