<!DOCTYPE html>
<html lang="en">

<?php
include "head.php";
?>
<body class="container-fluid m-0 p-0">
    <div class="bg-success">
        <?php
        include "topAR.php";
        ?>
    </div>

    <div class="dashboard">
        <div class="bg-light">
            <?php
            require_once "dashboardBASA.php";
            ?>
        </div>

        <div class="m-2">
        <h3 class="text-success text-center">Balances</h3>
        <hr>
        <div>
            
        </div>
        </div>
    </div>
</body>

</html>