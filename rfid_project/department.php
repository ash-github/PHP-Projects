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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="icon" href="image/logo.webp">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css" />
    <link rel="stylesheet" href="/vendors/formvalidation/dist/css/formValidation.min.css" />

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

        /* ++++++++++++++++++++++++++++++ NEW HEADER END ++++++++++++++++++++++++++++++ */
        /* ++++++++++++++++++++++++++++++ SECTION START ++++++++++++++++++++++++++++++ */

        .section1 {
            margin-top: 100px;
            box-shadow: 0px 18px 36px 0.8px rgba(26, 40, 245, 0.3);
            padding: 60px;
            background-color: white;
            border-radius: 5px;
        }

        .head-form1 {
            text-align: center;
            font-weight: bolder;
            font-family: 'Open Sans', sans-serif;
            border-bottom: 1px solid gray;
            color: white;
        }

        h1 {
            font-size: 28px;
        }

        @media screen and (max-width: 526px) {
            .section1 {
                margin-top: 50px;

            }
        }

        /* ++++++++++++++++++++++++++++++ SECTION END ++++++++++++++++++++++++++++++ */
    </style>
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
                    <li><a href="department.php">Add Department </a></li>
                    <li><a href="add_employee.php">Add Employee</a></li>
                    <li><a href="view_employee.php">View Employee</a></li>
                    <li><a href="view_earrival_details.php">View Employee Arrival Details</a></li>
                    <li><a href="view_leave_application.php">View Leave Application</a></li>
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
    <div class="head-form1">
        <h1>ENTER DEPARTMENT DETAILS</h1>
    </div>
    <!---++++++++++++++++++++++++++++++ SECTION START ++++++++++++++++++++++++++++++-->
    <div class="section1 container" data-aos="fade-up">
        <form id="demoForm" method="POST">
            <div class="cf mb2">
                <div class="fl w-100">
                    <div class="fl w-25 pa2"><b>Department</b></div>
                    <div class="fl w-50">
                        <input type="text" class="input-reset ba b--black-20 pa2 mb2 db w-100"
                            placeholder="Enter department" name="depart"/>
                    </div>
                </div>
            </div>

            <div class="cf mb2">
                <div class="fl w-100">
                    <div class="fl w-25 pa2"></div>
                    <div class="fl w-50">
                        <button type="submit" class="ba b--black-20 bg-blue white ph3 pv2 br2" name="save">Add</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>
    <script src="/vendors/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="/vendors/formvalidation/dist/js/plugins/Tachyons.min.js"></script>
    <script src="/vendors/formvalidation/dist/js/plugins/StartEndDate.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


    <!--- ++++++++++++++++++++++++++++++ SECTION END ++++++++++++++++++++++++++++++------>

</body>
<?php
if(isset($_POST['save']))
{
  $d=$_POST['depart'];

  $query="insert into department(depart)values('$d')";

  $result=mysqli_query($conn,$query);
  if ($result) 
  {
    echo "<script>data inserted</script>";
    }
}
?>
</html>