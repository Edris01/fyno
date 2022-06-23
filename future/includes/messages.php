
<?php
    include "../head.php";
?>

<body class="container-fluid m-0 p-0">
    <div class="bg-success">
        <?php
        include "./top.php";
        ?>
    </div>

    <div class="dashboard">
        <div class="bg-success">
            <?php
            require_once "./includes/dashboard.php";
            ?>
        </div>

        <div class="m-2">
            Notes !!! &nbsp; Notes !!! &nbsp; Notes !!!

            <hr>
        </div>
    </div>
</body>

</html>