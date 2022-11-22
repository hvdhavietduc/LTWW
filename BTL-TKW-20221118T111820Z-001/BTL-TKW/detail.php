<!DOCTYPE html>
<html>

<head>
    <title>Chi tiết sản phẩm</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/detailStytes.css" />
</head>

<body>
    <?php
    include "./connect_db.php";
    $result = mysqli_query(
      $con,
      "SELECT * FROM `product` WHERE `id` = " . $_GET["id"]
    );
    $product = mysqli_fetch_assoc($result);
    $imgLibrary = mysqli_query(
      $con,
      "SELECT * FROM `image_library` WHERE `product_id` = " . $_GET["id"]
    );
    $product["images"] = mysqli_fetch_all($imgLibrary, MYSQLI_ASSOC);
    ?>

    <div class="container">
        <h2>Chi tiết sản phẩm</h2>
        <div id="product-detail">
            <div id="product-img">
                <img src="<?= $product["image"] ?>" />
            </div>
            <div id="product-info">
                <h1><?= $product["name"] ?></h1>
                <label>Giá: </label><span class="product-price"><?= number_format(
                  $product["price"],
                  0,
                  ",",
                  "."
                ) ?> VND</span><br />
                <label class="add-to-cart"><a href="#">Mua sản phẩm</a></label>
                <?php if (!empty($product["images"])) { ?>
                <div id="gallery">
                    <ul>
                        <?php foreach ($product["images"] as $img) { ?>
                        <li><img src="<?= $img["path"] ?>" /></li>
                        <?php } ?>
                    </ul>
                </div>
                <?php } ?>
            </div>
            <div class="clear-both"></div>
            <?= $product["content"] ?>
        </div>
    </div>
</body>

</html>