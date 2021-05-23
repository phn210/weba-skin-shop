<?php
    require_once '../app/views/common/header.php';
?>
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
        </ul>

        <div class="order_summary">
          <p>Tổng giá trị đơn hàng <span id="total-value" class="money">100.000</span></p>
          <p>Khuyến mãi <span id="discount" class="money">-20.000</span></p>
          <p>Tổng tiền thanh toán <span id="total-money" class="money">80.000</span></p>
        </div>
      </div>
    </div>
  </div>
<?php
    require_once '../app/views/common/footer.php';
?>