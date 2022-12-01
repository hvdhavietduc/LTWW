<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Cart</title>
</head>
<body>
<?php
        include "../header/header.php";
        include "../Database_connect/database.php";
        $db=new Database();
    ?>
    <style>
    <?php include '../header/header.css';
    ?>
    </style>
    <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM tblproduct WHERE id='$id'";
            $products =$db->select($sql);
            $row = mysqli_fetch_array($products);
     ?>
    <div class="container" style="padding:0 0 40px 0;">
        <div class="row">

            <!-- in cart -->
            <div class="col-md-7 col-sm-12" style="width: 100%">
                <div class="box">
                    <h3>GIỎ HÀNG CỦA BẠN</h3>
                    <hr>
                    <div style="margin-bottom: 1rem;"><span>Bạn đang có</span> <span style="font-weight: bold">sản phẩm</span> <span>ở trong giỏ hàng</span></div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <img class="col-md-2" src="<?php echo $row["linkimg"]?>" alt="shoes1" style="width: 20%;">
                                <div class="col-md-10">
                                    <div style="font-weight: bold; margin-bottom: 1rem;"><?php echo $row["name"]?></div>
                                    <div class="row" id="item-details">
                                        <div class="col-md-2"><?php echo $row["price"]?>đ</div>
                                        <div class="col-md-3">Màu sắc:</div>
                                        <div class="col-md-3">Kích thước:</div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-2" style="text-align: right;"><?php echo $row["price"]?>đ</div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>  
                    </div>

                    
                </div>
            </div>

            <!-- summary -->
            <div class="col-md-5 col-sm-12" style="width: 100%">
                <div class="box">
                    <h3>THÔNG TIN ĐƠN HÀNG</h3>
                    <hr>
                    <h4>Tổng tiền:</h4>
                    <hr>
                    <ul>
                        <li>Phí vận chuyển sẽ được tính ở trang thanh toán</li>
                        <li>Bạn cũng có thể nhập mã giảm giá ở trang thanh toán</li>
                    </ul>
                    <a role="button" class="btn btn-dark btn-block" href="buyer_info.php?id=<?php echo $row["id"] ?>">THANH TOÁN NGAY (Áp dụng cho Việt Nam)</a>
                    <button type="button" class="btn btn-primary btn-block">ĐẶT HÀNG QUỐC TẾ (Cho các quốc gia khác)</button>
                </div>
            </div>

        </div>

    </div>
    <?php
        include "../footer/footer.php"
    ?>
    <style>
        <?php
        include "../footer/footer.css"
        
        ?>
    </style>
</body>
</html>