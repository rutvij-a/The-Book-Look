<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Online Book Store Website</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>   
   <!-- header section starts  -->

    <header class="header">

        <div class="header-1">

            <a href="#" class="logo"> <i class="fas fa-book"></i> The Book Look </a>

            <!--<form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>-->

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-shopping-cart"></a>
                
                    <div id="login-btn" class="fas fa-user"></div>
               
                    <div class="d-flex justify-content-center">
                    <?php
                    if (!isset($_SESSION['email'])) {
                    ?>
                        <a href="login.php" class="btn" style=" padding: 5px 15px; color: white;">Login</a>
                    <?php
                    } else {
                    ?>
                        <a href="logout.php" class="btn" style=" padding: 5px 15px; color: white;">Logout</a>
                    <?php
                    }
                    ?>
                </div>
               
            </div>

        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#featured">featured</a>
                <a href="#arrivals">arrivals</a>
                <a href="#reviews">client reviews</a>
                <a href="#blogs">book reviews</a>
            </nav>
        </div>

    </header>

    <!-- header section ends -->

    <!-- bottom navbar  -->

    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fas fa-blog"></a>
    </nav>

    <!-- login form  -->

    <div class="login-form-container">
        <script>
            function signup() {
                var login_box = document.getElementById("login_box");
                var signup_box = document.getElementById("signup_box");
                if (login_box.style.display === "none") {
                    signup_box.style.display = "none";
                    login_box.style.display = 'block';
                } else {
                    signup_box.style.display = "block";
                    login_box.style.display = "none";
                }
            }
        </script>
        <div id="close-login-btn" class="fas fa-times"></div>
        <?php
        if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST["login"]))){
            $email = $_POST["email"];
        $password = md5($_POST["password"]);
            // Check user is exist in the database
            $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password=' $password ";
            $result = mysqli_query($con, $query) or die();
            $rows = mysqli_num_rows($result);
            if ($rows == 1) {
                $_SESSION['username'] = $username;
                // Redirect to user dashboard page
                header("Location: dashboard.php");
            } else {
                echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a> again.</p>
                  </div>";
            }
        } else {
        ?>
            <div id="login_box">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                    <h3>sign in</h3>
                    <span>username</span>
                    <input type="email" name="email" class="box" placeholder="enter your email" id="">
                    <span>password</span>
                    <input type="password" name="password" class="box" placeholder="enter your password" id="">
                    <div class="checkbox">
                        <input type="checkbox" name="" id="remember-me">
                        <label for="remember-me"> remember me</label>
                    </div>
                    <!-- <input type="submit" value="sign in" class="btn"> -->
                    <!-- <p>forget password ? <a href="#">click here</a></p> -->
                     <button type="submit" class="btn btn-default" name="login"  id="login" onclick="signup()">Register</button>
                    <p>don't have an account ? <a href="#" id="signup" onclick="signup()">create one</a></p>
                </form>
            </div>
        <?php
        }
        ?>
        <?php
        if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST["signup"]))) {
            // removes backslashes
            $name = $_POST['name'];
            $email = $_POST["email"];
        $password = md5($_POST["password"]);

            $query    = "INSERT into `users` (name, password, email)
                     VALUES ('$name', '$password', '$email')";
            $result   = mysqli_query($con, $query);
            if ($result) {
                // echo "<div class='form'>
                //       <h3>You are registered successfully.</h3><br/>
                //       <p class='link'>Click here to <a href='index.php'>Login</a></p>
                //       </div>";
            } else {
                echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>registration</a> again.</p>
                  </div>";
            }
        } else {
        ?>
            <div id="signup_box">
                <form action="">
                    <h3>sign up</h3>
                    <span>Name</span>
                    <input type="text" name="name" class="box" placeholder="enter your name" id="">
                    <span>Email</span>
                    <input type="email" name="email" class="box" placeholder="enter your email" id="">
                    <span>password</span>
                    <input type="password" name="password" class="box" placeholder="enter your password" id="">
                    <div class="checkbox">
                        <input type="checkbox" name="" id="remember-me">
                        <label for="remember-me"> remember me</label>
                    </div>
                    <!-- <input type="submit" value="sign in" class="btn"> -->
                    <button type="submit" class="btn btn-default" name="signup"  id="signup" onclick="signup()">Register</button>
                    <!-- <p>forget password ? <a href="#">click here</a></p> -->
                    <p>don't have an account ? <a href="#" id="login" onclick="signup()">create one</a></p>
                </form>
            </div>

        <?php
        }
        ?>
    </div>
    </body>

</html>















<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>

</html>