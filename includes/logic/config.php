<?php
$conn = new mysqli('localhost', 'root', '', 'final-project');
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



    
// $conn = mysqli_connect('localhost', 'root', '', 'final-project');
// if (!$conn) {
//     die("database connection failed!");
// }

