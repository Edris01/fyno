<?php 
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
?>

<?php
    include "head.php";
?>

<body class="container-fluid m-0 p-0">

<?php
    include_once "footer.php"
?>