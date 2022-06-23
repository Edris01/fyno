<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include "./head.php";
?>

<body class="container-fluid m-0 p-0">
    <div class="bg-success">
        <?php
        include "./top.php";
        ?>
    </div>

    <div class="dashboard">
        <div class="bg-light">
            <?php
            require_once "./dashboard.php";
            ?>
        </div>
        <div class="m-2">
            <h3 class="text-success text-center">Messages</h3>
            <hr>
        </div>
    </div>
</body>

</html>