<?php
class Brand {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findById($id) {
        // Prepare statement
        $this->db->query('SELECT * FROM brands WHERE id = :id');

        // Bind parameters with variables
        $this->db->bind(':id', $id);

        // Check result
        if($this->db->rowCount() > 0) {
            return $this->db->single();
        } else 
            return [];
    }
}