<?php
   $mysqli = NEW MySQLi('localhost','root','','book_store');
   if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $number = $_POST['number'];
    $nationality = $_POST['nationality'];
    $password = $_POST['password'];

    $username = $mysqli->real_escape_string($username);
    $email = $mysqli->real_escape_string($email);
    $city = $mysqli->real_escape_string($city);
    $number = $mysqli->real_escape_string($number);
    $nationality = $mysqli->real_escape_string($nationality);
    $password = $mysqli->real_escape_string($password);
    //$password = base64_encode($password);

    $insert =$mysqli->query("INSERT INTO `signup`(`username`, `email`, `city`, `number`, `nationality`, `password`) VALUES ('$username','$email','$city','$number','$nationality','$password')");
    if($insert){
        echo"Welcome";
    }
    else{
        echo $mysqli->error;
    }

   }
?>

<html>
    <head>
     <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <div class="login-form-container">
      <div id="close-login-btn" class="fas fa-times"></div>

        <form action="" method="POST">
        <h3>sign in</h3>
        <span>Username</span>
        <input type="text" name="username" class="box" placeholder="enter your name" id=""required><br>
        <span>Email</span>
        <input type="email" name="email" class="box" placeholder="enter your email" id=""><br>
        <span>City</span>
        <input type="text" name="city" class="box" placeholder="enter your city" id=""><br>
        <span>Number</span>
        <input type="tel" name="number" class="box" placeholder="enter your number" id=""><br>
        <span>Nationality</span>
        <input type="text" name="nationality" class="box" placeholder="enter your nationality" id=""><br>

        <span>Password</span>
        <input type="password" name="password" class="box" placeholder="enter your password" id=""required><br>

       </div>
        <input type="submit" name="submit" value="sign in" class="btn">

       </form>
    </div>
</body>

<style>
</html>
