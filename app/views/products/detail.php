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
          <!-- <div class="thumbnails"> -->
          <?php 
            for ($i = 0; $i < count($data['product_images']); $i++) {
            echo'
              <div class="thumbnails">
                <img class="sample-thumbnail" src="data:image/jpeg;base64,'.$data['product_images'][$i].'" alt="product_image">           
              </div>
            ';
          }
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
        <span id="product-id" style="display:none">'.$data['product']->product_id.'</span>
        <p>Hãng: '.$data['line']->name.' </p>
        <p>Xuất xứ:'.$data['product']->country.'</p>
        <p></p>
      </div>
          '
        ?>
        
      <div class="product_main_info">
        <?php
        if($data['product']->discount > 0) {
          echo '
          <div id="before-discount">'.$data['product']->price.'</div>
          <div id="after-discount">'.$data['product']->price*(1-$data['product']->discount).'</div>
          ';
        } else {
          echo '
          <div id="retail-price">'.$data['product']->price.'</div>
          ';
        }
        echo'
      </div>';
        ?>
      <div class="add_to_cart">
        <span class="quantity">
          Số lượng:
          <button id="btn_sub">-</button>
          <span id="quantity-to-add"></span>
        <button id="btn_add">+</button>
        </span>
        <button type="submit" id="add-to-cart">Add to cart</button>

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
        <button id="similar_prev"><img src="<?=URLROOT?>\public\img\left-arrow.png"></button>
        <div class="thumbnail-wrapper">
          <div class="thumbnails">
            <?php 
              $num = count($data['similar_products']);
              if ($num  > 10) {
                for ($i = 0; $i < 10; $i++) {
                echo'
                <div class="thumbnail">
                  <a href="'.URLROOT.'/products/detail/'.$data['similar_products'][$i]->product_id.'">
                    <img class="similar-thumbnail" src="data:image/jpeg;base64,'.$data['similar_images'][$i].'" alt="similar_ product_image">
                  </a>
                </div>';
                }
              }
              
              elseif($num > 0) {
                for ($i = 0; $i < $num; $i++) {
                  echo'
                <div class="thumbnail">
                  <a href="'.URLROOT.'/products/detail/'.$data['similar_products'][$i]->product_id.'">
                    <img src="data:image/jpeg;base64,'.$data['similar_images'][$i].'" alt="similar_ product_image">
                  </a>
                </div>';
                  }
              }
              else {
                echo "Không có sản phẩm tương tự.";
              }
          ?>
        </div>
      </div>        
        <button id="similar_next"><img src="<?=URLROOT?>\public\img\right-arrow.png"></button>

    </div>
  </section>

  <script src="<?=URLROOT?>/public/javascript/product_detail.js"></script>

<?php
    require_once '../app/views/common/footer.php';
?>