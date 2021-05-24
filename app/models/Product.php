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

    public function findByDevice($device_id){
        // Prepare statement
        $this->db->query('SELECT products.* FROM products, product_lines
                        WHERE products.product_line_id = product_lines.line_id 
                        AND device_id = :device_id');

        // Bind parameters with variables
        $this->db->bind(':device_id', $device_id);

        return $this->db->resultSet();
    }

    public function findByDeviceAndBrand($device_id, $brand_id){
        // Prepare statement
        $this->db->query('SELECT products.* FROM products, product_lines
                        WHERE products.product_line_id = product_lines.line_id 
                        AND device_id = :device_id 
                        AND brand_id = :brand_id');

        // Bind parameters with variables
        $this->db->bind(':device_id', $device_id);
        $this->db->bind(':brand_id', $brand_id);

        return $this->db->resultSet();
    }

    public function findByProductLine($line_id){
        $this->db->query('SELECT products.* FROM products WHERE product_line_id = :line_id');

        // Bind parameters with variables
        $this->db->bind(':line_id', $line_id);

        return $this->db->resultSet();
    }

    public function getAllProducts(){
        // Prepare statement
        $this->db->query('SELECT * FROM products');

        // Get result set
        return $this->db->resultSet();
    }
}