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

  public function getAll() {
    $stmt = $this->conn->query("SELECT * FROM books");
    return $stmt->fetchAll();
  }

public function getById($id){
  $stmt = $this->conn->prepare("SELECT * FROM books WHERE id = ?");
  $stmt->execute([$id]);
  return $stmt->fetch();
}

public function update($id, $title, $author, $isbn, $copies) {
  $stmt = $this->conn->prepare("UPDATE books SET title = ?, author = ?, isbn = ? copies = ? WHERE id = ?");
  return $stmt->execute([$title, $author, $isbn, $copies, $id]);
}

public function delete($id){
  $stmt = $this->conn->prepare("DELETE FROM boks WHERE id = ?");
  return $stmt->execute([$id]);
}
}