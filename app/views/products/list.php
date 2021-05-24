<?php
    require_once '../app/views/common/header.php';
?>
<section class="main_section">

<div class="product_directory">
  <img src="../img/home.png" alt="home_icon"> 
  Sản phẩm <span>/ Loại SP </span> <span>/ Hãng</span> <span>/ Tên SP</span>
</div>

<div class="container_product_list">
  <ul class="categories">
    <li class="type">
      <img src="" alt="type_image" />
      <a href="">
        <span>Laptop, macbook</span>
        <ul class="brand">
          <li class="brand">
            <a href="">
              <span>Dell</span>
            </a>   
          </li>
          <li class="brand">
            <a href="">
              <span>Asus</span>
            </a>   
          </li>
          <li class="brand">
            <a href="">
              <span>Acer</span>
            </a>   
          </li>
          <li class="brand">
            <a href="">
              <span>HP</span>
            </a>   
          </li>
          <li class="brand">
            <a href="">
              <span>Lenovo</span>
            </a>   
          </li>
          <li class="brand">
            <a href="">
              <span>Macbook</span>
            </a>   
          </li>
          <!-- <li class="brand">
            <a href="">
              <span>Brand Name</span>
              <ul class="product_line">
                <li class="product_line"><a href="">Product Line</a></li>
                <li class="product_line"><a href="">Product Line</a></li>
              </ul>
            </a>
          </li> -->
        </ul>
      </a>
    </li>
    <li class="type">
    <img src="" alt="type_image" />
      <a href="">
        <span>Điện thoại</span>
        <ul class="brand">
          <li class="brand">
            <img src="" alt="Iphone_logo" />
            <a href="">
              <span>Iphone</span>
              <ul class="product_line"> 
                <li class="product_line"><a href="">Iphone 6, 6s, 6 plus, 6s plus</a></li>
                <li class="product_line"><a href="">Iphone 7, 7 plus</a></li>
                <li class="product_line"><a href="">Iphone 8, 8 plus</a></li>
                <li class="product_line"><a href="">Iphone X, Xs Max</a></li>
              </ul>
            </a>
          </li>
          <li class="brand">
            <img src="" alt="Samsung_logo" />
            <a href="">
              <span>Samsung</span>
              <ul class="product_line">
                <li class="product_line"><a href="">Galaxy s7</a></li>
                <li class="product_line"><a href="">Galaxy s8</a></li>
                <li class="product_line"><a href="">Galaxy s9</a></li>
              </ul>
            </a>
          </li>
        </ul>
      </a>
    </li>
    <li class="type">
      <img src="" alt="type_image" />
      <a href="">
        <span>Ipad</span>
      </a>
    </li>
    <li class="type">
      <img src="" alt="type_image" />
      <a href="">
        <span>Máy ảnh</span>
      </a>
    </li>
  </ul>

  <div class="sort"></div>
  <div class="product_list">
  <?php
    $sql = 'select * from product';
    include('../libraries/Database');
    $result = $this->Database->query($sql);
    // for ( $i = 1; $i <=4; $i++) {
      while($row = mysqli_fetch_array($result))  
                {  
                  echo '   
                      <!-- <div class="product">
                      <a href="detail.php?id = <?php echo $row[id]?>">
                        <img src="src="data:image/jpeg;base64,'.base64_encode($row['product_name'] ).'" height="200" width="200" class="img-thumnail"" alt="product_image">
                        <p>Product name</p>
                      </a>
                      <div class="product_prices">
                        <div id="retail_price">200.000</div>
                        <div id="discounted">100.000</div>
                      </div>
                    </div>
                  ';  
                } 
    

    ?>
    <!-- <div class="product">
      <a href="">
        <img src="../img/test1.jpg" alt="product_image">
        <p>Product name</p>
      </a>
      <div class="product_prices">
        <div id="retail_price">200.000</div>
        <div id="discounted">100.000</div>
      </div>
    </div>
    <div class="product">
      <a href="">
        <img src="../img/test2.jpg" alt="product_image">
        <p>Product name</p>
      </a>
      <div class="product_prices">
        <div id="retail_price">200.000</div>
        <div id="discounted">100.000</div>
      </div>
    </div>
    <div class="product">
      <a href="">
        <img src="../img/test3.jpg" alt="product_image">
        <p>Product name</p>
      </a>
      <div class="product_prices">
        <div id="retail_price">200.000</div>
        <div id="discounted">100.000</div>
      </div>
    </div>
    <div class="product">
      <a href="">
        <img src="../img/test4.jpg" alt="product_image">
        <p>Product name</p>
      </a>
      <div class="product_prices">
        <div id="retail_price">200.000</div>
        <div id="discounted">100.000</div>
      </div>
    </div>
    <div class="product">
      <a href="">
        <img src="../img/test1.jpg" alt="product_image">
        <p>Product name</p>
      </a>
      <div class="product_prices">
        <div id="retail_price">200.000</div>
        <div id="discounted">100.000</div>
      </div>
    </div> -->
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