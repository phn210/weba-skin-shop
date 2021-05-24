<?php
class Image{
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getProductThumbnail($productId) {
        // Prepare statement
        $this->db->query('SELECT * FROM image_product WHERE product_id = :product_id');

        // Bind parameters with variables
        $this->db->bind(':product_id', $productId);

        return $this->db->single();
    }

    public function getProductImages(){
        // Prepare statement
        $this->db->query('SELECT * FROM image_product WHERE product_id = :product_id');

        // Bind parameters with variables
        $this->db->bind(':product_id', $productId);

        return $this->db->resultSet();
    }

    public function getBrandLogo(){

    }


}