<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <?php include "../header/index.html" ?>
    <div class="loginbox">
        <img src="avatar.png" class="avatar">
        <h1>Reset Password</h1>
        <form>
            <p>Username</p>
            <input type="text" name="" placeholder="Enter Username">
            <p>Email</p>
            <input type="text" name="" placeholder="Enter Email">
            <p>Phone Number</p>
            <input type="text" name="" placeholder="Enter Phone Number">
            <input type="submit" name="" value="Reset Password"><br> 
            <a href="../login/index.php">Already had an account? Sign in</a>

        </form>
    </div>
    <?php include "../footer/index.html"?>
  </body>
</html>
