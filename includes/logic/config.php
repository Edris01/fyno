<?php

// making const 

// define('SERVER_NAME', 'localhost');
// define('USER_NAME', 'root');
// define('PASS_CODE', '');
// define('DB_NAME', 'final-project');

$conn = new mysqli('localhost', 'root', '', 'final-project');
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
