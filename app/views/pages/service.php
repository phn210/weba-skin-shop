<?php
    require_once '../app/views/common/header.php';
?>
<body style="background: url(../img/service-background.png) no-repeat center/ 100%">
    <div class="product_directory">
      <img src="<?=URLROOT?>/public/img/home.png" alt="home_icon"> Service
    </div>
    <div class="service-content">
        <div class="service-design">
            <a href="<?=URLROOT?>/pages/design"><i class="fas fa-laptop"></i></a> Thiết kế đặt riêng
        </div>
        <div class="service-fix">
            <a href="<?=URLROOT?>/pages/design"><i class="fas fa-mobile-alt"></i></a> Xử lý skin bong tróc
        </div>
        <div class="service-print">
            <a href="<?=URLROOT?>/pages/design"><i class="fas fa-briefcase"></i></a> In và giao hàng tận nơi
        </div>
    </div>
</body>
<?php
    require_once '../app/views/common/footer.php';
?>