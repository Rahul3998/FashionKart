<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: login.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];

$_SESSION["name"] = $_POST["usernamename"];

  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
     // $query = "INSERT INTO 'tb_user'(`name`, `username`, `email`, `password`) VALUES('$name','$username','$email','$password')";
      $query = "INSERT INTO `tb_user` (`name`, `username`, `email`, `password`) VALUES ('$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page | Online Shoping Portal FashionKart!</title>
    <link rel="stylesheet" href="css/form_style.css">
</head>
  <body>
    <div class="container">
      <div class="form">
        <h2>Registration</h2>
        <form class="" action="" method="post" autocomplete="off">
          <input type="text" name="name" id = "name" required value="" class="input" placeholder="Enter Your Name"> <br>
          <input type="text" name="username" id = "username" required value="" class="input" placeholder="Enter Username"> <br>
          <input type="email" name="email" id = "email" required value="" class="input" placeholder="Enter Email"> <br>
          <input type="password" name="password" id = "password" required value="" class="input" placeholder="Password"> <br>
          <input type="password" name="confirmpassword" id = "confirmpassword" required value="" class="input" placeholder="Confirm Password"> <br>
          <button type="submit" name="submit" class="submit">Register</button>
          <br>
          <a href="login.php" class="a">Sign in...!</a>
        </form>
      </div>
      <div class="img">
            <img src="img/implogo.png" alt="logo">
        </div>
      </div>
    <br>
  </body>
</html>