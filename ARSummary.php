<?php
include "head.php";
?>

<body class="container-fluid p-0">
    <div class="bg-success fixedtop">
        <?php
        include "ARtop.php";
        ?>
    </div>

    <div class="dashboard">
        <div class="bg-light fixedDashboard">
            <?php
            require "ARDashboard.php";
            ?>
        </div>

        <div class="fixedDisplay">
            <h3 class="text-success text-center">Number of Students</h3>
            <hr class="text-dark m-2">
            <!-- displaying number of students per facutly  -->
        </div>
    </div>
    <br>
<?php
    include_once "footer.php";
?>