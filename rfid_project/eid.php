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
.container-php{
    text-align:center;
    color:black;
    line-height:30px;
    border:1px solid #d5d5d5;
    font-weight:bold;
    background-color:#d5d5d5;
}
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
        /* BTW alt-shift will pop a color picker 
  example color: followed  by alt shift will pop it
*/
        /*
Hide the label if placeholder is supported
*/


        #registration-form {
            font-family: 'Open Sans Condensed', sans-serif;
            width: 400px;
            min-width: 250px;
            margin: 20px auto;
            position: relative;
            margin-top: 100px;
            margin-bottom: 290px;
        }

        #registration-form .fieldset {
            background-color: #d5d5d5;

            border-radius: 3px;

        }

        #registration-form legend {
            text-align: center;
            background: #364351;
            width: 100%;
            padding: 30px 0;
            border-radius: 3px 3px 0 0;
            color: white;
            font-size: 2em;
        }

        .fieldset form {
            border: 1px solid #2f2f2f;
            margin: 0 auto;
            display: block;
            width: 100%;
            padding: 30px 20px;
            box-sizing: border-box;
            border-radius: 0 0 3px 3px;
        }

        .placeholder #registration-form label {
            display: none;
        }

        .no-placeholder #registration-form label {
            margin-left: 5px;
            position: relative;
            display: block;
            color: grey;
            text-shadow: 0 1px white;
            font-weight: bold;
        }

        /* all */
        ::-webkit-input-placeholder {
            text-shadow: 1px 1px 1px white;
            font-weight: bold;
        }

        ::-moz-placeholder {
            text-shadow: 0 1px 1px white;
            font-weight: bold;
        }

        /* firefox 19+ */
        :-ms-input-placeholder {
            text-shadow: 0 1px 1px white;
            font-weight: bold;
        }

        /* ie */
        #registration-form input[type=text] {
            padding: 15px 20px;
            border-radius: 1px;
            margin: 5px auto;
            background-color: #f7f7f7;
            border: 1px solid silver;

            -webkit-box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.2);
            box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.2), 0 1px rgba(255, 255, 255, .8);
            width: 100%;

            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: background-color .5s ease;
            -moz-transition: background-color .5s ease;
            -o-transition: background-color .5s ease;
            -ms-transition: background-color .5s ease;
            transition: background-color .5s ease;
        }

        .no-placeholder #registration-form input[type=text] {
            padding: 10px 20px;
        }

        #registration-form input[type=text]:active,
        .placeholder #registration-form input[type=text]:focus {
            outline: none;
            border-color: silver;
            background-color: white;
        }

        #registration-form input[type=submit] {
            font-family: 'Open Sans Condensed', sans-serif;
            text-transform: uppercase;
            outline: none;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            box-sizing: border-box;
            width: 100%;
            background-color: #5C8CA7;
            padding: 10px;
            color: white;
            border: 1px solid #3498db;
            border-radius: 3px;
            font-size: 1.5em;
            font-weight: bold;
            margin-top: 5px;
            cursor: pointer;
            position: relative;
            top: 0;
        }

        #registration-form input[type=submit]:hover {
            background-color: #2980b9;
        }

        #registration-form input[type=submit]:active {
            background: #5C8CA7;
        }


        .parsley-error-list {
            background-color: #C34343;
            padding: 5px 11px;
            margin: 0;
            list-style: none;
            border-radius: 0 0 3px 3px;
            margin-top: -5px;
            margin-bottom: 5px;
            color: white;
            border: 1px solid #870d0d;
            border-top: none;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            position: relative;
            top: -1px;
            text-shadow: 0px 1px 1px #460909;
            font-weight: 700;
            font-size: 12px;
        }

        .parsley-error {
            border-color: #870d0d !important;
            border-bottom: none;
        }

        #registration-form select {
            width: 100%;
            padding: 5px;
        }

        ::-moz-focus-inner {
            border: 0;
        }

        .avtar-1 {
            border-radius: 100%;
            max-width: 200px;
        }

        table{
            width:100%;
        }
        tr{
            width:100%;
        }
        td{
            padding:10px;
            font-size:20px;
        }
        .th{
            color:white;
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

    <!---------------------------------------------------section start----------------------------------->
    <div id="registration-form" data-aos="zoom-in-up">
        <div class='fieldset'>
            <legend><img src="image/1.webp" class="avtar-1"></legend>
            <form  method="POST" data-validate="parsley">
                <div class='row'>
                    <label for='firstname'>Input</label>
                    <input type="text" placeholder="input" name='id' id='firstname' data-required="true"
                        data-error-message="Your First Name is required">
                </div>

                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
<div class="container-php">
    <?php
if(isset($_POST['submit']))
{
  $sid=$_POST['id'];
  $check="select *from employee where eid='$sid'";
  $result=mysqli_query($conn,$check); 
  while($row=mysqli_fetch_array($result))
  {
    $name=$row['name'];
    $deg=$row['department'];
    $image1=$row['image'];
echo "<table>";
    echo "<form method='POST'><input type='hidden' value='".$sid."' name='sid'>";

    echo "<tr bgcolor='#041D42 ' class='th'><td>";
    echo "Id";
    echo "</td>";

    echo "<td>";
    echo "Name";
    echo "</td>";

    echo "<td>";
    echo "Designation";
    echo "</td>";

    echo "<td>";
    echo "Image";
    echo "</td></tr>";

    echo "<tr bgcolor='white'><td>";
    echo $row['eid'];
    echo "</td>";

    echo "<td>";
    echo $name;
    echo "</td>";

    echo "<td>";
    echo $deg;
    echo "</td>";

    echo "<td>";
    echo "<img src='image/".$image1."' width='100%' height='100%'>";
    echo "</td></tr>";

    echo "<tr><td colspan='4'>";
    echo "<input type='submit' name='confirm'>";
    echo "</td></tr>";

    echo "</form>";
    echo "</table>";
  }
}
  if(isset($_POST['confirm']))
  {
    $id=$_POST['sid'];
    $check2="select *from employee where eid='$id'";
    $result2=mysqli_query($conn,$check2); 
    while($row=mysqli_fetch_array($result2))
    {
        $name1=$row['name'];
        $contact=$row['contact'];
        $today=date('y-m-d');
        date_default_timezone_set('Asia/Kolkata');
        $intime=date("h:i:s");
        $check3="select * from arrival where eid='$id' and date='$today'";
        $result3=mysqli_query($conn,$check3);
        if(mysqli_num_rows($result3)==0)
        {
            $in="insert into arrival values('$id','$name1','$contact','$today','$intime','')";
            if(mysqli_query($conn,$in))
            {
                $_my_clicksend_username = "mailto:revti@techrevti.com";
                $_my_clicksend_key = "7BE5997A-8D54-3A9D-A72A-2FDD2805FD52";
                 //You MUST define the 'to', 'message' and 'senderid'
                $to        = $contact;
                $message   = "Employee Id: ".$id."<br>Employee Name:".$name1." arrived in Office at ".$intime." AM";
                $senderid  = "XYZ";
                     $message=urlencode($message);
                $to=urlencode($to);
                $vars="method=http&username=$_my_clicksend_username&key=$_my_clicksend_key&to=+91" . $to ."&message=" . $message . "&senderid=" . $senderid;  
                file_get_contents('https://api-mapper.clicksend.com/http/v2/send.php?method=http&username=swapnil@pskexamvilla.com&key=EA6BA3DA-34A5-AB51-0038-8DC902365360&to=+91'.$to.'&message='.$message.'&senderid=XYZ');

                echo "<script>alert('intime insert successfully');</script>";
                echo "<script>location.replace('eid.php');</script>";
            }
        }
        else
        {
            $data=mysqli_fetch_array($result3);
            $out=$data['outtime'];
            $in1=strtotime($data['intime']);
            $time1=strtotime($intime);
            $d=($time1-$in1)/60;
            if($out=='')
            {
                if($d>'1')
                {
                    $outupdate="update arrival set outtime='$intime' where eid='$id' and date='$today'";
                    if(mysqli_query($conn,$outupdate))
                    {
                        $_my_clicksend_username = "revti@techrevti.com";
$_my_clicksend_key = "7BE5997A-8D54-3A9D-A72A-2FDD2805FD52";
 //You MUST define the 'to', 'message' and 'senderid'
$to        = $contact;
$message   = "Employee Id: ".$id."<br>Employee Name:".$name1." leave in Office at ".$intime." AM";
$senderid  = "XYZ";
     $message=urlencode($message);
$to=urlencode($to);
$vars="method=http&username=$_my_clicksend_username&key=$_my_clicksend_key&to=+91" . $to ."&message=" . $message . "&senderid=" . $senderid;  
file_get_contents('https://api-mapper.clicksend.com/http/v2/send.php?method=http&username=swapnil@pskexamvilla.com&key=EA6BA3DA-34A5-AB51-0038-8DC902365360&to=+91'.$to.'&message='.$message.'&senderid=XYZ');
                    }
                }
                else
                {
                    echo "<script>alert('Kindly try again');</script>";
                    echo "<script>location.replace('eid.php');</script>";
                }
            }
        }
    }  
}
?>
</div>
    </div>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        function placeholderIsSupported() {
            test = document.createElement('input');
            return ('placeholder' in test);
        }

        $(document).ready(function () {
            placeholderSupport = placeholderIsSupported() ? 'placeholder' : 'no-placeholder';
            $('html').addClass(placeholderSupport);
        });
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


</body>
</html>