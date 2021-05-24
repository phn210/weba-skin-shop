<?php
    require_once '../app/views/common/header.php';
?>

<?php
    var_dump($data['products']);
?>

<section class="main_section">

<div class="product_directory">
  <img src="<?=URLROOT?>/public/img/home.png" alt="home_icon"> Trang chủ / Tìm kiếm với từ khóa: <span><?php echo $data['keyword'] ?></span>
</div>

<div class="container_product_list">
  <ul class="categories">
    <?php
    foreach($data['devices'] as $device) {
      echo'
      <li class="type"> 
        <a href="'.URLROOT.'/products/list/'.$device->device_id.'">
          <h2>'.$device->name.'</h2>
          <ul class="brands">
      ';

      foreach($device->brands as $brand){
        echo
        '   <li class="brand">
              <a href="'.URLROOT.'/products/list/'.$device->device_id.'/'.$brand->brand_id.'">
              <h3>'.$brand->name.'</h3>
              <ul class="product_lines">
        ';

        foreach($brand->productLines as $productLine) {
          
          echo'
                <li class="product_line">
                  <a href="'.URLROOT.'/products/list/'.$device->device_id.'/'.$brand->brand_id.'/'.$productLine->line_id.'">
                    <h4>'.$productLine->name.'</h4>
                  </a>
                </li>
          ';
        }

        echo'
              </ul>
            </a>
          </li>
        ';
      }

      echo' 
         </ul>
        </a>
      </li>
      ';
    }
    ?>
  </ul>

  <div class="sort"></div>

  <div class="product_list">
    <?php
    if(is_array($data['products'])){
      foreach($data['products'] as $product) {
        echo'
        <div class="product">
          <a href="'.URLROOT.'/products/list/'.$product->product_id.'">
            <img src="'.base64_encode($product->image).'" alt="product_image">
            <p>'.$product->name.'</p>
          </a>
          <div class="product_prices">
            <div id="retail_price">200.000</div>
            <div id="discounted">100.000</div>
          </div>
        </div>
        ';
      }
    } else if(is_null($data['products'])) {
        echo'None Founded';
    } else {
      echo'
        <div class="product">
          <a href="'.URLROOT.'/products/list/'.$products->product_id.'">
            <img src="'.base64_encode($products->image).'" alt="product_image">
            <p>'.$products->name.'</p>
          </a>
          <div class="product_prices">
            <div id="retail_price">200.000</div>
            <div id="discounted">100.000</div>
          </div>
        </div>
        ';
    }

    
    ?>
    
    <div class="page_control">
      <button><img src="../img/left-arrow.png" alt=""></button>
      <button>1</button>
      <button>2</button>
      <button>3</button>
      <button>...</button>
      <button>N</button>
      <button><img src="../img/right-arrow.png" alt=""></button>
    </div>
  </div>

</div>

</section>

<script src="<?=URLROOT?>/public/javascript/product_list.js"></script>

<?php
    require_once '../app/views/common/footer.php';
?>