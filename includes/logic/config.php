<?php

//database connection
$conn = mysqli_connect('localhost', 'root', '', 'final-project');

// checking connection 
if (!$conn) {
    die("database connection failed!");
}
