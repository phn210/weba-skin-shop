<?php
class Product {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findProductByName($name) {
        // Prepare statement
        $this->db->query('SELECT * FROM products WHERE name like %:name%');

        // Bind parameters with variables
        $this->db->bind(':name', $name);

        return $this->db->resultSet();

    }

    public function findById($id) {
        // Prepare statement
        $this->db->query('SELECT * FROM products WHERE id = :id');

        // Bind parameters with variables
        $this->db->bind(':id', $id);

        return $this->db->single();

    }

    public function getAllProducts(){
        // Prepare statement
        $this->db->query('SELECT * FROM products');

        // Get result set
        return $this->db->resultSet();
    }
}