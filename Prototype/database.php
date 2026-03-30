<?php
class database {
    private $host = "localhost";
    private $dbname = "solidb";
    private $username = "root";
    private $password = "";

    public $conn;

    public function getConnection() {
        $this->conn = new PDO(
            "mysql:host=" . $this->host . ";dbname=" . $this->dbname,
            $this->username,
            $this->password
        );
        return $this->conn;
    }
}