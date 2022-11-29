<?php
    $username= $_POST["username"];
    $password= $_POST["password"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];

    $conn=new mysqli('localhost','root','','btl_ltw');
    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }
    else{
        $stmt=$conn->prepare("insert into tbluser(username, password, email, phone) values(?,?,?,?)");
        $stmt->bind_param("sssi", $username, $password, $email, $phone);
        $stmt->execute();
        header('Location:../login/index.php');
        $stmt->close();
        $conn->close();
    }
?>