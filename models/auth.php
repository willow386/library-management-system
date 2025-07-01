<?php

require_once  '../core/Database.php';

class Auth{
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function login($email, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])){
        return $user;
    }

    return false;
    }
}