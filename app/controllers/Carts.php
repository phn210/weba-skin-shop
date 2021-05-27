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
                $_SESSION['Cart'][$key]['quantity'] += $params['quantity'];
            } else {
                $_SESSION['Cart'][] = $params;
            }
        } else {
            $_SESSION['Cart'][] = $params;
        }

        //unset($_SESSION['Cart']);
        //var_dump($_SESSION);
           
    }

    
    public function ajaxAddItemToCart() {
        /*
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
        */

        if(isset($_GET['id']) && isset($_GET['quantity'])){
            var_dump($_SESSION['Cart']);
            $id = $_GET['id'];
            $quantity = $_GET['quantity'];
            if (isset($_SESSION['Cart'])) {
                $product_ids = array_column($_SESSION['Cart'], 'product_id');
                if (in_array($id, $product_ids)) {
                    $key = array_search($id, $product_ids);
                    $_SESSION['Cart'][$key]['quantity'] += $quantity;
                } else {
                    $arr = array();
                    $arr['product_id'] = $id;
                    $arr['quantity'] = $quantity;
                    $_SESSION['Cart'][] = $arr;
                }
            } else {
                $arr = array();
                $arr['product_id'] = $id;
                $arr['quantity'] = $quantity;
                $_SESSION['Cart'][] = $arr;
            }
            unset($_SESSION['Cart']);
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
        /*
        if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email'])) {

        }
        */
        $requestPayload = file_get_contents('php://input');
        $order = json_decode($requestPayload);
        //$this->view('carts/order_result', $data);
        var_dump($order);

        
        
    }
}