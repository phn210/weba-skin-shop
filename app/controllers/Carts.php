<?php
class Carts extends Controller {
    public function __construct() {
        $this->productModel = $this->model('Product');
        $this->imageModel = $this->model('Image');
        $this->customerModel = $this->model('Customer');
        $this->orderModel = $this->model('Order');
        $this->orderItemModel = $this->model('OrderItem');

    }

    public function addItemToCart($item = []) {
        $item = array_values($item);

        $params = [
            'product_id' => 0,
            'quantity' => 1
        ];

        if(isset($item[0])) {
            $params['product_id'] = strip_tags($item[0]);
            if(isset($item[1])) {
                $params['quantity'] = strip_tags($item[1]);
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
        var_dump($_SESSION);
           
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
            $id = strip_tags($_GET['id']);
            $quantity = strip_tags($_GET['quantity']);
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

    public function removeItemFromCart($product_id = []){
        $product_id = strip_tags(array_values($product_id)[0]);

        if(isset($product_id)) {
            if (isset($_SESSION['Cart'])) {
                $product_ids = array_column($_SESSION['Cart'], 'product_id');
                if (in_array($product_id, $product_ids)) {
                    $key = array_search($product_id, $product_ids);
                    unset($_SESSION['Cart'][$key]);
                    $_SESSION['Cart'] = array_values($_SESSION['Cart']);
                }
            }
        }
        unset($_SESSION['Cart']);
        
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
        $requestPayload = file_get_contents('php://input');
        $order = json_decode($requestPayload);
        //$this->view('carts/order_result', $data);
        
        $customer = [
            'id' => 0,
            'name' => preg_replace('/[^A-Za-z0-9 !@#$%^&*().]/u','', strip_tags($order->customer->name)),
            'email' => preg_replace('/[^A-Za-z0-9 !@#$%^&*().]/u','', strip_tags($order->customer->email)),
            'phone' => preg_replace('/[^A-Za-z0-9 !@#$%^&*().]/u','', strip_tags($order->customer->phone)),
            'address' => preg_replace('/[^A-Za-z0-9 !@#$%^&*().]/u','', strip_tags($order->customer->address)),
        ];

        $order_data = [
            'customer_id' => 0,
            'total_value' => preg_replace('/[^A-Za-z0-9 !@#$%^&*().]/u','', strip_tags($order->total_value)),
            'discount' => preg_replace('/[^A-Za-z0-9 !@#$%^&*().]/u','', strip_tags($order->discount*(-1))),
            'total_money' => preg_replace('/[^A-Za-z0-9 !@#$%^&*().]/u','', strip_tags($order->total_money)),
            'note' => preg_replace('/[^A-Za-z0-9 !@#$%^&*().]/u','', strip_tags($order->customer->note))
        ];
        
        $newCustomer = $this->customerModel->createCustomer($customer);

        if($newCustomer) {
            $customer['id'] = $this->customerModel->getLastRecord()->customer_id;
            
            $order_data['customer_id'] = $customer['id'];
            $newOrder = $this->orderModel->createOrder($order_data);
            
            if($newOrder) {
                $order_id = $this->orderModel->getLastRecord()->order_id;
                $items = [];
                $newItems = [];
                for ($i = 0; $i < count($order->order_items); $i++) {
                    array_push($items, [
                        'order_id' => $order_id,
                        'product_id' => preg_replace('/[^A-Za-z0-9 !@#$%^&*().]/u','', strip_tags($order->order_items[$i]->productId)),
                        'amount' => preg_replace('/[^A-Za-z0-9 !@#$%^&*().]/u','', strip_tags($order->order_items[$i]->amount)),
                        'total_money' => preg_replace('/[^A-Za-z0-9 !@#$%^&*().]/u','', strip_tags($order->order_items[$i]->totalMoney))
                    ]);

                    array_push($newItems, $this->orderItemModel->createOrderItem($items[$i]));
                }
                //var_dump($items);
            }
        }
        
        
    }
}