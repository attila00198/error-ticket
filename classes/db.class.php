<?php

class DB {
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "ticket_handler";

    protected function connect() {
        $dsn = "mysql:dbhost={$this->db_host};dbname={$this->db_name}";
        try {
            $conn = new PDO($dsn, $this->db_user, $this->db_pass);
            return $conn;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
            die();
        }
    }
}