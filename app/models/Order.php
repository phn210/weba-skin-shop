<?php
class Order {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function createOrder(){
        // Prepare statement
        $this->db->query('INSERT INTO orders() ');

        // Bind parameters with variables
        $this->db->bind(':name', $name);

        return $this->db->resultSet();
    }

}
