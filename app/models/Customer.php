<?php
class Customer {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function createCustomer(){
        // Prepare statement
        $this->db->query('INSERT INTO customers(name, email, address, phone, createAt) 
                        VALUES(:name, :email, :address, :phone, NOW())');

        // Bind parameters with variables
        $this->db->bind(':name', $name);

        return $this->db->resultSet();
    }

}
