

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Managing Product</title>
</head>
<body>
    <?php
        include "../Database_connect/database.php";
        $db = new Database();
        if(isset($_GET['id'])){
          $id = $_GET['id'];
          $sql = "SELECT * FROM tblproduct WHERE id='$id'";
          $query = $db->select($sql);
          $row = $query->fetch_assoc();
        }
    ?>
    <div class="container">

        <div class="title">
            <h3 class="col-md-12">Sửa sản phẩm</h3>
        </div>

        <form action="" method="post">
            <!-- ID -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="id">Giới tính:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder="Nam nhập 1, Nữ nhập 0" name="productgender" value="<?php echo $row['gender']?>">
                </div>
            </div>
            <!-- Name -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="name">Name:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder="NHập tên SP" name="productName" value="<?php echo $row['name']?>">
                </div>
            </div>
            <!-- Description -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="description">Description:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder="Nhập mô tả" name="productDescription" value="<?php echo $row['description']?>">
                </div>
            </div>
            <!-- img link -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="linkimg">Image link:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder="Nhập link image" name="productImgLink" value="<?php echo $row['linkimg']?>">
                </div>
            </div>
            <!-- price -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="price">Price:</label>
                <div class="col-md-7">
                    <input type="number" class="form-control" placeholder="Nhập giá SP" name="productPrice" value="<?php echo $row['price']?>">
                </div>
            </div>

            <div class="form-group text-center">
                <button class="btn btn-primary" name="btnsubmitedit">Sửa</button>
                <button class="btn btn-success" ><a href="../manage_product/manage.php" class="link-dark" style="color:white; text-decoration: none;">Quay lại</a></button>
            </div>

        </form>

        
        <?php
            
            if (isset($_POST['btnsubmitedit'])){
                $name = $db-> real_escape_string($_POST['productName']);
                $des = $db-> real_escape_string($_POST['productDescription']) ;
                $imgLink = $db-> real_escape_string($_POST['productImgLink']);
                $price= $db-> real_escape_string($_POST['productPrice']);
                $gender = $db-> real_escape_string($_POST['productgender']);
                if($name!=""&& $des!=""&& $imgLink!=""&& $price!=""&& $gender!=""){
                    $db->updatepro($id,$name, $des, $imgLink, $price, $gender);
                    echo "<script> alert(\"Sửa thành công.\") </script>";
                    echo "<script>
                    if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                    </script>";

                    echo "<script>window.location.href='manage.php';</script>";
                    exit;

                }
                else echo "<script> alert(\"Sửa không thành công, mời nhập đầy đủ.\") </script>";
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