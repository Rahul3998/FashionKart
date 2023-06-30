<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: login.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
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
    <h2>Login</h2>
    <form class="form1" action="" method="post" autocomplete="off">
      <input type="text" name="usernameemail" id = "usernameemail" required value="" class="input" placeholder="Username/Email"> <br>
      <input type="password" name="password" id = "password" required value="" class="input" placeholder="Password"> <br>
      <button type="submit" name="submit" class="submit">Login</button>
    </form>
    <br>
    <a href="registration.php" class="a">Registration</a>
  </div>
  <div class="img">
            <img src="img/implogo.png" alt="logo">
        </div>
</div>
  </body>
</html>