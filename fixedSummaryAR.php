<!DOCTYPE html>
<html lang="en">
<?php
include "head.php";
?>

<body class="container-fluid p-0">
    <div class="bg-success fixedtop">
        <?php
        include "topAR.php";
        ?>
    </div>

    <div class="dashboard0">
        <div class="bg-light fixedDashboard">
            <?php
            require_once "fixedDashboardAR.php";
            ?>
        </div>

        <div class="fixedDisplay">
            <h3 class="text-success text-center">Number of Students</h3>
            <hr class="text-dark">
            <!-- displaying number of students per facutly  -->
        </div>
    </div>
</body>

</html>