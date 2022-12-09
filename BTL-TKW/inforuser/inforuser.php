<?php
  session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="inforuser.css">
    
    <link rel="stylesheet" href="../homepage/styles.css">

    <title>Information</title>
</head>
<body>
    <?php
        
        include "../Database_connect/database.php";
        $db = new Database();
        $username=$_SESSION['username'];
        $sql = "SELECT * FROM tbluser where username='$username'";
        $user = $db->select($sql);
        $row = mysqli_fetch_array($user);
    ?>

    <div class="topbar">
        <div class="container-fluid">
          <div class="topbar-content d-flex align-items-center justify-content-between">
            <div class="left-topbar d-flex flex-wrap align-items-center">
              <div class="hotline-left">
                <span>Hotline:</span>
                <span><a href="#" class="phone" id="phone">0966 158 666</a></span>
                <span>(8h - 12h, 13h30 - 17h) </span>
              </div>
              <div class="aff-left" id="lienhe">
                <a href="#" class="lienhe">| Liên hệ hợp tác</a>
              </div>
            </div>
            <div class="right-topbar d-flex" id="topbar_list">
              <ul class="d-flex align-items-center" id="topbar_list">
                <li><a href="#" class="topbar_list">Tìm cửa hàng</a></li>
                <li><a href="#" class="topbar_list">Kiểm tra đơn hàng</a></li>
                <li><a href="#" class="topbar_list">Mua hàng tại Shopify</a></li>
                <li>
                  <?php 
                  if (isset($_SESSION['username'])){
                    echo " | Welcome ". $_SESSION['username'];
                  } ?> 
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar">
        <ul class="navbar">
          <li class="navbar"><a href="../homepage/index.php" class="navbar" >Home</a></li>
          <li class="navbar"><a href="../listsp/trangchu.php" class="navbar" >Cửa hàng</a></li>
          <li class="navbar"><a href="../listsp/male.php" class="navbar">Nam</a></li>
          <li class="navbar"><a href="../listsp/female.php" class="navbar">Nữ</a></li>
          
        </ul>
      </div>
    <div class="container">
        <div class="title">
            <h3 class="col-md-12">Thông tin cá nhân</h3>
        </div>
        

        <form action="" method="post">
            <!-- ID -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="nameuser">Họ tên người dùng:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control"  name="nameuser" value="<?php echo $row['name']?>">
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="emailuser">Email:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control"  name="emailuser" value="<?php echo $row['email']?>">
                </div>
            </div>
            <!-- Name -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="username">Username:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control"  name="username" value="<?php echo $row['username']?>" readonly>
                </div>
            </div>
            <!-- Description -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="phone">Phone:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="address">Địa chỉ:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control"  name="address" value="<?php echo $row['address']?>">
                </div>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary" name="btnsubmitAdd">Cập nhật thông tin</button>
                <a href="changepas.php"><button type="button" class="btn btn-info">Đổi mật khẩu</button></a>
            </div>
            
        </form>
    </div>
    
    <?php
            
            if (isset($_POST['btnsubmitAdd'])){
                $nameuser = $_POST['nameuser'];
                $emailuser = $_POST['emailuser'] ;
                $phone = $_POST['phone'];
                $address= $_POST['address'];
                $username = $_POST['username'];
                if($nameuser!=""&& $emailuser!=""&& $phone!=""&& $address!=""){
                    $sql ="Update tbluser set name='$nameuser', email='$emailuser', phone = '$phone', address='$address' where username='$username'";
                    $db->link->query($sql);
                    echo "<script> alert(\"Cập nhật thành công.\") </script>";
                    echo "<script>
                    if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                    </script>";

                    echo "<script>window.location.href='inforuser.php';</script>";
                    exit;

                }
                else echo "<script> alert(\"Cập nhật không thành công, mời nhập đầy đủ.\") </script>";
                echo "<script>
                    if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                    </script>";
            }
            
            
        ?>
        
    </div>
</body>
</html>