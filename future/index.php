<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'you must login in first';
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<?php
    include "./includes/head.php"
?>
<body>
    
</body>
</html>