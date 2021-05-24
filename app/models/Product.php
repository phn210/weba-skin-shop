<?php
class Product {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findProductsByName($name) {
        // Prepare statement
        $this->db->query('SELECT * FROM products WHERE name LIKE "%":name"%"');

        // Bind parameters with variables
        $this->db->bind(':name', $name);

        return $this->db->resultSet();

    }

    public function findById($product_id) {
        // Prepare statement
        $this->db->query('SELECT * FROM products WHERE product_id = :product_id');

        // Bind parameters with variables
        $this->db->bind(':product_id', $product_id);

        return $this->db->single();

    }

    public function getAllProducts(){
        // Prepare statement
        $this->db->query('SELECT * FROM products');

        // Get result set
        return $this->db->resultSet();
    }
}