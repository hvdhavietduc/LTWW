<?php
    $username= $_POST["username"];
    $password= $_POST["password"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $repassword=$_POST["repassword"];
    if(strlen($username) < 2 || strlen($username) > 30) {
        die('Username must be between 2-30 characters');
    }
    $check = preg_match("/^.*@.*\..*/i", $email);
    if($check == 0) {
        die('Invalid email');
    }
    if(strlen($password) < 2 || strlen($password) > 30) {
        die("Password must be between 2-30 characters");
    }
    if (strcmp($password,$repassword)!=0){
        die("Re-entered password is incorrect");
    }
    if (is_numeric($phone)!=1){
        die("Invalid phone number");;
    }
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
          die("Used username");
        }

        $stmt=$conn->prepare("insert into tbluser(username, password, email, phone) values(?,?,?,?)");
        $stmt->bind_param("sssi", $username, $password, $email, $phone);
        $stmt->execute();
        header('Location:../login/index.php');
        $stmt->close();
        $conn->close();
    }
?>