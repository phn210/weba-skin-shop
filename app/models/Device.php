<?php
class Device {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findById($device_id) {
        // Prepare statement
        $this->db->query('SELECT * FROM devices WHERE device_id = :device_id');

        // Bind parameters with variables
        $this->db->bind(':device_id', $device_id);

        return $this->db->single();

    }

    public function getAllDevices(){
        $this->db->query('SELECT * FROM devices');

        return $this->db->resultSet();
    }
}