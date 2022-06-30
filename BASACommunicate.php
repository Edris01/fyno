<!DOCTYPE html>
<html lang="en">
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
            <h3 class="text-success text-center">Communication</h3>
            <hr class="text-dark m-2">
            <!-- i wanted to make this option where the admins can communicate direct like a messaging app  -->
            <form action="communicate.php" class="form m-4">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" placeholder="To:" class="form-control mb-2">
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="Subject" class="form-control mb-2">
                    </div>
                </div>
                <br>
                <textarea name="message" id="" cols="30" rows="9" class="form-control" placeholder="Message"></textarea>
                <br>
                <button class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</body>

</html>