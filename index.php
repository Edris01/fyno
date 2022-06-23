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
    <div class="bg-success">
        <?php
        include "top.php";
        ?>
    </div>

    <div class="dashboard">
        <div class="bg-light">
            <?php
            require "dashboard.php";
            ?>
        </div>

        <div class="m-2">
            <div class="containers">
                <h3 class="text-success">Payments</h3>
                <nav class="navbar">
                    <div class="container">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Student" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
            <table class="table table-striped table-hover mt-2">
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