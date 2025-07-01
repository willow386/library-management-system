<?php

require_once '../../controllers/AuthController.php';
AuthController::requireRole('admin');
include '../../views/admin/dashboard.php';
?>

<h1> Welcome Admin!</h1>
