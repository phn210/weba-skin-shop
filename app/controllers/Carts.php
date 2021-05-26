<?php
class Carts extends Controller {
    public function __construct() {
        $this->productModel = $this->model('Product');
        $this->imageModel = $this->model('Image');
        $this->orderModel = $this->model('Order');
    }

    public function createOrder(){
        
    }
}