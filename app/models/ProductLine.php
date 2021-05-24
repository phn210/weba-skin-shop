<?php
class ProductLine {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findById($line_id) {
        // Prepare statement
        $this->db->query('SELECT * FROM product_lines WHERE line_id = :line_id');

        // Bind parameters with variables
        $this->db->bind(':line_id', $line_id);

        return $this->db->single();
    }

    public function getLinesByDeviceAndBrand($device_id, $brand_id) {
        // Prepare statement
        $this->db->query('SELECT * FROM product_lines WHERE device_id = :device_id AND brand_id = :brand_id');

        // Bind parameters with variables
        $this->db->bind(':device_id', $device_id);
        $this->db->bind(':brand_id', $brand_id);

        return $this->db->resultSet();
    }
}