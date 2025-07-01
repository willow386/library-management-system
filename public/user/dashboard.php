<?php

require_once '../../controllers/AuthController.php';
AuthController::requireRole('user');
include '../../views/user/dashboard.php';