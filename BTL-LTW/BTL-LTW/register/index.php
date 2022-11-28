<!DOCTYPE html>
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
        <h1>Register</h1>
        <form action="connect.php" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" >
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" >
            <p>Confirm Password</p>
            <input type="password" name=""placeholder="Re-enter Password">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email" name="email">
            <p>Phone Number</p>
            <input type="text" name="phone" placeholder="Enter Phone Number" name="phone"> 
            <input type="submit" name="" value="Register"><br> 
            <a href="../login/index.php">Already had an account? Sign in</a>

        </form>
    </div>
    <footer>
    <?php include "../footer/index.html" ?>
    </footer>
  </body>

</html>
