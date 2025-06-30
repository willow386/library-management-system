<?php
require_once '../core/Database.php';

class Book {
  private $conn;

  public function __construct() {
    $db = new Database();
    $this->conn = $db->getConnection();
  }

  public function create($title, $author, $isbn, $copies) {
    $stmt = $this->conn->prepare("INSERT INTO books (title, author, isbn, copies) VALUES (?, ?, ?, ?)");
    $stmt->execute([$title, $author, $isbn, $copies]);
  }
}
