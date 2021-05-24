<?php
class Products extends Controller {
    public function __construct() {
        $this->productModel = $this->model('Product');
        $this->deviceModel = $this->model('Device');
        $this->brandMode = $this->model('Brand');
         
    }

    public function detail($id) {
        $product = $this->productModel->getProductById($id);
        $data = [
            'product' => $product
        ];
        $this->view("products/detail", $product);
    }

    public function list() {
        $products = $this->productModel->getAllProducts();
        $data = [
            'products' => $products
        ];
        $this->view("products/list", $products);
    }
    /*
    public function list($data){
        $products = [];

        $this->view("products/list", $products);
    }
    */

    public function search($keyword) {
        $products = $this->productModel->getAllProducts();


        $data = [
            'keyword' => $keyword,
            'products' => $products
        ];
        $this->view("products/search", $data);
    }
}