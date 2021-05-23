<?php
class Product {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findProductByName($name) {
        // Prepare statement
        $this->db->query('SELECT * FROM products WHERE name = :name');

        // Bind parameters with variables
        $this->db->bind(':name', $name);

        // Check result
        if($this->db->rowCount() > 0) {
            return $this->db->resultSet();
        } else 
            return [];
    }

    public function getProductById($id) {
        // Prepare statement
        $this->db->query('SELECT * FROM products WHERE id = :id');

        // Bind parameters with variables
        $this->db->bind(':id', $id);

        // Check result
        if($this->db->rowCount() > 0) {
            return $this->db->single();
        } else 
            return [];
    }
}