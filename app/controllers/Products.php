<?php
class Products extends Controller {
    public function __construct() {
        $this->productModel = $this->model('Product');
        $this->deviceModel = $this->model('Device');
        $this->brandModel = $this->model('Brand');
        $this->productLineModel = $this->model('ProductLine');
        $this->imageModel = $this->model('Image');
         
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

        // Categories container
        $devices = $this->deviceModel->getAllDevices();
        
        
        foreach($devices as $device) {
            $brands = $this->brandModel->getBrandsByDevice($device->device_id);
            foreach($brands as $brand) {
                $productLines = $this->productLineModel->getLinesByDeviceAndBrand($device->device_id, $brand->brand_id);
                $brand->productLines = $productLines;
            }
            $device->brands =  $brands;
            
        }   

        // Search result
        $products = $this->productModel->findProductsByName($keyword);
        foreach($products as $product){
            $product->image=json_decode($product->image);
        }

        $data = [
            'keyword' => $keyword,
            'products' => $products,
            'devices' => $devices,
        ];
        $this->view("products/search", $data);
    }
}