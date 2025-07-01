<form method="POST" action="login.php">
  <input type="email" name="email" required placeholder="Email">
  <input type="password" name="password" required placeholder="Password">
  <button type="submit">Login</button>
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../controllers/AuthController.php';
    $controller = new AuthController();
    $controller->handleLogin($_POST['email'], $_POST['password']);
}
?>