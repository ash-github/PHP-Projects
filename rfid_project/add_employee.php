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
b

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
    @import url('httpss://fonts.googleapis.com/css?family=Roboto');

    

    .signup-form {
      font-family: "Roboto", sans-serif;
      width: 650px;
      margin: 100px auto;
      background: linear-gradient(to right, #ffffff 0%, #fafafa 50%, #ffffff 99%);
      border-radius: 10px;
      padding: 0 20px 10px 20px;
    }

    .form-header {
      background-color: #EFF0F1;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .form-header h1 {
      font-size: 30px;
      text-align: center;
      color: #666;
      padding: 20px 0;
      border-bottom: 1px solid #cccccc;
    }

    /*---------------------------------------*/
    /* Form Body */
    /*---------------------------------------*/
    .form-body {
      padding: 10px 40px;
      color: #666;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-body .label-title {
      color: rgb(1, 79, 249);
      font-size: 17px;
      font-weight: bold;
    }

    .form-body .form-input {
      font-size: 17px;
      box-sizing: border-box;
      width: 100%;
      height: 34px;
      padding-left: 10px;
      padding-right: 10px;
      color: #333333;
      text-align: left;
      border: 1px solid #d6d6d6;
      border-radius: 4px;
      background: white;
      outline: none;
    }



    .horizontal-group .left {
      float: left;
      width: 49%;
    }

    .horizontal-group .right {
      float: right;
      width: 49%;
    }

    input[type="file"] {
      outline: none;
      cursor: pointer;
      font-size: 17px;
    }

    #range-label {
      width: 15%;
      padding: 5px;
      color: white;
      border-radius: 5px;
      font-size: 17px;
      position: relative;
      top: -8px;
    }


    ::-webkit-input-placeholder {
      color: #d9d9d9;
    }

    /*---------------------------------------*/
    /* Form Footer */
    /*---------------------------------------*/
    .form-footer {
      clear: both;
    }

    /*---------------------------------------*/
    /* Form Footer */
    /*---------------------------------------*/
    .signup-form .form-footer {
      background-color: #EFF0F1;
      border-bottom-left-radius: 10px;
      border-bottom-right-radius: 10px;
      padding: 10px 40px;
      text-align: right;
      border-top: 1px solid #cccccc;
    }

    .form-footer span {
      float: left;
      margin-top: 10px;
      color: #999;
      font-style: italic;
      font-weight: thin;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: rgb(1, 79, 249);
      font-size: 17px;
      border: none;
      border-radius: 5px;
      color: #bcf5e7;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #0629f3;
      color: white;
    }

    /* ++++++++++++++++++++++++++++++ SECTION END ++++++++++++++++++++++++++++++ */
  </style>
</head>

