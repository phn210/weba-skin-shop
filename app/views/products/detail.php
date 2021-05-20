<?php
    require_once '../app/views/common/header.php';
?>

<div class="product_directory">Home / Type / Brand / Product</div>
<br>
<div class="product_overview">
    <div class="samples">
        <img src="test.jpg" style="width:auto;height:200px;">
        <div class="others">
            <img src="test.jpg" style="width:auto;height:50px;">
            <img src="test.jpg" style="width:auto;height:50px;">
            <img src="test.jpg" style="width:auto;height:50px;">
        </div>
    </div>
    <div class="main_info">Product Main Info (name, brand, country, price, warranty...)</div>
    <div class="add_to_cart">Add product to cart with editable amount</div>
</div>
<hr>
<div class="product_detail">Product's details (description...)</div>
<div class="similars">Similar products with thumbnail picture</br>
    <a href=''>Redirect to selected product's page</a>
</div>

<?php
    require_once '../app/views/common/footer.php';
?>