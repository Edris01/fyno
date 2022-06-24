<!DOCTYPE html>
<html lang="en">

<?php
include "head.php";
?>

<body class="container-fluid m-0 p-0">
    <div class="bg-success fixedtop">
        <?php
        include "topAR.php";
        ?>
    </div>

    <div class="dashboard0">
        <div class="bg-light fixedDashboard">
            <?php
            require_once "fixedDashboardBASA.php";
            ?>
        </div>

        <div class="fixedDisplay">
            <h3 class="text-success text-center m-2">Balances</h3>
            <hr class="text-dark mx-2">
            <div class="mx-2">

            </div>
        </div>
    </div>
</body>

</html>