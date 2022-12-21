<?php
class Operations
{
 
    private $db_host = '66.11.114.186';
    private $db_name = 'manueldy_escuela';
    private $db_username = 'manueldy_admin';
    private $db_password = 'jmgr95';
 
 
    public function dbConnection()
    {
 
        try {
            $conn = new PDO('mysql:host=' . $this->db_host . ';dbname=' . $this->db_name, $this->db_username, $this->db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection error " . $e->getMessage();
            exit;
        }
    }
}
