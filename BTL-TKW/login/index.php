<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form</title>
    <link rel="stylesheet" href="login.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div>
    <?php include "../header/header.php" ?>
      <style>
        <?php include '../header/header.css'; ?>
    </style>
    </div>
     
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

    <?php include "../footer/footer.php" ?>

    <style>
        <?php include '../footer/footer.css'; ?>
    </style>
</body>
  
  
</html>
