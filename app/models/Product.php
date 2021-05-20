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
            return $this->db->fetchAll();
        } else 
            return [];
    }
}