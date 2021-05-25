<?php
class Add_to_cart extends Controller{
    public function index($product_id = '') {
        $product_id = addslashes($product_id);
        $DB = Database::newInstance();
        $ROWS = $DB->read("select * from products where product_id = 1",["product_id"=>$product_id]);
        
        if($ROWS) {
            $ROWS = $ROWS[0];
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
        unset($_SESSION['CART']);
    }
}
