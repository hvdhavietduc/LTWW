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
  public function insertProduct($name, $des, $linkimg, $price, $gender){
    $sql = "INSERT INTO tblproduct (name, description, 	linkimg, price, gender)
    VALUES ('$name', '$des', '$linkimg',  '$price', '$gender')";
    $result=$this->link->query($sql);
    return $result;
  }
  public function deletepro($id){
    $sql = "DELETE FROM tblproduct WHERE id='$id'";
    $result=$this->link->query($sql);
    header('Location:../manage_product/manage.php');
    return $result;
  }

}
?>