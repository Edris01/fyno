<?php 
session_start(); 
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
            require_once "dashboard.php";
            ?>
        </div>
        <div class="m-2">
            <h3 class="text-success text-center">Slips</h3>
            <hr>
            <table class="table table-striped table-hover mt-2">
                <tr class="bg-warning">
                    <th>Date</th>
                    <th>Bank Name</th>
                    <th>Transaction ID</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1/01/2001</td>
                    <td>Equity</td>
                    <td>000</td>
                    <td> <button class="btn btn-info">Print</button></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>