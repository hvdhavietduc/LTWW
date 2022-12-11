<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

  if (isset($_SESSION['username'])){
    unset($_SESSION['username']);
  }
  $login_err="";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $conn=new mysqli('localhost','root','','btl_ltw');
    if($conn->connect_error){
      die('Connection failed : '.$conn->connect_error);
    }
  else{
    $query="select * from tbluser where username='$username' and password='$password'";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
    if ($count==0){
      $login_err="* Wrong username or password";
    }
    if (($username=="admin"&&$password="admin")){
      echo "Welcome admin";
      $_SESSION['username']=$username;
      header("Location: ../manage_product/manage.php");
    }
    else if ($count>0)
    {
      echo "login success";
      $_SESSION['username']=$username;
      header("Location: ../homepage/index.php");
    }
  }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form</title>
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
      <?php include "../header/header.php" ?>

      <div class="loginbox">
        <div class="avt">
          <img src="avatar.png" class="avatar">
        </div>
       
        <h1>Login Here</h1>
        <form method="POST">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <span style="color:red;">
              <?php
                echo $login_err;
              ?>
            </span> 
            <input type="submit" name="" value="Login"><br>
            <a href="../forgot your password/index.php">Lost your password?</a><br>
            <a href="../register/index.php">Don't have an account?</a>
        </form>
    </div>
    <div class="row"></div>
    <div class="footer">
      <?php include "../footer/footer.php" ?>
    </div>
  </body>
  
  
</html>
