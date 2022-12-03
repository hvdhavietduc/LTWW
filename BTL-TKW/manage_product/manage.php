

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../homepage/styles.css">
    <title>Managing Product</title>
</head>
<body>
    <?php
        
        include "../Database_connect/database.php";
        $db = new Database();
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
          <li class="navbar"><a href="../listsp/female .php" class="navbar">Nữ</a></li>
          
        </ul>
      </div>
    <div class="container">

        <h3 class="col-md-12">Thêm sản phẩm</h3>

        <form action="" method="post">
            <!-- ID -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="id">Giới tính:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder="Nam nhập 1, Nữ nhập 0" name="productgender">
                </div>
            </div>
            <!-- Name -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="name">Name:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder="NHập tên SP" name="productName">
                </div>
            </div>
            <!-- Description -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="description">Description:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder="Nhập mô tả" name="productDescription">
                </div>
            </div>
            <!-- img link -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="linkimg">Image link:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder="Nhập link image" name="productImgLink">
                </div>
            </div>
            <!-- price -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="price">Price:</label>
                <div class="col-md-7">
                    <input type="number" class="form-control" placeholder="Nhập giá SP" name="productPrice">
                </div>
            </div>

            <div class="form-group text-center">
                <button class="btn btn-primary" name="btnsubmitAdd">Thêm</button>
            </div>

        </form>
        <?php
            $sql = "SELECT * FROM tblproduct";
            $products= $db->select($sql);
            

        ?>
        <div class="danhsachsp">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        while($row = mysqli_fetch_array($products)){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row["id"]?></th>
                        <td><?php echo $row["name"]?></td>
                        <td><?php echo $row["price"]?></td>
                        <td><a href="editpro.php?id=<?php echo $row["id"]?>"><button type="button" class="btn btn-primary" >Sửa</button></a></td>

                        <td><a href="deletepro.php?id=<?php echo $row["id"]?>"><button name="deletepro" class="btn btn-danger">Xóa</button></a></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <?php
            
            if (isset($_POST['btnsubmitAdd'])){
                $name = $_POST['productName'];
                $des = $_POST['productDescription'] ;
                $imgLink = $_POST['productImgLink'];
                $price= $_POST['productPrice'];
                $gender = $_POST['productgender'];
                if($name!=""&& $des!=""&& $imgLink!=""&& $price!=""&& $gender!=""){
                    $db->insertProduct($name,$des, $imgLink, $price, $gender);
                    echo "<script> alert(\"Thêm thành công.\") </script>";
                    echo "<script>
                    if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                    </script>";

                    echo "<script>window.location.href='manage.php';</script>";
                    exit;

                }
                else echo "<script> alert(\"Thêm không thành công, mời nhập đầy đủ.\") </script>";
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