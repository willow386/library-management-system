<?php
session_start();
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

echo "Welcome, user #" . $_SESSION['user_id'];