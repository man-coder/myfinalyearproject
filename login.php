<?php
session_start();
include_once 'connect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: ho.php");
}

if(isset($_POST['btn-login']))
{
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$upass = mysqli_real_escape_string($con, $_POST['password']);
	$res=mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
	$row=mysqli_fetch_array($res);
	
	if($row['password']==md5($upass))
	{
		$_SESSION['user'] = $row['id'];
		header("Location: ho.php");
	}
	else
	{
            $err = "<p style='color: red'>Wrong Username or Password</p>";
		?>
       
        <?php
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="loggin.css">
	
	 <link rel="stylesheet" href="modal.css">
   
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('https://res.cloudinary.com/h3av7f1l3s/image/upload/v1546109173/bg-02.jpg');">
			    
			</div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-59">
						LOGIN
					</span>
					
					<span class="login100-form-title p-b-59 stutea">
						 <img class="avtar" src="https://res.cloudinary.com/h3av7f1l3s/image/upload/v1546109160/027-boy-6.png" alt="">  <img class="slash" src="https://res.cloudinary.com/h3av7f1l3s/image/upload/v1546109159/slash.png" alt=""> <img class="avtar" src="https://res.cloudinary.com/h3av7f1l3s/image/upload/v1546109158/008-woman-8.png" alt="">
					</span>
		
					
		<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input id="uname" class="input100" type="text" name="username" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input id="pname" class="input100" type="password" name="password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

                        <span id='message'></span>

<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="btn-login">
								GO
							</button>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>
	
	
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
    $('#uname, #pname').on('keyup', function () {
  if (($('#uname').val() == "man") &&($('#pname').val()== 123))  {
    $('#message').html('Password Matching').css('color', 'green');
  } else 
    $('#message').html('Password Not Matching').css('color', 'red');
});
    </script>
   
	
	
	
	
	
	
<!--===============================================================================================-->
	<script src="jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="bootstrap/js/popper.js"></script>
	<script src="<bootstr></bootstr>ap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="daterangepicker/moment.min.js"></script>
	<script src="/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="reg-main.js"></script>
	
	
</body>
</html>