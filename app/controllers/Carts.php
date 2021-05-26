<?php
class Carts extends Controller {
    public function __construct() {
        $this->productModel = $this->model('Product');
        $this->imageModel = $this->model('Image');
        $this->orderModel = $this->model('Order');
    }

    public function addItemToCart($item = []) {
        $item = array_values($item);

        $params = [
            'product_id' => 0,
            'quantity' => 1
        ];

        if(isset($item[0])) {
            $params['product_id'] = $item[0];
            if(isset($item[1])) {
                $params['quantity'] = $item[1];
            }
        }

        if (isset($_SESSION['Cart'])) {
            $product_ids = array_column($_SESSION['Cart'], 'product_id');
            if (in_array($params['product_id'], $product_ids)) {
                $key = array_search($params['product_id'], $product_ids);
                $_SESSION['Cart'][$key]['quantity']++;
            } else {
                $_SESSION['Cart'][] = $params;
            }
        } else {
            $_SESSION['Cart'][] = $params;
        }

        //unset($_SESSION['Cart']);
        //var_dump($_SESSION);
           
    }

    public function checkout(){
        $items = isset($_SESSION['Cart']) ? $_SESSION['Cart'] : [];
        $products = [];
        foreach($items as $item){
            $product = $this->productModel->findById($item['product_id']);
            $product->image = base64_encode($this->imageModel->getProductThumbnail($item['product_id'])->image);
            $products[] = $product;
        }
        $data = [
            'items' => $items,
            'products' => $products
        ];

        $this->view("carts/checkout", $data);
    }

    public function createOrder(){
        
    }
}