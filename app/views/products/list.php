<?php
    require_once '../app/views/common/header.php';
?>
<section class="main_section">

<div class="product_directory">
  <img src="<?=URLROOT?>/public/img/home.png" alt="home_icon"> Trang chủ / Loại SP / Hãng / Tên SP
</div>

<div class="container_product_list">
  <ul class="categories">
    <li class="type">
      <a href="">
        <span>Type Name</span>
        <ul class="brand">
          <li class="brand">
            <a href="">
              <span>Brand Name</span>
              <ul class="product_line">
                <li class="product_line"><a href="">Product Line</a></li>
                <li class="product_line"><a href="">Product Line</a></li>
              </ul>
            </a>
          </li>
          <li class="brand">
            <a href="">
              <span>Brand Name</span>
              <ul class="product_line">
                <li class="product_line"><a href="">Product Line</a></li>
                <li class="product_line"><a href="">Product Line</a></li>
              </ul>
            </a>
          </li>
        </ul>
      </a>
    </li>
    <li class="type">
      <a href="">
        <span>Type Name</span>
        <ul class="brand">
          <li class="brand">
            <a href="">
              <span>Brand Name</span>
              <ul class="product_line">
                <li class="product_line"><a href="">Product Line</a></li>
                <li class="product_line"><a href="">Product Line</a></li>
              </ul>
            </a>
          </li>
          <li class="brand">
            <a href="">
              <span>Brand Name</span>
              <ul class="product_line">
                <li class="product_line"><a href="">Product Line</a></li>
                <li class="product_line"><a href="">Product Line</a></li>
              </ul>
            </a>
          </li>
        </ul>
      </a>
    </li>
  </ul>

  <div class="sort"></div>
  <div class="product_list">
    <div class="product">
      <a href="">
        <img src="<?=URLROOT?>/public/img/test.jpg" alt="product_image">
        <p>Product name</p>
      </a>
      <div class="product_prices">
        <div id="retail_price">200.000</div>
        <div id="discounted">100.000</div>
      </div>
    </div>
    <div class="product">
      <a href="">
        <img src="<?=URLROOT?>/public/img/test.jpg" alt="product_image">
        <p>Product name</p>
      </a>
      <div class="product_prices">
        <div id="retail_price">200.000</div>
        <div id="discounted">100.000</div>
      </div>
    </div>
    <div class="product">
      <a href="">
        <img src="<?=URLROOT?>/public/img/test.jpg" alt="product_image">
        <p>Product name</p>
      </a>
      <div class="product_prices">
        <div id="retail_price">200.000</div>
        <div id="discounted">100.000</div>
      </div>
    </div>
    <div class="product">
      <a href="">
        <img src="<?=URLROOT?>/public/img/test.jpg" alt="product_image">
        <p>Product name</p>
      </a>
      <div class="product_prices">
        <div id="retail_price">200.000</div>
        <div id="discounted">100.000</div>
      </div>
    </div>
    <div class="product">
      <a href="">
        <img src="<?=URLROOT?>/public/img/test.jpg" alt="product_image">
        <p>Product name</p>
      </a>
      <div class="product_prices">
        <div id="retail_price">200.000</div>
        <div id="discounted">100.000</div>
      </div>
    </div>
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

<?php
    require_once '../app/views/common/footer.php';
?>