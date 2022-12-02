

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Managing Product</title>
</head>
<body>
    <?php
        include "editpro.php";
        include "../Database_connect/database.php";
        $db = new Database();
    ?>
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
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" name="<?php echo $row["id"]?>">Sửa</button></td>

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