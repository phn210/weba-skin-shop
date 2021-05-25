<?php
    require_once '../app/views/common/header.php';
?>

<?php //var_dump($data['layer'], $data['names'])?>


<section class="main_section">

<div class="product_directory">
  <img src="<?=URLROOT?>/public/img/home.png" alt="home_icon"> 
  Sản phẩm
  <?php
  foreach($data['names'] as $name){
    echo'<span>/ '. $name .' </span>';
  }
  ?>
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
      if(count($data['products']) > 0){
        foreach($data['products'] as $product) {
          echo'
          <div class="product">
            <a href="'.URLROOT.'/products/detail/'.$product->product_id.'">
              <img src="data:image/jpeg;base64,'.$product->image.'" alt="product_image">
              <p>'.$product->name.'</p>
            </a>
            <div class="product_prices">
          ';
            if($product->discount > 0) {
              echo '
              <div id="before-discount">'.$product->price.'</div>
              <div id="after-discount">'.$product->price*(1-$product->discount).'</div>
              ';
            } else {
              echo '
              <div id="retail-price">'.$product->price.'</div>
              ';
            }
              
          echo'
            </div>
          </div>
          ';
        }
      
      } else {
          echo 'Không tìm thấy kết quả phù hợp!';
      }
    ?>
    
    <div class="page_control">
      <button><img src="<?=URLROOT?>/public/img/left-arrow.png" alt=""></button>
      <button>1</button>
      <button>2</button>
      <button>3</button>
      <button>...</button>
      <button>N</button>
      <button><img src="<?=URLROOT?>/public/img/right-arrow.png" alt=""></button>
    </div>
  </div>

</div>

</section>

<script src="<?=URLROOT?>/public/javascript/product_list.js"></script>

<?php
    require_once '../app/views/common/footer.php';
?>