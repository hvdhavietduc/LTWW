<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
        include "database.php";
        $db=new Database();
    ?>
    <div class="Trangchitiet">
        <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM tblproduct WHERE id='$id'";
            $products =$db->select($sql);
            $row = mysqli_fetch_array($products);
        ?>
        <div class="thongtinchitietsp">
            <div class="anhminhhoa">
                <img  src="<?= $row["linkimg"] ?>" alt="" class="mainimg"/>
                <div class="imgphu">
                    <img  src="<?= $row["linkimg"] ?>" alt="" class="phuimg"/>
                    <img  src="<?= $row["linkimg"] ?>" alt="" class="phuimg"/>
                    <img  src="<?= $row["linkimg"] ?>" alt="" class="phuimg"/>
                    <img src="<?= $row["linkimg"] ?>" alt="" class="phuimg"/>
                    <img  src="<?= $row["linkimg"] ?>" alt="" class="phuimg"/>
                    <img src="https://product.hstatic.net/1000230642/product/do_size_giay_48e2e41300b2421d8798287cba268179.jpg" alt="" class="phuimg"/>
                </div>
    
                
            </div>
            <div class="thongtin">
                <h1><?php echo $row["name"]?></h1>
                <p>(Trắng)</p>
                <h1 class='giatien'><?php echo $row["price"]?> đ</h1>
                <p>Tình trạng: Còn hàng</p>
                <h2>Kích thước</h2>
                <span class='sizegiay'>37</span>
                <span class='sizegiay'>38</span>
                <span class='sizegiay'>39</span>
                <span class='sizegiay'>40</span>
                <span class='sizegiay'>41</span>
                <span class='sizegiay'>42</span>
                <h2>Màu sắc</h2>
                <span class='mausacgiay'>Trắng</span>
                <span class='mausacgiay'>Đen</span>
                <div class="soluong">
                    <button onclick=decrease()>-</button>
                    <span id="volume">1</span>
                    <button onclick=increase()>+</button>
                </div>
                <div class="dattruocandtv">
                    <button class="dattruoc">Đặt trước</button>
                    <button class="tuvan">Tư vấn: 0966 158 666</button>
                </div>
                <div class="card-header">
                    <a class="collapsed btn" data-bs-toggle="collapse" href="#motasp">
                        <h2>Mô tả sản phẩm</h2>
                    </a>
                  </div>
                <div id="motasp" class="collapse" data-bs-parent="#accordion">
                <?php echo $row["description"]?>
                </div>
                <div class="card-header">
                    <a class="collapsed btn" data-bs-toggle="collapse" href="#doisize">
                      <h2>Chính sách đổi size</h2>
                    </a>
                  </div>
                  <div id="doisize" class="collapse" data-bs-parent="#accordion">
                        <p>
                            1. Đổi kích cỡ giày
                        </p>
                        <p>
                            Sản phẩm còn mới 100% chưa qua sử dụng hoặc giặt tẩy, nguyên phiếu bảo hành, tem nhãn sản phẩm, không bị dơ bẩn, trầy xước.
                        </p>
                        <p>
                            Khách hàng phải có hoá đơn giao hàng (phiếu giao hàng, email xác nhận đơn hàng).
                        </p>
                        <p>
                            Trong vòng 7 ngày kể từ ngày nhận hàng.
                        </p>
                        <p>
                            Áp dụng 01 sản phẩm được đổi lệch 01 size so với size đã mua và được đổi 01 lần.
                        </p>
                        <p>
                            Không hỗ trợ đổi mẫu theo nhu cầu.
                        </p>
                        
                  </div>
            </div>
        </div>
    </div>
    <?php
        include "../../BTL-LTW/BTL-LTW/footer/index.html"
    ?>
</body>
<script>
    function decrease(){
        const volume=document.getElementById('volume');
        x=Number(volume.innerText);
        if(x!=1) x--;
        volume.innerText=x;

    }
    function increase(){
        const volume=document.getElementById('volume');
        x=Number(volume.innerText);
        x++;
        volume.innerText=x;

    }
</script>
</html>