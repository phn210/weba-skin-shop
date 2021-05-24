<?php
class Products extends Controller {
    public function __construct() {
        $this->productModel = $this->model('Product');
        $this->deviceModel = $this->model('Device');
        $this->brandMode = $this->model('Brand');
         
    }

    public function detail($id) {
        $product = $this->productModel->getProductById($id);
        $this->view("products/detail", $product);
    }

    public function list() {
        $products = $this->productModel->getAllProducts();
        $this->view("products/list", $products);
    }
    /*
    public function list($data){
        $products = [];

        $this->view("products/list", $products);
    }
    */

    public function search($keyword) {
        

        $this->view("products/search", $keyword);
    }
}