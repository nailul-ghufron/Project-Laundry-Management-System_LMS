<?php
session_start();

// Configure base URL dynamically
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$script = dirname($_SERVER['SCRIPT_NAME']);
define('BASE_URL', rtrim($protocol . '://' . $host . $script, '/') . '/');

require_once '../app/core/App.php';
require_once '../app/core/Controller.php';
require_once '../app/config/database.php';

$app = new App();
