<?php
    require_once '../app/views/common/header.php';
?>

<section class="main_section">

    <div class="product_directory">
      <img src="<?=URLROOT?>/public/img/home.png" alt="home_icon"> Trang chủ / Loại SP / Hãng / Tên SP
    </div>

    <div class="product_overview">
      <div class="spotlight">
        <button id="inner_prev"><img src="<?=URLROOT?>/public/img/left-arrow.png"></button>
        <img src="<?=URLROOT?>/public/img/test.jpg">
        <button id="inner_next"><img src="<?=URLROOT?>/public/img/right-arrow.png"></button>
      </div>
      <div class="samples">
        <button id="outer_prev"><img src="<?=URLROOT?>/public/img/left-arrow.png"></button>
        <img src="<?=URLROOT?>/public/img/test.jpg">
        <img src="<?=URLROOT?>/public/img/test.jpg">
        <img src="<?=URLROOT?>/public/img/test.jpg">
        <button id="outer_next"><img src="<?=URLROOT?>/public/img/right-arrow.png"></button>
      </div>
      <div class="product_name">
        Product Name
        <hr>
        <br>
        <p>Hãng: </p>
        <p>Xuất xứ:</p>
        <p></p>
      </div>
      <div class="product_main_info">
        <hr>
        <div id="retail_price">200.000</div>
        <div id="discounted">100.000</div>
      </div>
      <div class="add_to_cart">
        <div class="quantity">
          Số lượng:
          <button>-</button>
          <input type="number" value="1" readonly/>
          <button>+</button>
        </div>
        <button id="add_btn">Add to cart</button>

      </div>
    </div>

    <div class="product_detail">
      <br>
      <div class="tabs">
        <button>Mô tả sản phẩm</button>
        <button>Thông tin thêm</button>
      </div>
      <hr>
      <p class="tabs_content">Tabs' data</p>
      <p class="tabs_data">Tabs' loaded data</p>
    </div>

    <div class="similars">
      Sản phẩm tương tự
      <hr>
      <div class="similar_products">
        <button id="outer_prev"><img src="<?=URLROOT?>/public/img/left-arrow.png"></button>
        <img src="<?=URLROOT?>/public/img/test.jpg">
        <img src="<?=URLROOT?>/public/img/test.jpg">
        <img src="<?=URLROOT?>/public/img/test.jpg">
        <img src="<?=URLROOT?>/public/img/test.jpg">
        <img src="<?=URLROOT?>/public/img/test.jpg">
        <img src="<?=URLROOT?>/public/img/test.jpg">
        <button id="outer_next"><img src="<?=URLROOT?>/public/img/right-arrow.png"></button>
      </div>
    </div>
  </section>

<?php
    require_once '../app/views/common/footer.php';
?>