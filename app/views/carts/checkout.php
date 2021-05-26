<?php
    require_once '../app/views/common/header.php';
?>

<?php //var_dump($data)?>
  <div class="main_section">
    <div class="containter_order">
      <div class="order_form">
        <h1>THÔNG TIN NGƯỜI ĐẶT HÀNG</h1>
        <form action="">
          <input type="text" name="" placeholder="Name" required id="name" class="form-control">
          <input type="email" name="" placeholder="Email" required id="email" class="form-control">
          <input type="tel" placeholder="Your Phone Number" required name="phone" id="" class="form-control" />
          <input type="text" name="" placeholder="Yêu cầu (nếu có)" id="note" class="form-control">
          <input class="form_button" type="submit" value="Gửi đơn hàng">
        </form>
      </div>

      <div class="order">
        <h2>Chi tiết đơn hàng</h2>
        <ul class="order_items">
        <?php
        $num = count($data['items']);
        for ($i = 0; $i < $num; $i++) {
          echo '
          <li class="order_item">
            <a href="'.URLROOT.'/products/detail/'.$data['products'][$i]->product_id.'"><img class="item_image" src="data:image/jpeg;base64,'.$data['products'][$i]->image.'"></a>
            <div class="item_info">
              <div class="item_name"><a href="'.URLROOT.'/products/detail/'.$data['products'][$i]->product_id.'">'.$data['products'][$i]->name.'</a></div>
              <div class="item_id">Mã: '.$data['products'][$i]->product_id.'</div>
              <div class="item_price">'
          ;
              if ($data['products'][$i]->discount > 0) {
                echo '
                <span id="before-discount">'.$data['products'][$i]->price.'</span>
                <span id="after-discount">'.$data['products'][$i]->price*(1-$data['products'][$i]->discount).'</span>
                <span class="discount" style="display:none">'.$data['products'][$i]->price*$data['products'][$i]->discount.'</span>
                ';
              } else {
                echo '
                <span class="discount" style="display:none">0</span>
                <span id="retail-price">'.$data['products'][$i]->price.'</span>
                ';
              }
              ;
              echo '<span class="final-price" style="display:none">'.$data['products'][$i]->price*(1-$data['products'][$i]->discount).'</span>
              </div>
            </div>
            <div class="quantity" style="float:right">
              <button class="btn_sub_item">-</button>
              <input class="item_amount" type="number" value="'.$data['items'][$i]['quantity'].'" readonly/>
              <button class="btn_add_item">+</button>
            </div>
            <button class="btn_del_item">x</button>
          </li>
          ';
        }
  
        ?> 
        </ul>

        <div class="order_summary">
          <p>Tổng giá trị đơn hàng <span id="total-value" class="money">100.000</span></p>
          <p>Khuyến mãi <span id="discount" class="money">-20.000</span></p>
          <p>Tổng tiền thanh toán <span id="total-money" class="money">80.000</span></p>
        </div>
      </div>
    </div>
  </div>

  <script src="<?=URLROOT?>/public/javascript/cart.js"></script>
<?php
    require_once '../app/views/common/footer.php';
?>