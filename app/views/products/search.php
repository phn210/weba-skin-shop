<?php
    require_once '../app/views/common/header.php';
?>

<?php var_dump($data)?>

<section class="main_section">

<div class="product_directory">
  <img src="../img/home.png" alt="home_icon"> Trang chủ / Tìm kiếm với từ khóa: <span>keyword</span>
</div>

<div class="container_product_list">
  <ul class="categories">
    <li class="type">
      <a href="">
        <h2>Type 1</h2>
        <ul class="brands">
          <li class="brand">
            <a href="">
              <h3>Brand 1</h3>
              <ul class="product_lines">
                <li class="product_line">
                  <a href="">
                    <h4>Product Line</h4>
                  </a>
                </li>
                <li class="product_line">
                  <a href="">
                    <h4>Product Line</h4>
                  </a>
                </li>
              </ul>
            </a>
          </li>
          <li class="brand">
            <a href="">
              <h3>Brand 2</h3>
              <ul class="product_lines">
                <li class="product_line">
                  <a href="">
                    <h4>Product Line</h4>
                  </a>
                </li>
                <li class="product_line">
                  <a href="">
                    <h4>Product Line</h4>
                  </a>
                </li>
              </ul>
            </a>
          </li>
        </ul>
      </a>
    </li>
    <li class="type">
      <a href="">
        <h2>Type 2</h2>
        <ul class="brands">
          <li class="brand">
            <a href="">
              <h3>Brand 1</h3>
              <ul class="product_lines">
                <li class="product_line">
                  <a href="">
                    <h4>Product Line</h4>
                  </a>
                </li>
                <li class="product_line">
                  <a href="">
                    <h4>Product Line</h4>
                  </a>
                </li>
              </ul>
            </a>
          </li>
          <li class="brand">
            <a href="">
              <h3>Brand 2</h3>
              <ul class="product_lines">
                <li class="product_line">
                  <a href="">
                    <h4>Product Line</h4>
                  </a>
                </li>
                <li class="product_line">
                  <a href="">
                    <h4>Product Line</h4>
                  </a>
                </li>
              </ul>
            </a>
          </li>
        </ul>
      </a>
    </li>
    <li class="type">
      <a href="">
        <h2>Type 3</h2>
        <ul class="brands">
          <li class="brand">
            <a href="">
              <h3>Brand 1</h3>
              <ul class="product_lines">
                <li class="product_line">
                  <a href="">
                    <h4>Product Line</h4>
                  </a>
                </li>
                <li class="product_line">
                  <a href="">
                    <h4>Product Line</h4>
                  </a>
                </li>
              </ul>
            </a>
          </li>
          <li class="brand">
            <a href="">
              <h3>Brand 2</h3>
              <ul class="product_lines">
                <li class="product_line">
                  <a href="">
                    <h4>Product Line</h4>
                  </a>
                </li>
                <li class="product_line">
                  <a href="">
                    <h4>Product Line</h4>
                  </a>
                </li>
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
    </div>
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