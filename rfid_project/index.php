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

        /* ++++++++++++++++++++++++++++++ NEW HEADER END ++++++++++++++++++++++++++++++ */

        /* ++++++++++++++++++++++++++++++ SECTION START ++++++++++++++++++++++++++++++ */
        .center-4 {
            padding: 10px;
            background-color: white;
            color: black;
            display: flex;
            align-items: center;
            border-radius: 10px;
            box-shadow: 0px 8px 16px 0px rgb(143, 174, 246);
        }

        .right-4 {
            width: 50%;
        }

        .left-4 {
            padding: 20px;
            width: 50%;
        }

        @media screen and (max-width: 1024px) {
            .center-4 {
                display: block;
            }

            .right-4,
            .left-4 {
                width: 100%;
            }

            .left-4 {
                padding: 0;
            }
        }

        .l4 {
            padding: 10px;
        }

        .r4 {
            line-height: 25px;
            font-family: 'Open Sans', sans-serif;
            padding: 30px 60px 120px 60px;
            text-align: justify;
            text-justify: inter-word;
            font-size: 18px;
        }

        .r4-about {
            text-align: center;
            padding: 10px;
            font-family: 'Open Sans', sans-serif;
            font-size: 28px;
            font-weight: bolder;
        }

        @media screen and (max-width:526px) {
            .r4-about {
                font-size: 24px;
                line-height: 18px;
            }

            .r4 {
                font-size: 14px;
            }

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

<body>
    <!---------------------------------------------------header start----------------------------------->
    <header>
        <div class="container">
            <div class="head-logo">
                <a href="index.php"> <img src="image/logo.webp" width="100%"></a>
            </div>
            <div class="menubar" id="menubar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#open">About Us</a></li>
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
    <div class="container-flex">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="image/home1.webp" style="width:100%;">
                </div>

                <div class="item">
                    <img src="image/home2.webp" style="width:100%;">
                </div>

                <div class="item">
                    <img src="image/home3.webp" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!---------------------------------------------------section start----------------------------------->
    <div class="row-md-4" id="open">
        <div class="center-4">
            <div class="left-4">
                <div class="l4" data-aos="fade-up-right">
                    <img src="image/about.webp" width="100%">
                </div>
            </div>
            <div class="right-4">
                <div class="r4-about">ABOUT US</div>
                <div class="r4">
                    <p>
                        PSK which means Programming & Skills & Knowledge. PSK Technologies is an IT services provider
                        and Software Company with a skilled and competent Staff. PSK Technologies Pvt. Ltd. laid its
                        foundation on 2011 in IT Training education & IT Hardware and Software services, web based
                        services, design and creative, desktop based application , SEO services, Cloud Services, Payment
                        Gateway Services, Security Systems and Digital Marketing & hosting services . PSK Technologies
                        Pvt. Ltd. stringent plus point is to keep the skilled resources available with best skills and
                        abilities employed to ride out the best results out of the organization. Being proven
                        infrastructure wise, resource wise and financially developed clients gain the advantages of
                        value-based solutions and services excellent staff and techniques.</p>
                </div>
            </div>
        </div>
    </div>
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
                        <li><a href="#open"><i class="fa fa-arrow-right icons" aria-hidden="true"></i>About Us</a></li>
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