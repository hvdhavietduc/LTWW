<?php
if (isset($_POST['btnsubmitAdd'])){
    require 'addProduct.php';
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    <title>Managing Product</title>
</head>
<body>
    <div class="container">

        <h3 class="col-md-12">Thêm sản phẩm</h3>

        <form action="" method="post">
            <!-- ID -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="id">ID:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder="123" name="productid">
                </div>
            </div>
            <!-- Name -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="name">Name:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder="exampleShoes" name="productName">
                </div>
            </div>
            <!-- Description -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="description">Description:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder="run big" name="productDescription">
                </div>
            </div>
            <!-- img link -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="linkimg">Image link:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder="/dir/img" name="productImgLink">
                </div>
            </div>
            <!-- price -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="price">Price:</label>
                <div class="col-md-7">
                    <input type="number" class="form-control" placeholder="990000" name="productPrice">
                </div>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" name="btnsubmitAdd">Thêm</button>
            </div>

        </form>

        <?php
            if (isset($_POST['btnsubmitAdd'])){
                echo "ID: ".$_POST['productid']."<br>";
                echo "Name: ".$_POST['productName']."<br>";
                echo "Description: ".$_POST['productDescription']."<br>";
                echo "Image link: ".$_POST['productImgLink']."<br>";
                echo "Price: ".$_POST['productPrice']."<br>";
            }
        ?>
    </div>
</body>
</html>