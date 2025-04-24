<?php
include('connection.php');
	session_start();
	if(empty($_SESSION['id']))
	{
		header('location:student_login.php');
	}
	$sid=$_SESSION['id'];
	$sql="select *from student where id='$sid'";
	$result=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result))
    {
        ?>
        <form method="POST">
            <input type="text" name="name" value="<?php echo $row['name']?>"><br>
            <input type="text" name="email" value="<?php echo $row['email']?>"><br>
            <input type="text" name="gender" value="<?php echo $row['gender']?>"><br>
            <input type="text" name="course" value="<?php echo $row['course']?>"><br>
            <input type="text" name="qualification" value="<?php echo $row['qualification']?>"><br>
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
            $g=$_POST['gender'];
            $c=$_POST['course'];
            $q=$_POST['qualification'];
            $u=$_POST['username'];
            $p=$_POST['password'];
            
            $sql="update student set name='$n',email='$e',gender='$g',course='$c',qualification='$q',username='$u',password='$p'";

            $result=mysqli_query($con,$sql);
            if($result==TRUE)
            {
                header('location:student_dash.php');
            }
            else{
                echo "<script>alert('date not updated');</script>";
            }
        }
    ?>
    	<a href="logout.php"><input type="button" name="logout" value="logout"></a>
