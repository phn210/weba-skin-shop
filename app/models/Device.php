<?php
class Device {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findById($id) {
        // Prepare statement
        $this->db->query('SELECT * FROM devices WHERE id = :id');

        // Bind parameters with variables
        $this->db->bind(':id', $id);

        return $this->db->single();

    }

    public function getAllDevices(){
        $this->db->query('SELECT * FROM devices');

        return $this->db->resultSet();
    }
}