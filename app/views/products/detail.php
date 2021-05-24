<?php
    require_once '../app/views/common/header.php';
?>

<section class="main_section">

    <div class="product_directory">
      <img src="../img/home.png" alt="home_icon"> Trang chủ / Loại SP / Hãng / Tên SP
    </div>

    <div class="product_overview">
      <div class="spotlight">
        <!--<button id="inner_prev"><img src="../img/left-arrow.png"></button>
        
        <button id="inner_next"><img src="../img/right-arrow.png"></button>-->
        <img id="featured" src="">
      </div>
      <div class="samples">
        <button id="sample_prev"><img src="../img/left-arrow.png"></button>
        <div class="thumbnail-wrapper">
          <div class="thumbnails">
            <img class="sample-thumbnail" src="../img/test1.jpg">
            <img class="sample-thumbnail" src="../img/test2.jpg">
            <img class="sample-thumbnail" src="../img/test3.jpg">
            <img class="sample-thumbnail" src="../img/test4.jpg">
            <img class="sample-thumbnail" src="../img/test1.jpg">
            <img class="sample-thumbnail" src="../img/test2.jpg">
            <img class="sample-thumbnail" src="../img/test3.jpg">
            <img class="sample-thumbnail" src="../img/test4.jpg">
          </div>
        </div>
        <button id="sample_next"><img src="../img/right-arrow.png"></button>
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
        <span class="quantity">
          Số lượng:
          <button id="btn_sub">-</button>
          <span id="quantity-to-add"></span>
        <button id="btn_add">+</button>
        </span>
        <button id="add_to_cart">Add to cart</button>

      </div>
    </div>

    <div class="product_detail">
      <br>
      <div class="tabs">
        <button class="tab">Mô tả sản phẩm</button>
        <button class="tab">Thông tin thêm</button>
      </div>
      <hr>
      <p class="tabs_content"></p>
      <p class="tabs_data">Tab 1</p>
      <p class="tabs_data">Tab 2</p>
    </div>

    <div class="similars">
      Sản phẩm tương tự
      <hr>
      <div class="similar_products">
        <button id="similar_prev"><img src="../img/left-arrow.png"></button>
        <div class="thumbnail-wrapper">
          <div class="thumbnails">
            <img class="similar-thumbnail" src="../img/test1.jpg">
            <img class="similar-thumbnail" src="../img/test2.jpg">
            <img class="similar-thumbnail" src="../img/test3.jpg">
            <img class="similar-thumbnail" src="../img/test4.jpg">
            <img class="similar-thumbnail" src="../img/test1.jpg">
            <img class="similar-thumbnail" src="../img/test2.jpg">
            <img class="similar-thumbnail" src="../img/test3.jpg">
            <img class="similar-thumbnail" src="../img/test4.jpg">
            <img class="similar-thumbnail" src="../img/test1.jpg">
            <img class="similar-thumbnail" src="../img/test2.jpg">
            <img class="similar-thumbnail" src="../img/test3.jpg">
            <img class="similar-thumbnail" src="../img/test4.jpg">
            <img class="similar-thumbnail" src="../img/test1.jpg">
            <img class="similar-thumbnail" src="../img/test2.jpg">
            <img class="similar-thumbnail" src="../img/test3.jpg">
            <img class="similar-thumbnail" src="../img/test4.jpg">


          </div>
        </div>
        <button id="similar_next"><img src="../img/right-arrow.png"></button>
      </div>
    </div>
  </section>

  <script src="<?=URLROOT?>/public/javascript/product_detail.js"></script>

<?php
    require_once '../app/views/common/footer.php';
?>