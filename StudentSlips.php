<?php
session_start();
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
            require "StudentDashboard.php";
            ?>
        </div>
        <div class="fixedDisplay">
            <h3 class="text-success text-center mx-2">Slips</h3>
            <hr class="text-dark m-2">
            <table class="table table-striped table-hover m-4 text-center w-75">
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