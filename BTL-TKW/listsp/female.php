<!DOCTYPE html>
<html>

<head>
    <title>Male_Shoe</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listStyles.css" />
    <link rel="stylesheet" href="Ad.css" />

</head>

<body>
    <?php
        include "../header/header.php";

    ?>
    <style>
    <?php include '../header/header.css';
    ?>
    </style>
    <?php
    include "../Database_connect/database.php";
    $db = new Database();
    $item_per_page = !empty($_GET["per_page"]) ? $_GET["per_page"] : 16;
    $current_page = !empty($_GET["page"]) ? $_GET["page"] : 1;
    $offset = ($current_page - 1) * $item_per_page;
    $products = mysqli_query(
      $db->link,
      "SELECT * FROM `tblproduct`  WHERE gender='0' ORDER BY `id` ASC  LIMIT " .
        $item_per_page .
        " OFFSET " .
        $offset
    );
    $sql = "SELECT * FROM `tblproduct` WHERE gender='0'";

    $totalRecords = $db->select($sql);
    $totalRecords = $totalRecords->num_rows;
    $totalPages = ceil($totalRecords / $item_per_page);
    ?>

    <div class="slider">
        <div class="slides">
            <!--radio buttons start-->
            <input type="radio" name="radio-btn" id="radio1" />
            <input type="radio" name="radio-btn" id="radio2" />
            <input type="radio" name="radio-btn" id="radio3" />
            <input type="radio" name="radio-btn" id="radio4" />
            <!--radio buttons end-->
            <!--slide images start-->
            <div class="slide first">
                <img src="../img/imgheader.jpg" alt="" />
            </div>
            <div class="slide">
                <img src="../img/imgheader2.jpg" alt="" />
            </div>
            <div class="slide">
                <img src="../img/imgheader3.jpg" alt="" />
            </div>
            <div class="slide">
                <img src="../img/imgheader4.jpg" alt="" />
            </div>
            <!--slide images end-->
            <!--automatic navigation start-->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
            <!--automatic navigation end-->
        </div>
        <!--manual navigation start-->
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
        <!--manual navigation end-->
    </div>
    <!--image slider end-->

    <div class="container">
        <h1>Danh sách sản phẩm nữ</h1>
        <div class="row">
            <?php while ($row = mysqli_fetch_array($products)) { ?>
            <div class="product-item  col-lg-3 col-md-4 col-sm-6">
                <div class="itempro">
                    <div class="product-img">
                        <a href="../detail/detailpro.php?id=<?= $row["id"] ?>"><img src="<?= $row["linkimg"] ?>"
                                title="<?= $row["name"] ?>"></img></a>
                    </div>
                    <div class="nameandprice">
                        <strong><a
                                href="../detail/detailpro.php?id=<?= $row["id"] ?>"><?= $row["name"] ?></a></strong><br />
                        <label>Giá: </label><span class="product-price"><?= number_format(
                        $row["price"],
                        0,
                        ",",
                        "."
                        ) ?> đ</span><br />
                    </div>

                    <div class="buy-button">
                        <a href="../detail/detailpro.php?id=<?= $row["id"] ?>">Mua sản phẩm</a>
                    </div>
                </div>
            </div>
            <?php } ?>

            <div class="clear-both"></div>
            <?php include "./pagination.php"; ?>
            <div class="clear-both"></div>
        </div>
    </div>
    <?php
        include "../footer/footer.php"
    ?>
    <style>
    <?php include "../footer/footer.css"

    ?>
    </style>

    <script src="Ad.js"></script>

</body>

</html>