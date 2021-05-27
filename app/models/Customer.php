<?php
class Customer {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function createCustomer($data){
        // Prepare statement
        $this->db->query('INSERT INTO customers(name, email, address, phone, createAt) 
        VALUES(:name, :email, :address, :phone, :createTime)');

        // Bind parameters with variables
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':createTime', date("Y-m-d H:i:s"));

        return $this->db->execute(); 
    }

    public function getLastRecord(){
        $this->db->query('SELECT customer_id FROM customers ORDER BY customer_id DESC LIMIT 1');

        return $this->db->single();
    }

}
