<?php
class Products extends Controller {
    public function __construct() {
        $this->productModel = $this->model('Product');
    }

    public function detail($id) {
        $product = $this->productModel->getProductById($id);
        $this->view("products/detail", $product);
    }
}