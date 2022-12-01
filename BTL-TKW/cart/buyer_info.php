<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Payment</title>
</head>

<body>
<?php
        include "../header/header.php";

    ?>
    <style>
    <?php include '../header/header.css';
    ?>
    </style>

    <div class="container" style="padding:0 0 40px 0;">
        <div class="row">

            <!-- buyer infomation form-->
            <div class="col-md-7 col-sm-12" style="background-color: white;">
                <h2>Brand</h2>
                <nav aria-label="breadcrumb" class="breadcrumb-style">
                    <ol class="breadcrumb" style="background-color: white;">
                      <li class="breadcrumb-item"><a href="#">Giở hàng</a></li>
                      <li class="breadcrumb-item active" aria-current="page"><a href="#">Thông tin giao hàng</a></li>
                      <li class="breadcrumb-item">Phương thức thanh toán</li>
                    </ol>
                </nav>
                <h4 style="margin-bottom: 1rem;">Thông tin đơn hàng</h4>
                <div style="margin-bottom: 1rem;">Bạn đã có tài khoản? <a href="#">Đăng nhập</a></div>
                <!-- form -->
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Họ và tên">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8 col-sm-12">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group col-md-4 col-sm-12">
                            <input type="tel" class="form-control" placeholder="Số điện thoại">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Địa chỉ">
                    </div>                    
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option selected>Chọn Tỉnh/thành</option>
                                <option>1</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option selected>Chọn Quận/huyện</option>
                                <option>1</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option selected>Chọn Phường/xã</option>
                                <option>1</option>
                            </select>
                        </div>
                    </div>                    
                </form>
                <div class="row">
                    <div class="col"> 
                        Giỏ hàng
                    </div>
                    <div class="col">
                        <a role="button" class="btn btn-dark btn-block" href="">TIẾP TỤC ĐẾN PHƯƠNG THỨC THANH TOÁN</a>
                    </div>
                </div>

            </div>

            <!-- order overview and promotion -->
            <div class="col-md-5 col-sm-12">
                
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <img class="col-md-2" src="images/img2.webp" alt="shoes1" style="width: 20%;">
                            <div class="col-md-6">
                                <div style="font-weight: bold; margin-bottom: 1rem;">Giày Đen</div>
                                <div>Đen/43</div>
                                <!-- <div class="row" id="item-details">
                                    <div class="col-md-2">900,000</div>
                                    <div class="col-md-3">Màu sắc:</div>
                                    <div class="col-md-3">Kích thước:</div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2" style="text-align: right;">900,000</div>
                                </div> -->
                            </div>
                            <div class="col-md-4">
                                900,000
                            </div>
                        </div>
                    </div>  
                </div>

                <hr>
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