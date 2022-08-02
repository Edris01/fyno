<?php

if (!isset($_SESSION['username'])) {
    header('location: login-one.php');
}

?>

<?php
    include("./includes/layouts/head.php")
?>

<h1>Thanks for logging In!!</h1>

<?php
    include_once("./includes/layouts/footer.php")
?>