<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/namStytes.css" />
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-----------So San pham trong 1 trang----------->
    <?php
    include "./connect_db.php";
    $item_per_page = !empty($_GET["per_page"]) ? $_GET["per_page"] : 4;
    $current_page = !empty($_GET["page"]) ? $_GET["page"] : 1;
    $offset = ($current_page - 1) * $item_per_page;
    $products = mysqli_query(
      $con,
      "SELECT * FROM `product` ORDER BY `id` ASC  LIMIT " .
        $item_per_page .
        " OFFSET " .
        $offset
    );
    $totalRecords = mysqli_query($con, "SELECT * FROM `product`");
    $totalRecords = $totalRecords->num_rows;
    $totalPages = ceil($totalRecords / $item_per_page);
    ?>
    <!-----------So San pham trong 1 trang----------->

    <div class="products">
        <div class="container">
            <h1 class="lg-title">Danh sách sản phẩm</h1>
            <div class="product-items">
                <!-- single product -->
                <?php while ($row = mysqli_fetch_array($products)) { ?>
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img src="<?= $row["image"] ?>" title="<?= $row[
  "name"
] ?>" />
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn-buy">
                                <a href="detailpro.php?id=<?= $row[
                                  "id"
                                ] ?>"> MUA NGAY</a>
                                <span><i class="fas fa-shopping-cart"></i></span>
                            </button>
                        </div>
                        </br>
                        <strong><?= $row["name"] ?></strong><br />
                        <label>Giá: </label><span class="product-price"><?= number_format(
                          $row["price"],
                          0,
                          ",",
                          "."
                        ) ?> đ</span><br />
                    </div>
                </div>
                <?php } ?>
                <!-- single product -->
            </div>
            <!-----------Phan--Trang----------->
            <div class="clear-both"></div>
            <?php include "./pagination.php"; ?>
            <div class="clear-both"></div>
            <!-----------Phan--Trang----------->
        </div>
    </div>
</body>

</html>