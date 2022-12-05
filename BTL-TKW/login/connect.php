<?php  
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


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
    if (($username=="admin"&&$password="admin")){
      echo "Welcome admin";
      $_SESSION['username']=$username;
      header("Location: ../admin.php");
    }
    else if ($count>0)
    {
      echo "login success";
      $_SESSION['username']=$username;
      header("Location: ../homepage/index.php");
    }
    else{
      echo "wrong username or password";
    }
  
  }
?>