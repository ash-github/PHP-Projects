<Html>  
<head>   
<title>  
Sign Up Page  
</title> 
<style>
    /* all */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

:root {
  --main-blue: #71b7e6;
  --main-purple: #9b59b6;
  --main-grey: #ccc;
  --sub-grey: #d9d9d9;
}

body {
  display: flex;
  /* height: 100vh; */
  justify-content: center; /*center vertically */
  align-items: center; /* center horizontally */
  background: linear-gradient(135deg, var(--main-blue), var(--main-purple));
  padding: 10px;
}
/* container and form */
.container {
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 25px 30px;
  border-radius: 5px;
}
.container .title {
  font-size: 25px;
  font-weight: 500;
  position: relative;
}

.container .title::before {
  content: "";
  position: absolute;
  height: 3.5px;
  width: 30px;
  background: linear-gradient(135deg, var(--main-blue), var(--main-purple));
  left: 0;
  bottom: 0;
}

.container form .user__details {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
/* inside the form user details */
form .user__details .input__box {
  width: calc(100% / 2 - 20px);
  margin-bottom: 15px;
}

.user__details .input__box .details {
  font-weight: 500;
  margin-bottom: 5px;
  display: block;
}
.user__details .input__box input {
  height: 45px;
  width: 100%;
  outline: none;
  border-radius: 5px;
  border: 1px solid var(--main-grey);
  padding-left: 15px;
  font-size: 16px;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}

.user__details .input__box input:focus,
.user__details .input__box input:valid {
  border-color: var(--main-purple);
}

/* inside the form gender details */

form .gender__details .gender__title {
  font-size: 20px;
  font-weight: 500;
}

form .gender__details .category {
  display: flex;
  width: 80%;
  margin: 15px 0;
  justify-content: space-between;
}

.gender__details .category label {
  display: flex;
  align-items: center;
}

.gender__details .category .dot {
  height: 18px;
  width: 18px;
  background: var(--sub-grey);
  border-radius: 50%;
  margin: 10px;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}

#dot-1:checked ~ .category .one,
#dot-2:checked ~ .category .two,
#dot-3:checked ~ .category .three {
  border-color: var(--sub-grey);
  background: var(--main-purple);
}

form input[type="radio"] {
  display: none;
}

/* submit button */
form .button {
  height: 45px;
  margin: 45px 0;
}

form .button input {
  height: 100%;
  width: 100%;
  outline: none;
  color: #fff;
  border: none;
  font-size: 18px;
  font-weight: 500;
  border-radius: 5px;
  background: linear-gradient(135deg, var(--main-blue), var(--main-purple));
  transition: all 0.3s ease;
}

form .button input:hover {
  background: linear-gradient(-135deg, var(--main-blue), var(--main-purple));
}
/*--------------shruti-----*/
form .button-2 {
  height: 45px;
  margin-left:480px;
  width:50%;
}

form .button-2 input {
  height: 100%;
  width: 50%;
  outline: none;
  color: #fff;
  border: none;
  font-size: 18px;
  font-weight: 500;
  border-radius: 5px;
  background: linear-gradient(135deg, var(--main-blue), var(--main-purple));
  transition: all 0.3s ease;
}

form .button-2 input:hover {
  background: linear-gradient(-135deg, var(--main-blue), var(--main-purple));
}


/*----------------close shruti--------*/


@media only screen and (max-width: 584px) {
  .container {
    max-width: 100%;
  }

  form .user__details .input__box {
    margin-bottom: 15px;
    width: 100%;
  }

  form .gender__details .category {
    width: 100%;
  }

  .container form .user__details {
    max-height: 300px;
    overflow-y: scroll;
  }

  .user__details::-webkit-scrollbar {
    width: 0;
  }
}

</style> 
</head>  
<body>  
<div class="container">
  <div class="title">Registration</div>
  <?php 
  if($this->session->flashdata('success')){
    echo $this->session->flashdata('success');
  }

  if($this->session->flashdata('error')){
    echo $this->session->flashdata('error');
  }
  ?>

  <?php
    echo form_open('Sign_up');
  ?>
  
    <div class="user__details">
      <div class="input__box">
        <span class="details">Full Name</span>
        <input type="text" name="full_name" placeholder="E.g: John Smith" required>
      </div>
      <div class="input__box">
      <span class="details">Email</span>
        <input type="email" name="email" placeholder="johnsmith@hotmail.com" required>
      </div>
      <div class="input__box">
      <span class="details">Mobile Number</span>
        <input type="tel" name="mobile_no" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="012-345-6789" required>
      </div>
      <div class="input__box">
      <span class="details">Password</span>
        <input type="password" name="password" placeholder="********" required>
      </div>
    </div>
   
    <div class="button">
      <input type="submit" name="submit" value="Register">
    </div>
    <div class="button-2">
       <a href="<?php echo site_url();?>/Home"><input type="button" value="Login"></input></a> 
    </div>
    <?php
    echo form_close();
?>
</div>
</body>  
</html>  
