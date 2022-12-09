<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HomePage</title>
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
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
        <div class="account_cart">
        <?php 
          if (isset($_SESSION['username'])){
            ?>
            <a href="../login/index.php" class="account_cart"><img src="../header/backicon.png" alt="HTML tutorial" style="width:42px;height:42px;"></a>
            <?php
          }
          ?>
          
          <a href="
            <?php 
              if (isset($_SESSION['username']) && $_SESSION['username']=="admin"){
                echo "../manage_product/manage.php";
              }
              else if (isset($_SESSION['username'])) echo "../inforuser/inforuser.php";
              else echo "../login/index.php";
            ?>" 
            class="account_cart"><img src="../header/avatar.png" alt="HTML tutorial" style="width:42px;height:42px;">
          </a>
          <a href="#" class="account_cart"><img src="../header/cart.png" alt="HTML tutorial" style="width:42px;height:42px;"></a>
          
        </div>
      </div>
      