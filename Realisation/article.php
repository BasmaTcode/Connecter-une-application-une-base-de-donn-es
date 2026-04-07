<?php
class article {
    private $conn;
    private $table = "articles";

    public $id;
    public $title; 
    public $content;

    public function __construct($db) {
        $this->conn = $db;
    }

    // ✅ CREATE
    public function create() {
        $query = "INSERT INTO " . $this->table . " (title, content) VALUES (:title, :content)";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':content', $this->content);

        return $stmt->execute();
    }

    // ✅ READ 
    public function read() {
        $query = "SELECT * FROM " . $this->table . " ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt; // 
    }

    // ✅ UPDATE
    public function update() {
        $query = "UPDATE " . $this->table . " SET title = :title, content = :content WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':content', $this->content);
        $stmt->bindParam(':id', $this->id);

        return $stmt->execute();
    }

    // ✅ DELETE
    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $this->id);

        return $stmt->execute();
    }
}
?>