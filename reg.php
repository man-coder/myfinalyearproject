    <?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: ho.php");
}
include_once 'connect.php';

if(isset($_POST['btn-signup']))
{
    $name  = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$password = md5(mysqli_real_escape_string($con, $_POST['password']));
	
	if(mysqli_query($con, "INSERT INTO users(name,email,username,password) VALUES('".$name."','".$email."','".$username."','".$password."')"))
	{
            $msg = 'Congratulation you have successfully registered.';
		
        
       
	}
	else
	{
            $msg = 'Error while registering you...';
	
       
        
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reg form</title>
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
	<link rel="stylesheet" type="text/css" href="reg-main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">




	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('https://res.cloudinary.com/h3av7f1l3s/image/upload/v1546109173/bg-02.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="post" >
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="name" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input id="password" class="input100" type="password" name="password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Repeat Password</span>
						<input id="confirm_password" class="input100" type="password" name="repeat-pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>
					
                    			<span id='message'></span>
		<br>

					<!--<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>

						
					</div>
-->
					<div class="container-login100-form-btn">
					
					
					
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="btn-signup">
								Sign Up
							</button>
						</div>

						<a href="login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
					<br>
					
					
					 <?php echo @$msg;?>
				
					
				</form>
			</div>
		</div>
    </div>
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
    $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Password Matching').css('color', 'green');
  } else 
    $('#message').html('Password Not Matching').css('color', 'red');
});
    </script>
    
    
    
    
	<script src="jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="bootstrap/js/popper.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
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