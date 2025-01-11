<?php
  $mysqli = NEW MySQLi('localhost','root','','book_store');
  if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $qry = "SELECT * FROM `users` WHERE email = '$email'";
    $result = mysqli_query($mysqli, $qry);
    $row = mysqli_fetch_array($result);
    $db_id = $row['id'];
    $db_email = $row['email'];
    $db_pass = $row['password'];
    $enc = base64_decode($db_pass);


    if ($db_email == $email && $enc == $pass) {
      header('location:index.php');
    } else {
      echo '<script>alert("Login Failed")</script>';
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
<title>LOGIN</title>
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
		<h1>LOGIN</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="" method="post">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="pass" placeholder="Password" required="">
					<div class="wthree-text">

						<div class="clear"> </div>
					</div>
					<input type="submit" value="LOGIN" name="submit">
				</form>
				<p>Don't have an Account? <a href="registration.php">Sign Up Now!</a></p>
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
<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fontawesome.com/v5.15/icons?d=gallery&p=2">
    <link rel="stylesheet" href="css/forms.css">
    <title>BookStore | Login</title>

</head>

<body>
    <div class="container login-page text-center ">
        <div class="row align-items-center">
            <div class="quote col-lg-6 col-sm-12 col-md-12">
                <i>
                    <p><i class="fas fa-quote-left"></i><br>The Copyright law <br>
                        allows us as students <br>
                        and educaters some <br>
                        wiggle room for <br>
                        scholary use. <br> <i class="fas fa-quote-right"></i></p>
                </i></i>
            </div>

            <div class="col-lg-6 col-sm-12 col-md-12 main-content">
                <div class="login">

                    <h1>LOGIN</h1>
                    <p>Please enter username and password</p>
                    <div class="form__group field">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                            <input type="email" name="email" class="form__field" placeholder="Enter Email" id='email' required />
                            <br>
                            <input type="password" name="password" class="form__field" placeholder="Enter Password" id='name' required />

                    </div>
                    <br>

                    <input type="submit" name="submit" class="btn" href="#" />
                    </form>
                    <p class="mt-4">Don't have an Account </p>
                    <a href="registration.php" class="btn">Create Now</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
