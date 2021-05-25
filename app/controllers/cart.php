<?php
class Cart extends Controller{
    public function index() {
        $image_class = $this->load_model('Image');
        $DB = Database::newInstance();
        $ROWS = false;
        
        $prod_ids= array();
        if(isset($_SESSION['Cart'])) {
            $prod_ids = array_column($_SESSION['Cart'], 'product_id');
            $ids = "'" . implode("','", $prod_ids) . "'";
            $ROWS = $DB->read("select * from products where product_id in ($ids)");
        }

        
        if (is_array($ROWS)) {
            foreach ($ROWS as $key => $row) {
                foreach ($_SESSION['Cart'] as $item) {
                    if ($row->product_id == $item['product_id']) {
                        $ROWS[$key]->cart_qty = $item['qty'];
                        
                    }
                }
            }
        }
        
        $data['page_title'] = "Cart";
        
        if($ROWS) {
            foreach ($ROWS as $key => $row) {
                $ROWS[$key]->image = $image_class->get_thumb_post($ROWS[$key]->image);
            }
        }

        $data['ROWS'] = $ROWS;
        $this->view("pages/cart",$data);
    }
}