<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HomePage</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
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
                <li>
                  <?php 
                  if (isset($_SESSION['username'])){
                    echo " | Welcome ". $_SESSION['username'];


                    
                  } ?> 
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar">
        <ul class="navbar">
          <li class="navbar"><a href="#" class="navbar" >Home</a></li>
          <li class="navbar"><a href="../listsp/trangchu.php" class="navbar" >Cửa hàng</a></li>
          <li class="navbar"><a href="../listsp/male.php" class="navbar">Nam</a></li>
          <li class="navbar"><a href="../listsp/female.php" class="navbar">Nữ</a></li>
          
        </ul>
        <div class="account_cart">
          <?php
          if (isset($_SESSION['username'])){
            ?>
            <a href="../login/index.php" class="account_cart"><img src="../header/backicon.png" alt="HTML tutorial" style="width:42px;height:42px;"></a>
            <?php
          }
          ?>
          <a href="
            <?php 
              if (isset($_SESSION['username']) && $_SESSION['username']=="admin"){
                echo "../manage_product/manage.php";
              }
              else if (isset($_SESSION['username'])) echo "../inforuser/inforuser.php";
              else echo "../login/index.php";
            ?>" 
            class="account_cart"><img src="../header/avatar.png" alt="HTML tutorial" style="width:42px;height:42px;">
          <a href="#" class="account_cart"><img src="cart.png" alt="HTML tutorial" style="width:42px;height:42px;"></a>
        </div>
      </div>
      <a href="#" class="front_img"><img src="front_img.jpg" alt="HTML tutorial" style="
        max-width: 100%;
        height: auto;"></a>
      <p><span>Miễn phí vận chuyển</span> với hoá đơn hơn 1,5 triệu ở tất cả các tỉnh thành</p>
      <div class="row" id="row1">
        <a href="#" class="col-4"><img src="img1.png" alt="HTML tutorial"style="
          max-width: 100%;
          height: auto;" ></a>
        <a href="#" class="col-4"><img src="img2.png" alt="HTML tutorial"style="
          max-width: 100%;
          height: auto;" ></a>
        <a href="#" class="col-4"><img src="img3.png" alt="HTML tutorial" style="
          max-width: 100%;
          height: auto;"></a>
      </div><br>
      <p class="news">Chúng tôi có gì mới?</p>
      <div class="row" id="row2">
        <a href="#" class="col-3"><img src="img4.png" alt="HTML tutorial"style="
          max-width: 100%;
          height: auto;" ></a>
        <a href="#" class="col-6"><img src="img5.png" alt="HTML tutorial"style="
          max-width: 100%;
          height: auto;" ></a>
        <a href="#" class="col-3"><img src="img6.png" alt="HTML tutorial" style="
          max-width: 100%;
          height: auto;"></a>
      </div><br>
      <footer class="mainFooter ">
        <div class="footer-container">
          <div class="footer-expand-title">
            <p>
              Thông tin thêm 
              <span class="arrow-up"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
            </p>
          </div>
          <div class="footer-expand-collapsed ">
            <div class="container">
              <div class="row">
                <div class="row col-lg-8 col-12">
                  <div class="col-lg-4 col-12 widget-footer">
                    <h4 class="title-footer">VỀ BITI'S</h4>
                    <div class="content-footer block-collapse">				
                      <ul class="footerNav-link">
                        
                        <li class="item">
                          <a href="/pages/cau-chuyen-biti-s" title="Về Bitis">Về Bitis</a>
                        </li>
                        
                        <li class="item">
                          <a href="/pages/cau-chuyen-biti-s" title="Câu chuyện Biti's">Câu chuyện Biti's</a>
                        </li>
                        
                        <li class="item">
                          <a href="/pages/cau-chuyen-biti-s" title="Bước tiến phát triển">Bước tiến phát triển</a>
                        </li>
                        
                        <li class="item">
                          <a href="/pages/hoat-dong" title="Hoạt Động">Hoạt Động</a>
                        </li>
                        
                        <li class="item">
                          <a href="/pages/lien-he" title="Liên hệ">Liên hệ</a>
                        </li>
                          
                      </ul>			
                    </div>
                  </div>
                  <div class="col-lg-4 col-12 widget-footer">
                    <h4 class="title-footer">THÔNG TIN</h4>
                    <div class="content-footer block-collapse">				
                      <ul class="footerNav-link">
                        
                        <li class="item">
                          <a href="/pages/tra-cuu-tinh-trang-don-hang" title="Trạng thái đơn hàng">Trạng thái đơn hàng</a>
                        </li>
                        
                        <li class="item">
                          <a href="/pages/q-a" title="Hình thức giao hàng">Hình thức giao hàng</a>
                        </li>
                        
                        <li class="item">
                          <a href="/pages/hinh-thuc-thanh-toan" title="Hình thức thanh toán">Hình thức thanh toán</a>
                        </li>
                        
                        <li class="item">
                          <a href="/pages/chinh-sach-doi-tra" title="Chính sách đổi trả">Chính sách đổi trả</a>
                        </li>
                        
                        <li class="item">
                          <a href="/pages/chinh-sach-bao-hanh" title="Chính sách bảo hành">Chính sách bảo hành</a>
                        </li>
                        
                        <li class="item">
                          <a href="/pages/bitis-loyalty" title="Chính sách khách hàng thân thiết">Chính sách khách hàng thân thiết</a>
                        </li>
                          
                      </ul>			
                    </div>
                  </div>
                  <div class="col-lg-4 col-12 widget-footer">
                    <h4 class="title-footer">TRỢ GIÚP</h4>
                    <div class="content-footer block-collapse">				
                      <ul class="footerNav-link">
                        
                        <li class="item">
                          <a href="https://tuyendung.bitis.com.vn/" title="Tuyển Dụng">Tuyển Dụng</a>
                        </li>
                        
                        <li class="item">
                          <a href="/pages/he-thong-cua-hang" title="Hệ thống cửa hàng">Hệ thống cửa hàng</a>
                        </li>
                        
                        <li class="item">
                          <a href="/pages/lien-he-hop-tac" title="Liên hệ hợp tác">Liên hệ hợp tác</a>
                        </li>
                        
                        <li class="item">
                          <a href="/pages/q-a" title="Q&amp;A">Q&amp;A</a>
                        </li>
                          
                      </ul>			
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-12 lastCollum widget-footer">
                  <h4 class="title-footer d-block d-lg-none">Thông tin địa chỉ</h4>
                  <div class="content-footer block-collapse">				
                  
                    <div class="lineItemAddress">
                      <ul>
                        <li><b>CÔNG TY TNHH SẢN XUẤT HÀNG TIÊU DÙNG BÌNH TIÊN</b></li>
                        <li><b>Địa chỉ:</b> 22 Lý Chiêu Hoàng, Phường 10, Quận 6, TP. Hồ Chí Minh</li>
                        <li><b>Điện thoại:</b> <a href="tel:02838753443">(028) 38 753 443</a></li>
                      </ul>
                    </div>
                    <div class="lineItemAddress">
                      <ul>
                        <li><b>Email: Liên hệ các vấn đề về đặt hàng online :</b> <a href="mailto:tuvan_online@bitis.com.vn">tuvan_online@bitis.com.vn</a></li>
                        <li><b>Email: Liên hệ các vấn đề về kênh cửa hàng, đại lý (offline) :</b> <a href="mailto:chamsockhachhang@bitis.com.vn">chamsockhachhang@bitis.com.vn</a></li>
                      </ul>
                    </div>
                    <div class="lineItemAddress">
                      <ul>
                        <li><b>Hotline:</b> <a href="tel:19002126 ">19002126 ( cước phí: 3.000đ/phút )</a></li>
                        <li><b>Thời gian tư vấn:</b> Từ 07h30 đến 12h15, 13h15 đến 21h30 các ngày trong tuần ( Trừ ngày Lễ, Tết)</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
  </body>
</html>