<body background="image/1_bg.webp" >
  <!---------------------------------------------------header start----------------------------------->
  <header>
    <div class="container">
      <div class="head-logo">
        <a href="index.php"><img src="image/logo.webp" width="100%"></a>
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
  <!---++++++++++++++++++++++++++++++ SECTION START ++++++++++++++++++++++++++++++-->

  <form class="signup-form" method="POST" enctype="multipart/form-data" data-aos="zoom-in-down">

    <!-- form header -->
    <div class="form-header">
      <h1>Add Employee</h1>
    </div>

    <!-- form body -->
    <div class="form-body">
      <!-- Firstname and Lastname -->
      <div class="horizontal-group">
        <div class="form-group left">
          <label for="employee id" class="label-title">Employee Id *</label>
          <input type="text"  name="id" id="firstname" class="form-input" placeholder="enter your id" required="required" />
        </div>
        <div class="form-group right">
          <label for="name" class="label-title">Employee Name</label>
          <input type="text" name="name" id="lastname" class="form-input" placeholder="enter your name" />
        </div>
      </div>
    </div>

    <!-- form footer -->
    <div class="form-footer">

    </div>

    <!-- Gender -->
    <div class="form-group">
      <label class="label-title">Gender:</label>
      <div class="input-group">
        <label for="male">
          <input type="radio" name="gender" value="male" id="male"> Male</label>
        <label for="female">
          <input type="radio" name="gender" value="female" id="female"> Female</label>
      </div>
    </div>


    <!-- dropdown -->
    <div class="horizontal-group">
      <div class="form-group left">
        <label class="label-title">Select Department</label>
        <select class="form-input" name="depart">
          <option value="---select department---" name="depart" selected>Select Department</option>
          <?php
          $sql="select depart from department";
          $result=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_array($result))
          {
            echo "<option value='".$row['depart']."'>".$row['depart']."</option>";
          }
          ?>
        </select>
      </div>

      <div class="form-group right">
        <label class="label-title">Qualification</label>
        <select class="form-input" name="qualification">
          <option value="be" name="qualification">BE</option>
          <option value="mca" name="qualification">MCA</option>
          <option value="mtech" name="qualification">MTECH</option>
          <option value="mba" name="qualification">MBA</option>
        </select>
      </div>
    </div>


    <!-- Address -->
    <div class="form-group">
      <label for="choose-file" class="label-title">Address *</label>
      <textarea class="form-input" rows="1" cols="50" name="address"></textarea>
    </div>

     <!-- A -->
     <div class="form-group">
      <label for="choose-file" class="label-title">Date of birth *</label>
      <input type="date" name="dob">
      
    </div>

    <!-- Email  and phone no-->
    <div class="horizontal-group">
      <div class="form-group left">
        <label for="email" class="label-title">Email *</label>
        <input type="email" name="email" class="form-input" placeholder="enter your username" required="required">
      </div>

      <div class="form-group right">
        <label for="number" class="label-title">Employee Number *</label>
        <input type="text" name="mobile_number" class="form-input" placeholder="enter your phone number">
      </div>
    </div>

    <!-- Password and confirm password -->
    <div class="horizontal-group">
      <div class="form-group left">
        <label for="username" class="label-title">Username *</label>
        <input type="text" name="user" class="form-input" placeholder="enter your username" required="required">
      </div>

      <div class="form-group right">
        <label for="password" class="label-title">Password *</label>
        <input type="password" name="pass" id="password" class="form-input" placeholder="enter your password" required="required">
      </div>
    </div>

    <!-- upload-->
    <div class="form-group left">
      <label for="choose-file" class="label-title">Upload Profile Picture</label>
      <input type="file" name="image" accept="image/" id="choose-file" size="80">
    </div>
    </div>

    <!-- button -->
    <div class="form-footer">
      <span>* required</span>
      <input type="submit" class="btn" name="save"></input>
    </div>
  </form>
  <!-- Script for range input label -->
  <script>
    var rangeLabel = document.getElementById("range-label");
    var experience = document.getElementById("experience");
    function change() {
      rangeLabel.innerText = experience.value + "K";
    }
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();

  </script>
  <!--- ++++++++++++++++++++++++++++++ SECTION END ++++++++++++++++++++++++++++++------>

</body>


<?php
if(isset($_POST['save']))
{
  $i=$_POST['id'];
  $n=$_POST['name'];
  $g=$_POST['gender'];
  $d=$_POST['depart'];
  $q=$_POST['qualification'];
  $a=$_POST['address'];
  $m=$_POST['mobile_number'];
  $db=$_POST['dob'];
  $e=$_POST['email'];
  $u=$_POST['user'];
  $p=$_POST['pass'];
  $file=$_FILES['image']['name'];
  $location="image/";

  if (move_uploaded_file($_FILES['image']['tmp_name'], $location.$file))
  {
    $image1=$location.$file;
  }

  $query="insert into employee(eid,name,gender,department,qualification,address,contact,dob,email,username,password,image)values('$i','$n','$g','$d','$q','$a','$m','$db','$e','$u','$p','$file')";



  $result=mysqli_query($conn,$query);
  if($result)
  {
    echo "<script>data inserted</script>";
  }
}


?>

</html>