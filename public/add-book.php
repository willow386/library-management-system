<?php


require_once '../core/Session.php';
Session::start();

require_once '../controllers/BookController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new BookController();
    $controller->addBook($_POST);
}
?>


<h2>Add a Book</h2>
<form method="POST">
<input name="title" placeholder="Title" required><br>
<input name="author" placeholder="Author" required><br>
<input name="isbn" placeholder="ISBN"><br>
<input name="copies" placeholder="Copies" required><br>
<button type = "submit">Add Book</button>
</form>
