<?php
    include("./includes/logic/server.php");
?>
<?php

if (!isset($_SESSION['email'])) {
    header('location: login-one.php');
}else{
    header('location: Payments.php');
}

?>

<?php
    include("./includes/layouts/head.php");
?>

<h2>You`re logged in!!</h2>

<?php
    include_once("./includes/layouts/footer.php")
?>