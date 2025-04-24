<?php
	session_start();
	include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="image/logo.webp">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');

        * {
            padding: 0px;
            margin: 0px;
        }

        .screen-container {
            margin: 0px;
        }

        a {
            color: white;
        }

        /* ++++++++++++++++++++++++++++++ NEW HEADER ++++++++++++++++++++++++++++++ */

        header {
            background-color: #000;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 8;
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

        /* ++++++++++++++++++++++++++++++ NEW HEADER END ++++++++++++++++++++++++++++++ */

        /* ++++++++++++++++++++++++++++++ SECTION START ++++++++++++++++++++++++++++++ */
        .login-dark {
            height: 1000px;
            background-size: cover;
            position: relative;
            margin-bottom: 70px;
        }

        .login-dark form {
            max-width: 420px;
            width: 90%;
            background-color: #1e2833;
            padding: 60px;
            border-radius: 4px;
            transform: translate(-50%, -50%);
            position: absolute;
            top: 50%;
            left: 50%;
            color: #fff;
            box-shadow: 3px 3px 4px rgba(0, 0, 0, 0.2);
        }

        .login-dark .illustration {
            text-align: center;
            padding: 15px 0 20px;
            font-size: 100px;
            color: #2980ef;
        }

        .login-dark form .form-control {
            background: none;
            border: none;
            border-bottom: 1px solid #434a52;
            border-radius: 0;
            box-shadow: none;
            outline: none;
            color: inherit;
        }

        .login-dark form .btn-primary {
            background: #214a80;
            border: none;
            border-radius: 4px;
            padding: 11px;
            box-shadow: none;
            margin-top: 26px;
            text-shadow: none;
            outline: none;
        }

        .login-dark form .btn-primary:hover,
        .login-dark form .btn-primary:active {
            background: #214a80;
            outline: none;
        }

        .login-dark form .forgot {
            display: block;
            text-align: center;
            font-size: 12px;
            color: #6f7a85;
            opacity: 0.9;
            text-decoration: none;
        }

        .login-dark form .forgot:hover,
        .login-dark form .forgot:active {
            opacity: 1;
            text-decoration: none;
        }

        .login-dark form .btn-primary:active {
            transform: translateY(1px);
        }

        .head-form {
            text-align: center;
            margin-top: 100px;
            font-family: 'Open Sans', sans-serif;
            color: white;
        }

        /* ++++++++++++++++++++++++++++++ SECTION END ++++++++++++++++++++++++++++++ */
        /* #######################-Footer start-############################## */
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');

        * {
            padding: 0;
            margin: 0;
        }

        .icons {
            padding: 5px;
        }

        footer {
            background-color: black;
            font-family: 'Open Sans', sans-serif;
        }

        footer .container {
            width: 100%;
            max-width: 1680px;
            padding: 2rem 0;
            margin: 0 auto;
        }

        footer .container .row-8 {
            display: flex;
            justify-content: space-evenly;
        }

        footer .container .row-8 .col-md-8 ul li {
            list-style: none;
            color: #fff;
        }

        footer .container .row-8 .col-md-8 ul li:first-child {
            font-size: 24px;
            line-height: 31px;
            padding-bottom: 1rem;
            font-weight: bold;
        }

        footer .container .row-8 .col-md-8 ul li a {
            text-decoration: none;
            font-size: 16px;
            line-height: 21px;
            color: #fff;
        }

        .logo-footer {
            width: 150px;
            border-radius: 100px;
        }

        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 5px;
            right: 5px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

        .last {
            border-top: 1px solid rgba(300, 409, 256, 0.4);
            text-align: center;
            font-family: 'Open Sans', sans-serif;
            padding: 5px;
            font-weight: bold;
            color: white;
        }


        @media screen and (max-width: 767px) {
            footer .container .row-8 {
                display: block;
                padding: 0 2rem;
                max-width: 300px;
                margin: 0 auto;
            }

            footer .container .row-8 .col-md-8 {
                padding-bottom: 2rem;
            }

            .logo-footer {
                width: 100px;
            }
        }

        /* #######################-Footer end-############################## */
    </style>
        <script type="text/javascript">
		function message()
		{
			alert("Redirect to Employee dashboard");
		}
	</script>
</head>

<body background="image/1_bg.webp">
    <!---------------------------------------------------header start----------------------------------->
    <header>
        <div class="container">
            <div class="head-logo">
                <a href="index.php"> <img src="image/logo.webp" width="100%"></a>
            </div>
            <div class="menubar" id="menubar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">About Us</a></li>
                    <li><a href="eid.php">Employee Id</a></li>
                    <li><a href="elogin.php">Employee Login</a></li>
                    <li><a href="alogin.php">Admin Login</a></li>

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
    <div class="head-form">
        <h1>Employee Login</h1>
    </div>
    <!---------------------------------------------------section start----------------------------------->
    <div class="login-dark" style="height: 695px;" data-aos="zoom-in-up">
        <form method="POST">
            <h2 class="sr-only">Employee Login</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="user" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="password" name="pass" placeholder="Password">
            </div>
            <div class="form-group"><input  class="btn btn-primary btn-block" type="submit" onclick="message()" name="login" value="Login"></div>
            <a class="forgot" href="#">Forgot your email or password?</a>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>
    <!---------------------------------------------------section end----------------------------------->
    <!--#######################-Footer start-################################-->
    <footer>
        <div class="container">
            <div class="row-8">
                <div class="col-md-8">
                    <ul>
                        <li>Quick Links</li>
                        <li><a href="index.php"><i class="fa fa-arrow-right icons" aria-hidden="true"></i>Home</a></li>
                        <li><a href="index.php"><i class="fa fa-arrow-right icons" aria-hidden="true"></i>About Us</a>
                        </li>
                        <li><a href="eid.php"><i class="fa fa-arrow-right icons" aria-hidden="true"></i>Employee Id</a>
                        </li>
                        <li><a href="elogin.php"><i class="fa fa-arrow-right icons" aria-hidden="true"></i>Employee
                                Login</a></li>
                        <li><a href="alogin.php"><i class="fa fa-arrow-right icons" aria-hidden="true"></i>Admin
                                Login</a></li>

                    </ul>
                </div>
                <div class="col-md-8">
                    <ul>
                        <li>GET IN TOUCH</li>
                        <li><a href="#"><a href="#"><i class="fa fa-map-marker icons" aria-hidden="true"></i>Lower
                                    Ground Fortune Mall, Sitabuldi, Nagpur</a></li>
                        <li><a href="#"><i class="fa fa-envelope-o icons"
                                    aria-hidden="true"></i>support@pskitservices.com</a></li>
                        <li><a href="#"><i class="fa fa-phone icons" aria-hidden="true"></i>09422123343</a></li>
                        <li>
                            <a href="#"><i class="fa fa-facebook-official icons" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram icons" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter-square icons" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-pinterest-square icons" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <ul>
                        <li>Quick Links</li>
                        <li><a href="index.php"><i class="fa fa-arrow-right icons" aria-hidden="true"></i>Home</a></li>
                        <li><a href="#open"><i class="fa fa-arrow-right icons" aria-hidden="true"></i>About Us</a></li>
                        <li><a href="eid.php"><i class="fa fa-arrow-right icons" aria-hidden="true"></i>Employee Id</a>
                        </li>
                        <li><a href="elogin.php"><i class="fa fa-arrow-right icons" aria-hidden="true"></i>Employee
                                Login</a></li>
                        <li><a href="alogin.php"><i class="fa fa-arrow-right icons" aria-hidden="true"></i>Admin Login</a>
                        </li><br>
                        <li><a href="#"><img src="image/logo.webp" class="logo-footer "></a></li>
                    </ul>
                </div>
            </div>
            <a href="https://api.whatsapp.com/send?phone=7798421296" class="float" target="_blank">
                <i class="fa fa-whatsapp my-float"></i>
            </a>
        </div>
        <div class="last">© Design by PSK Technologies Pvt. Ltd. IT Company.</div>
    </footer>
    <!--#######################-Footer end-################################-->

    <?php
	if(isset($_POST['login']))
	{
		$u=$_POST['user'];
		$p=$_POST['pass']; 
		if(empty($u) || empty($p))
		{
			echo "<script>alert('username or password is empty')</script>";
		}


		else
		{
            $sql="select * from employee where username='$u' and password='$p'";
			$result = mysqli_query($conn,$sql);
			if($row=mysqli_fetch_array($result))
			{
				$_SESSION['eid']=$row['eid'];
				$sid=$_SESSION['eid'];
			    echo '<script type="text/javascript">
        location.replace("eview.php");
        </script>';
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