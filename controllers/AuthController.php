<?php

require_once '../models/Auth.php';
session_start();

class AuthController {
 private $authModel;


 public function __construct(){
    $this->authModel = new Auth();
 }

 public function handleLogin($email, $password) {
    $user = $this->authModel->login($email, $password);

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        header("Location: dashboard.php");
        exit;
    }else{
        echo "Invalid credentials";
    }
 }
    }
