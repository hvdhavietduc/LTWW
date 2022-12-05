<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

  if (isset($_SESSION['username'])){
    unset($_SESSION['username']);
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
      <?php include "../header/header.php" ?>

      <div class="loginbox">
        <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form method="post" action="connect.php">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="" value="Login"><br>
            <a href="../forgot your password/index.php">Lost your password?</a><br>
            <a href="../register/index.php">Don't have an account?</a>
        </form>
    </div>
    <div class="row"></div>
    <div class="footer">
      <?php include "../footer/index.html" ?>
    </div>
  </body>
  
  
</html>
