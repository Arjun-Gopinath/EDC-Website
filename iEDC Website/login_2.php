<!DOCTYPE html>
<html lang="en">
<head>
	<title>iEDC-LogIn</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="img/png" href="img/logo.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_css/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_css/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_css/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_css/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login_css/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_css/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_css/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login_css/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_css/css/util.css">
	<link rel="stylesheet" type="text/css" href="login_css/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('login_css/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" >
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<!--<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>-->

					<div class="container-login100-form-btn" >
						<button class="login100-form-btn" name="submit" >
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	if(isset($_POST['submit'])){
		

		$dbname="tempDB"; // CHANGE DB NAME


		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		} 

		$uname=$_POST['username'];
		$pass=md5($_POST['pass']);

		$sql="SELECT password,email,acc_type FROM users where email='$uname';";
		$result = $conn->query($sql);

		if ($result->num_rows == 0) {
			echo "<script type='text/javascript'>alert('User does not exist')</script>";
		}else{
			$row = $result->fetch_assoc();
			if($row['password']==$pass){
				$acc_type=$row['acc_type'];
				session_start();
                            
                            // Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["acc_type"] = $acc_type;
                $_SESSION["username"] = $uname;			
				echo "<script> location.replace('disp.php'); </script>"; // REPLACE 'index.html' with welcome page name

			}else{
				echo "<script type='text/javascript'>alert('Incorrect password')</script>";
			}
		}


	}			/*Add admin or panel in table, forgot password, 2 more php files for forgot and reset 

				  Then admin page display snippet
				*/
				  // acc_type 0 for admin & 1 for panel

?>

</body>
</html>