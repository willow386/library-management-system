<?php
require_once '../models/Book.php';

class BookController{
    private $book;

    public function __construct(){
        $this->book = new Book();
    }

    public function addBook($data) {
        $this->book->create($data['title'], $data['author'], $data['isbn'], $data['copies']);
        header('Location: books.php');
        exit;
    }

    public function updateBook($id, $data){
        $this->book->update($id, $data['title'], $data['author'], $data['isbn'], $data['copies']);
        header('Location: books.php');
        exit;
    }

      public function deleteBook($id) {
    $this->book->delete($id);
    header('Location: books.php');
    exit;
  }

  public function getAllBooks() {
    return $this->book->getAll();
  }

  public function getBookById($id) {
    return $this->book->getById($id);
  }
}