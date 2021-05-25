<?php
    require_once '../app/views/common/header.php';
?>

<section class="main_section">

    <div class="product_directory">
      <img src="<?=URLROOT?>/public/img/home.png" alt="home_icon"> Trang chủ / Loại SP / Hãng / Tên SP
    </div>

    <div class="product_overview">
      <div class="spotlight">
        <!--<button id="inner_prev"><img src="../img/left-arrow.png"></button>
        
        <button id="inner_next"><img src="../img/right-arrow.png"></button>-->
        <img id="featured" src="">
      </div>
      <div class="samples">
        <button id="sample_prev"><img src="<?=URLROOT?>/public/img/left-arrow.png"></button>
        <div class="thumbnail-wrapper">
          <div class="thumbnails">
            <!-- <img class="sample-thumbnail" src="../img/test1.jpg">
            <img class="sample-thumbnail" src="../img/test2.jpg">
            <img class="sample-thumbnail" src="../img/test3.jpg">
            <img class="sample-thumbnail" src="../img/test4.jpg">
            <img class="sample-thumbnail" src="../img/test1.jpg">
            <img class="sample-thumbnail" src="../img/test2.jpg">
            <img class="sample-thumbnail" src="../img/test3.jpg">
            <img class="sample-thumbnail" src="../img/test4.jpg">
          </div> -->
          <?php 
            echo'
            <img class="sample-thumbnail" src="data:image/jpeg;base64,'.$data['image'].'" alt="product_image">
            
          </div>'
          ?>
        </div>
        <button id="sample_next"><img src="<?=URLROOT?>/public/img/right-arrow.png"></button>
      </div>
      <div class="product_name">
        <?php echo $data['product']->name?>
        <?php
          echo '
          <hr>
        <br>
        <p>Hãng: '.$data['line']->name.' </p>
        <p>Xuất xứ:'.$data['product']->country.'</p>
        <p></p>
      </div>
          '
        ?>
        
      <div class="product_main_info">
        <?php
          echo '
        <hr>
        <div id="retail_price">'.$data['product']->price.'</div>
        <div id="discounted">'.$data['product']->discount.'</div>
      </div>'
        ?>
      <div class="add_to_cart">
        <span class="quantity">
          Số lượng:
          <button id="btn_sub">-</button>
          <span id="quantity-to-add"></span>
        <button id="btn_add">+</button>
        </span>
        <button onclick="window.location.href='<?=URLROOT?>/pages/add_to_cart/<?=$data['product']->product_id?>'" id="add_to_cart">Add to cart</button>

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
      <p class="tabs_data"><?php echo $data['product']->description?></p>
      <p class="tabs_data">Kho: <?php echo $data['product']->quantity?></p>
    </div>

    <div class="similars">
      Sản phẩm tương tự
      <hr>
      <div class="similar_products">
        <button id="similar_prev"><img src="../img/left-arrow.png"></button>
        <div class="thumbnail-wrapper">
          <div class="thumbnails">
            <!-- <img class="similar-thumbnail" src="../img/test1.jpg">
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
            <img class="similar-thumbnail" src="../img/test4.jpg"> -->

            <?php 
            echo'
            <img class="similar-thumbnail" src="data:image/jpeg;base64,'.$data['image'].'" alt="product_image">
          </div>'
          ?>
        </div>
        <button id="similar_next"><img src="../img/right-arrow.png"></button>
      </div>
    </div>
  </section>

  <script src="<?=URLROOT?>/public/javascript/product_detail.js"></script>

<?php
    require_once '../app/views/common/footer.php';
?>