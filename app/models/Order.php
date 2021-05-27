<?php
class Order {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function createOrder($data){
        // Prepare statement
        $this->db->query('INSERT INTO orders(customer_id, createAt, total_value, discount, total_money, note) 
                        VALUES(:customer_id, :createAt, :total_value, :discount, :total_money, :note)');

        // Bind parameters with variables
        $this->db->bind(':customer_id', $data['customer_id']);
        $this->db->bind(':createAt', date("Y-m-d H:i:s"));
        $this->db->bind(':total_value', $data['total_value']);
        $this->db->bind(':discount', $data['discount']);
        $this->db->bind(':total_money', $data['total_money']);
        $this->db->bind(':note', $data['note']);

        return $this->db->execute();
    }

    public function getLastRecord(){
        $this->db->query('SELECT order_id FROM orders ORDER BY order_id DESC LIMIT 1');

        return $this->db->single();
    }

}
