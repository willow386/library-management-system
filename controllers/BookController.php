<?php
require_once '../models/Book.php';

class BookController{
    public function addBook($data){
        $book = new Book();
        $book->create($data['title'], $data['author'], $data['isbn'], $data['copies']);
    }
}