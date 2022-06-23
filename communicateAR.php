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
            require_once "dashboardAR.php";
            ?>
        </div>

        <div class="m-2">
            <h3 class="text-success text-center">Communication</h3>
            <hr>
            <!-- i wanted to make this option where the admins can communicate direct like a messaging app  -->
            <form action="communicate.php" class="form">
                <input type="text" placeholder="To:" class="form-control">
                <input type="text" placeholder="Subject" class="form-control">
                <textarea name="message" id="" cols="28" rows="9" class="form-control" placeholder="Message"></textarea>
                <br>
                <button class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</body>

</html>