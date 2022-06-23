<!DOCTYPE html>
<html lang="en">
<?php
    include "head.php";
?>
<body class="container-fluid p-0">
    <div class="bg-success">
        <?php
            include "topAR.php";
        ?>
    </div>

    <div class="dashboard">
        <div class="bg-light">
            <?php
                require_once "dashboardAR.php";
            ?>
        </div>

        <div class="m-2">
            <h3 class="text-success text-center">Number of Students</h3>
            <hr class="text-dark">
            <!-- displaying number of students per facutly  -->
        </div>
    </div>
</body>

</html>