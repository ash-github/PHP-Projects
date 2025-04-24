<?php
include('connection.php');
	session_start();
	if(empty($_SESSION['id']))
	{
		header('location:employee_login.php');
	}
	$sid=$_SESSION['id'];
	$sql="select *from employee where id='$sid'";
	$result=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result))
    {
        ?>
        <form method="POST">
            <input type="text" name="name" value="<?php echo $row['name']?>"><br>
            <input type="text" name="email" value="<?php echo $row['email']?>"><br>
            <input type="text" name="gender" value="<?php echo $row['gender']?>"><br>
            <input type="text" name="doj" value="<?php echo $row['doj']?>"><br>
            <input type="text" name="qualification" value="<?php echo $row['qualification']?>"><br>
            <input type="text" name="current_designation" value="<?php echo $row['current_designation']?>"><br>
            <input type="text" name="work_experience" value="<?php echo $row['work_experience']?>"><br>
            <input type="text" name="salary" value="<?php echo $row['salary']?>"><br>
            <input type="text" name="username" value="<?php echo $row['username']?>"><br>
            <input type="text" name="password" value="<?php echo $row['password']?>"><br>
            <input type="submit" name="update" value="update">
        </form>
        <?php
    }
        if(isset($_POST['update']))
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
            
            $sql="update employee set name='$n',email='$e',doj='$d',gender='$g',qualification='$q',current_designation='$c',salary='$s',username='$u',password='$p'";

            $result=mysqli_query($con,$sql);
            if($result==TRUE)
            {
                header('location:employee_dash.php');
            }
            else{
                echo "<script>alert('date not updated');</script>";
            }
        }
    ?>
        	<a href="logout.php"><input type="button" name="logout" value="logout"></a>
