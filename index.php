<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<?php
include "head.php";
?>

<body class="container-fluid m-0 p-0">
    <div class="bg-success fixedtop">
        <?php
        include "StudentTop.php";
        ?>
    </div>

    <div class="dashboard0">
        <div class="bg-light fixedDashboard">
            <?php
            require_once "StudentDashboard.php";
            ?>
        </div>
        <div class="fixedDisplay">
            <h3 class="text-success text-center mx-2">Payments</h3>
            <hr class="text-dark m-2">
            <table class="table table-striped table-hover m-4 text-center w-75 fixedWidth2">
                <tr class="bg-warning">
                    <th>Date</th>
                    <th>Bank Name</th>
                    <th>Ammount Paid</th>
                </tr>
                <tr>
                    <td>1/01/2001</td>
                    <td>Equity</td>
                    <td>250,000</td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>