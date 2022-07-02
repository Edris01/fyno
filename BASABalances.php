<?php
include "head.php";
?>

<body class="container-fluid m-0 p-0">
    <div class="bg-success fixedtop">
        <?php
        include "ARtop.php";
        ?>
    </div>

    <div class="dashboard0">
        <div class="bg-light fixedDashboard">
            <?php
            require_once "BASADashboard.php";
            ?>
        </div>

        <div class="fixedDisplay">
            <h3 class="text-success text-center mx-2">Balances</h3>
            <hr class="text-dark m-2">
            <div class="mx-2">
                
            </div>
        </div>
    </div>
</body>

</html>