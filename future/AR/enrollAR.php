<!DOCTYPE html>
<html lang="en">
<?php 
    include "./includes/head.php";
?>
<body class="container-fluid m-0 p-0">
    <div class="bg-success">
        <?php
        include "./includes/top.php";
        ?>
    </div>

    <div class="dashboard">
        <div class="bg-success">
            <?php
            require_once "./includes/dashboardAR.php";
            ?>
        </div>
        <div>
            <h1 class="text-success text-center mt-3 fs-4">Enroll Student</h1>
            <hr class="text-success">

            <form class="row g-3 m-3">
                <div class="col-md-12">
                    <input type="text" placeholder="Reg No." class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">First name</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Last name</label>
                    <input type="text" class="form-control" required>
                </div>
                
                <div class="col-md-6">
                    <label class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" ">@</span>
                        <input type="text" class="form-control" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" aria-describedby="validationServer03Feedback" required>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Faculty</label>
                    <select class="form-select" aria-describedby="validationServer04Feedback" required>
                        <option value="Technology">Science and Technology</option>
                        <option>Education</option>
                        <option>Business</option>
                        <option>Arts</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Educational Level</label>
                    <select class="form-select" aria-describedby="validationServer04Feedback" required>
                        <option value="Technology">O`level</option>
                        <option>A`level</option>
                    </select>
                </div>
                <div class="col-md-8">
                    <label for="validationServer05" class="form-label">Instutite</label>
                    <input type="text" class="form-control" aria-describedby="validationServer05Feedback" required>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>

    </div>
</body>

</html>