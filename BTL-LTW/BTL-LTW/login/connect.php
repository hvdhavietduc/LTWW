<?php  
  $username=$_POST['username'];
  $password=$_POST['password'];
  $conn=new mysqli('localhost','root','','user');
  if($conn->connect_error){
      die('Connection failed : '.$conn->connect_error);
  }
  else{
    $query="select * from register where username='$username' and password='$password'";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
    if ($count>0)
    {
      echo "login success";
      header("Location: ../homepage/index.html");
    }
    else{
      echo "wrong username or password";
    }
  
  }
?>