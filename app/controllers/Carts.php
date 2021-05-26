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
            $prod_ids = array_column($_SESSION['Cart'], 'product_id');
            if (is_array($ROWS->product_id, $prod_ids)) {
                $key = array_search($ROWS->product_id, $prod_ids);
                $_SESSION['CART'][$key]['qty']++;
            } else {
                $arr = array();
                $arr['product_id'] = $ROWS->product_id;
                $arr['qty'] = 1;

                $_SESSION['CART'][] = $arr;
            }
        } else {
            $arr = array();
            $arr['product_id'] = $ROWS->product_id;
            $arr['qty'] = 1;

            $_SESSION['CART'][] = $arr;
        }
        
        
    }

    public function createOrder(){
        
    }
}