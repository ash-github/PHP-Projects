<?php
  include('connection.php');
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="image/logo.webp">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');

        * {
            padding: 0px;
            margin: 0px;
        }

        .screen-container {
            margin: 0px;
        }

        /* ++++++++++++++++++++++++++++++ NEW HEADER ++++++++++++++++++++++++++++++ */
        header {
            background-color: #000;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 9;
        }

        header .container {
            display: flex;
            align-items: center;
            justify-content: space-around;
            width: 100%;
            max-width: 100%;
        }

        /* header .container .menubar { display: none; } */
        header .container .head-logo img {
            max-width: 100px;
            border-radius: 100px;
            padding: 4px;
        }

        header .container .menubar ul {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        header .container .menubar ul li {
            list-style: none;
        }

        header .container .menubar ul li a {
            text-decoration: none;
            color: #f2f2f2;
            padding: 6px 12px;

            font-family: 'Open Sans', sans-serif;
        }

        header .container .menu-ico {
            display: none;
        }

        header .container .menu-ico .fa {
            color: #fff;
        }

        /*######################################################## media query ###########################################################*/
        @media screen and (max-width: 976px) {
            .center-5-updown {
                grid-template-columns: repeat(2, 1fr);
            }

            header .container .menubar {
                position: absolute;
                top: 60px;
                right: 0;
                background-color: #000000eb;
                left: 0;
                display: none;
                align-items: center;
                justify-content: center;
                opacity: 0.7;
            }

            header .container .menubar ul {
                display: block;
            }

            header .container .menubar ul li {
                text-align: center;
            }

            header .container .menubar ul li {
                text-align: center;
                padding: 8px 0;
            }

            header .container .menu-ico {
                display: block;
                cursor: pointer;
            }
        }
        

        @media screen and (max-width: 526px) {
            .center-5-updown {
                grid-template-columns: repeat(1, 1fr);
            }

            .r4 {
                padding: 0 10px;
            }

        }
          
  img
  {
width: 100%;
margin:auto;
  }
  table{
    width: 100%;
    text-align: center;
    margin-top:100px;
    margin-bottom:100px;
  }
  table tr td{
    border:2px solid black;
    padding:10px;
    color:black; 
  }
  table tr th{
    border:1px solid black;
    padding:10px;
    background-color:#4CF92A;
    color:#051A01 ;
  }
  input[type='button']{
    padding:5px;
    width: 30%;
    border-radius:5px;
    color:white;
    background-color:blue;
    border:1px solid blue;
  }

        /* ++++++++++++++++++++++++++++++ NEW HEADER END ++++++++++++++++++++++++++++++ */
    </style>
</head>

<body>
    <!---------------------------------------------------header start----------------------------------->
    <header>
        <div class="container">
            <div class="head-logo">
                <a href="index.php"> <img src="image/logo.webp" width="100%"></a>
            </div>
            <div class="menubar" id="menubar">
                <ul>
                    <li><a href="eview.php">Employee Profile</a></li>
                    <li><a href="earrival.php">Employee Arrival</a></li>
                    <li><a href="leave_notification.php">Leave Notification</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <div class="menu-ico" id="menuToggle">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
        </div>
    </header>
    <script>
        let bar = document.getElementById('menuToggle')
        let menubar = document.getElementById('menubar')
        bar.addEventListener("click", function () {
            if (menubar.style.display === "none") {
                menubar.style.display = "flex";
            } else {
                menubar.style.display = "none";
            }
        })

    </script>
    <!---------------------------------------------------header end----------------------------------->
   <!---++++++++++++++++++++++++++++++ SECTION START ++++++++++++++++++++++++++++++-->
   <?php
session_start();
include('connection.php');
if(empty($_SESSION['eid']))
{
 // header('location:elogin.php');
}
$sid=$_SESSION['eid'];
$sql="select * from employee where eid='$sid'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
  $i=$row['eid'];
  $n=$row['name'];
  $g=$row['gender'];
  $d=$row['department'];
  $q=$row['qualification'];
  $a=$row['address'];
  $e=$row['contact'];
  $db=$row['dob'];
  $em=$row['email'];
  $u=$row['username'];
  $p=$row['password'];
  $im=$row['image'];
?>

<table class="container">
  <tr><td rowspan="14"><?php
echo "<img src='Image/".$im."' width='50px'>"?></td></tr>
  <tr><th>id</th><td> <?php echo ".$i."?></td></tr>
  <tr><th>name</th><td><?php echo ".$n."?></td></tr>
  <tr><th>Gender</th><td><?php echo "$g"?></td></tr>
  <tr><th>department</th><td><?php echo "$d"?></td></tr>
  <tr><th>Qualification</th><td><?php echo "$q"?></td></tr>
  <tr><th>Address</th><td><?php echo "$a"?></td></tr>
  <tr><th>contact</th><td><?php echo "$e"?></td></tr>
  <tr><th>DOB</th><td><?php echo "$db"?></td></tr>
  <tr><th>Email</th><td><?php echo "$em"?></td></tr>
  <tr><th>Username</th><td><?php echo "$u"?></td></tr>
  <tr><th>Password</th><td><?php echo "$p"?></td></tr>
  <tr><th>delete this </th><td><?php 
echo "<a href='delete.php?eid=".$i."'><input type='button' value='delete'></a>";
} ?></td></tr>
</table>
    <!--- ++++++++++++++++++++++++++++++ SECTION END ++++++++++++++++++++++++++++++------>


</body>

</html>