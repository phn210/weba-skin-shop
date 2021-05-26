<?php
class Products extends Controller {
    public function __construct() {
        $this->productModel = $this->model('Product');
        $this->deviceModel = $this->model('Device');
        $this->brandModel = $this->model('Brand');
        $this->productLineModel = $this->model('ProductLine');
        $this->imageModel = $this->model('Image');
         
    }
    
    public function detail($id = []) {
        $id = array_values($id);
        $product_id = $id[0];
        $product = $this->productModel->findById($product_id);
        $line = $this->productLineModel->findById($product->product_line_id);
        // $image = $this->imageModel->getProductThumbnail($product_id);
        $image = base64_encode($this->imageModel->getProductThumbnail($product_id));
        $data = [
            'product' => $product,
            'line' => $line,
            'image' => $image
        ];
        $this->view("products/detail", $data);

       
    }

    
    public function list($category = []){
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


        // Product list
        $category = array_values($category);
        $layer = 0;
        $products = [];
        $params = [
            'device_id' => 0,
            'brand_id' => 0,
            'product_line_id' => 0
        ];
        $names = [];

        if(isset($category[0])) {
            $layer = 1;
            $params['device_id'] = $category[0];
            $foundDevice = $this->deviceModel->findById($params['device_id']);
            if (count(array($foundDevice)) > 0) array_push($names, $foundDevice->name);
            if(isset($category[1])) {
                $layer = 2;
                $params['brand_id'] = $category[1];
                $foundBrand = $this->brandModel->findById($params['brand_id']);
                if(count(array($foundBrand)) > 0) array_push($names, $foundBrand->name);
                if(isset($category[2])) {   
                    $layer = 3;
                    $params['product_line_id'] = $category[2];
                    $foundProductLine = $this->productLineModel->findById($params['product_line_id']);
                    if(count(array($foundProductLine)) > 0) array_push($names, $foundProductLine->name);
                }
            }
        }

        switch ($layer){
            case 0:
                $products = $this->productModel->getAllProducts();
                break;
            case 1:
                $products = $this->productModel->findByDevice($params['device_id']);
                break;
            case 2:
                $products = $this->productModel->findByDeviceAndBrand($params['device_id'], $params['brand_id']);
                break;
            case 3:
                $products = $this->productModel->findByProductLine($params['product_line_id']);
                break;
            default: break;
        }

        foreach($products as $product){
            $product->image = base64_encode($this->imageModel->getProductThumbnail($product->product_id)->image);
        }

        $data = [
            'layer' => $layer,
            'names' => $names,
            'products' => $products,
            'devices' => $devices
        ];

        $this->view("products/list", $data);
    }
    

    public function search($keyword=[]) {

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
        if(isset($_GET["keyword"])) $keyword = $_GET["keyword"];
        else $keyword = "";
        $products = $this->productModel->findProductsByName($keyword);
        foreach($products as $product){
            $product->image = base64_encode($this->imageModel->getProductThumbnail($product->product_id)->image);
        }

        $data = [
            'keyword' => $keyword,
            'products' => $products,
            'devices' => $devices,
        ];
        $this->view("products/search", $data);
    }
}