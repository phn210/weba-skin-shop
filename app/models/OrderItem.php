<?php
class OrderItem {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function createOrderItem($data) {
        $this->db->query('INSERT INTO order_items 
                        VALUES(:order_id, :product_id, :amount, :total_money)');

        // Bind parameters with variables
        $this->db->bind(':order_id', $data['order_id']);
        $this->db->bind(':product_id', $data['product_id']);
        $this->db->bind(':amount', $data['amount']);
        $this->db->bind(':total_money', $data['total_money']);

        return $this->db->execute();
    }

}