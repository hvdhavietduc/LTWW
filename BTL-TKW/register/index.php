<?php
  $username=$password=$email=$phone=$repassword="";
  $username_err=$password_err=$email_err=$phone_err=$repassword_err="";
  $error=0;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username= $_POST["username"];
    $password= $_POST["password"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $repassword=$_POST["repassword"];
    if(strlen($username) < 2 || strlen($username) > 30) {
      $username_err="Username must be between 2-30 characters";
      $error=1;
  }
  $check = preg_match("/^.*@.*\..*/i", $email);
  if($check == 0) {
      $email_err="Invalid email";
      $error=1;
  }
  if(strlen($password) < 2 || strlen($password) > 30) {
      $password_err="Password must be between 2-30 characters";
      $error=1;
  }
  if (strcmp($password,$repassword)!=0){
      $repassword_err="Re-entered password is incorrect";
      $error=1;
  }
  if (is_numeric($phone)!=1){
      $phone_err="Invalid phone number";
      $error=1;
  }
  if ($error==0){
  $conn=new mysqli('localhost','root','','btl_ltw');
    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }
    else{
        $query="select * from tbluser where username='$username'";
        $result=mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);
        if ($count>0)
        {
          $username_err="Used username";
        }
        else{
        $stmt=$conn->prepare("insert into tbluser(username, password, email, phone) values(?,?,?,?)");
        $stmt->bind_param("sssi", $username, $password, $email, $phone);
        $stmt->execute();
        header('Location:../login/index.php');
        $stmt->close();
        $conn->close();
        }
    }
  }
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
        <h1>Register</h1>
        <form name="registerForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" >
            <span>
              <?php
                echo $username_err;
              ?>
            </span>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" >
            <span>
              <?php
                echo $password_err;
              ?>
            </span>
            <p>Confirm Password</p>
            <input type="password" name="repassword"placeholder="Re-enter Password">
            <span>
              <?php
                echo $repassword_err;
              ?>
            </span>
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email" name="email">
            <span>
              <?php
                echo $email_err;
              ?>
            </span>
            <p>Phone Number</p>
            <span>
              <?php
                echo $phone_err;
              ?>
            </span>
            <input type="text" name="phone" placeholder="Enter Phone Number" name="phone"> 
            <input type="submit" name="submit" value="Register"><br> 
            <a href="../login/index.php">Already had an account? Sign in</a>

        </form>
    </div>
    <footer>
    <?php include "../footer/footer.php" ?>
    </footer>
  </body>

</html>
