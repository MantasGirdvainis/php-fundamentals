<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'mantas');
define('DB_PASS', '123456');
define('DB_name', 'php_dev');

// Create connection

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_name);

// Check connection

if($conn->connect_error) {
    die('Connectio Failed'. $conn->connect_error);
}

?>