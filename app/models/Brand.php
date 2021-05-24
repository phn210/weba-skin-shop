<?php
class Brand {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findById($brand_id) {
        // Prepare statement
        $this->db->query('SELECT * FROM brands WHERE brand_id = :brand_id');

        // Bind parameters with variables
        $this->db->bind(':brand_id', $brand_id);

        return $this->db->single();
    }

    public function getBrandsByDevice($device_id){
        // Prepare statement
        $this->db->query('SELECT brands.* 
                        FROM brands, device_brand 
                        WHERE brands.brand_id = device_brand.brand_id 
                        AND device_id = :device_id');

        // Bind parameters with variables
        $this->db->bind(':device_id', $device_id);

        return $this->db->resultSet();
    }
}