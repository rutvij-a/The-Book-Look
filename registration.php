<?php

   $mysqli = NEW MySQLi('localhost','root','','book_store');
   if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $cnfpassword = $_POST['cnfpassword'];

    if($password==$cnfpassword){
    $username = $mysqli->real_escape_string($username);
    $email = $mysqli->real_escape_string($email);

    $password = $mysqli->real_escape_string($password);
    $password = base64_encode($password);
    $number = $mysqli->real_escape_string($number);
    $insert =$mysqli->query("INSERT INTO `users`(`username`, `email`, `number`, `password`) VALUES ('$username','$email','$number','$password')");
    if($insert){
         header('location:login.php');
    }
    else{
        echo $mysqli->error;
    }

   }
   else{

     echo '<script>alert("Password mismatched")</script>';
   }
 }
?>
<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>The Book Look</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="registration_style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1><b>SIGN UP PAGE</b></h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="" method="post">
					<input class="text" type="text" name="username" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
          <input class="text email" type="text" name="number" placeholder="Phone Number" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="cnfpassword" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP" name="submit">
				</form>
				<p>Already have an Existing account? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>
