<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
  class Customer {
    private $db;

    public function __construct() {
      $this->db = new Database;
    }
    public function addCustomer($data) {

      print_r($data);
      echo 'prepare query';


      // Prepare Query
      $this->db->query("INSERT INTO customers (id, first_name, last_name, email)VALUES(:id, :first_name, :last_name, :email)");

      echo 'inserted';

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':first_name', $data['first_name']);
      $this->db->bind(':last_name', $data['last_name']);
      $this->db->bind(':email', $data['email']);

      echo 'binded';


      // Execute
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }
    public function getCustomers() {
      $this->db->query('SELECT id, first_name, last_name, email, created_at
        FROM customers
        ORDER BY created_at DESC');

        $results = $this->db->resultset();
        return $results;
    }
  }
