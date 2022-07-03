<?php
include "head.php";
?>

<body class="container-fluid m-0 p-0">
    <div class="bg-success fixedtop">
        <?php
        include "StudentTop.php";
        ?>
    </div>

    <div class="dashboard">
        <div class="bg-light fixedDashboard">
            <?php
                require "StudentDashboard.php";
            ?>
        </div>
        <div class="fixedDisplay">
            <h3 class="text-success text-center mx-2">Pay Now</h3>
            <hr class="text-dark m-2">
        </div>
    </div>
</body>

</html>