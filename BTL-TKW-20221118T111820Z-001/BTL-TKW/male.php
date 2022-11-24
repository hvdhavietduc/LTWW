<!DOCTYPE html>
<html>

<head>
    <title>Male_Shoe</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listStyles.css" />
</head>

<body>

    <?php
    include "database.php";
    $db = new Database();
    $item_per_page = !empty($_GET["per_page"]) ? $_GET["per_page"] : 16;
    $current_page = !empty($_GET["page"]) ? $_GET["page"] : 1;
    $offset = ($current_page - 1) * $item_per_page;
    $products = mysqli_query(
      $db->link,
      "SELECT * FROM `tblproduct`  WHERE gender='1' ORDER BY `id` ASC  LIMIT " .
        $item_per_page .
        " OFFSET " .
        $offset
    );
    $sql = "SELECT * FROM `tblproduct` WHERE gender='1'";

    $totalRecords = $db->select($sql);
    $totalRecords = $totalRecords->num_rows;
    $totalPages = ceil($totalRecords / $item_per_page);
    ?>
    <div class="imgheader">
            <img src="img/imgheader.png">
    </div>
    <div class="container">
        <h1>Danh sách sản phẩm</h1>
        <div class="product-items">
            <?php while ($row = mysqli_fetch_array($products)) { ?>
            <div class="product-item">
                <div class="product-img">
                    <a href="detailpro.php?id=<?= $row["id"] ?>"><img src="<?= $row["linkimg"] ?>" title="<?= $row["name"] ?>" ></img></a>
                </div>
                <div class="nameandprice">
                    <strong><a href="detailpro.php?id=<?= $row["id"] ?>"><?= $row["name"] ?></a></strong><br />
                    <label>Giá: </label><span class="product-price"><?= number_format(
                    $row["price"],
                    0,
                    ",",
                    "."
                    ) ?> đ</span><br />
                </div>
                
                <div class="buy-button">
                    <a href="detailpro.php?id=<?= $row["id"] ?>">Mua sản phẩm</a>
                </div>
            </div>
            <?php } ?>

            <div class="clear-both"></div>
            <?php include "./pagination.php"; ?>
            <div class="clear-both"></div>
        </div>
    </div>
</body>

</html>