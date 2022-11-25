<?php
class Database{
  
  public $servername = "localhost";
  public  $username = "root";
  public  $password = "";
  public  $dbname = "btl_ltw";
  public $link;
  public $error;
  public function __construct(){
    $this->connectDB();
  }
  private function connectDB(){
    $this->link = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    if(!$this->link){
      echo "Error connect DB";
    }
  }
  public function select($query){
    $result =$this->link->query($query);
    if($result->num_rows >0){
      return $result;
    }
    else{
      echo "Select fail";
    }
  }
  public function real_escape_string($id){
    $result = $this->link-> real_escape_string($_GET[$id]);
    return $result;
  }
  public function insertProduct($name, $price, $des, $linkimg){
    $sql = "INSERT INTO product (namepro, price, despro, linkimg)
    VALUES ('$name', '$price', '$des',  '$linkimg')";
    $result=$this->link->query($sql);
    return $result;
  }
  public function deleteProduct($id){
    $sql = "DELETE FROM product WHERE id=$id";
    $result=$this->link->query($sql);
    header('Location:c.php');
    return $result;
  }
  public function editProduct($id,$name, $price, $des, $linkimg){
    $sql = "UPDATE product SET namepro='$name', price='$price', despro='$des',linkimg='$linkimg' WHERE id=$id";
    $result=$this->link->query($sql);
    return $result;
  }
}
?>