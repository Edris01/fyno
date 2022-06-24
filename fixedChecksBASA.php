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
            <h3 class="text-success text-center">Checks</h3>
            <hr class="text-dark">
            <div>

            </div>
        </div>
    </div>
</body>

</html>