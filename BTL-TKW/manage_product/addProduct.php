<?php
// connect database
$servername = "localhost";
$username = "root";
$password = "";

$pID = $_POST['productid'];
$pName = $_POST['productName'];
$pDes = $_POST['productDescription'];
$pImgLink = $_POST['productImgLink'];
$pPrice = $_POST['productPrice'];

try {
  $conn = new PDO("mysql:host=$servername;dbname=hello", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

try {
    $sql = "INSERT INTO tblproduct
    --  (id, name, description, linkimg, price)
    VALUES ('$pID', '$pName', '$pDes', '$pImgLink', $pPrice)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
} catch (PDOException $e) {
    //throw $th;
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>