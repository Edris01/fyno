<!DOCTYPE html>
<html lang="en">
<?php 
    include "head.php";
?>
<body class="container-fluid m-0 p-0">
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
            <h3 class="text-success text-center mt-3 fixedWidth">Enroll Student</h3>
            <hr class="text-dark">

            <form class="row g-3 m-3 fixedWidth2">
                
                <div class="col-md-4">
                    <label class="form-label">First name</label>
                    <input type="text" class="form-control" placeholder="First name" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Last name</label>
                    <input type="text" class="form-control" placeholder="Last name" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Given name</label>
                    <input type="text" class="form-control" placeholder="Given name">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Gender</label>
                    <input type="text" class="form-control" placeholder="M/F" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Age</label>
                    <input type="number" class="form-control" placeholder="01" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Date Of Birth</label>
                    <input type="date" class="form-control" placeholder="Given name">
                </div>
                
                <div class="col-md-6">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" placeholder="username" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="example@domain.com" aria-describedby="validationServer03Feedback" required>
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

                <div class="col-md-6">
                    <label class="form-label">Educational Level</label>
                    <select class="form-select" aria-describedby="validationServer04Feedback" required>
                        <option>O`level</option>
                        <option>A`level</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Instutite</label>
                    <input type="text" class="form-control" aria-describedby="validationServer05Feedback" placeholder="Institute" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Index No.</label>
                    <input type="text" class="form-control" aria-describedby="validationServer05Feedback" placeholder="Index number" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Aggs</label>
                    <input type="number" class="form-control" aria-describedby="validationServer05Feedback" placeholder="00" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label class="form-label">Educational Level</label>
                    <select class="form-select" aria-describedby="validationServer04Feedback" required>
                        <option>A`level</option>
                        <option>0`level</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Instutite</label>
                    <input type="text" class="form-control" aria-describedby="validationServer05Feedback" placeholder="Institute" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Index No.</label>
                    <input type="text" class="form-control" aria-describedby="validationServer05Feedback" placeholder="Index number" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Aggs</label>
                    <input type="number" class="form-control" aria-describedby="validationServer05Feedback" placeholder="00" required>
                </div>

                <div class="col-md-12">
                    <label class="form-label">Registration No.</label>
                    <input type="text" placeholder="Reg No." class="form-control">
                </div>
                <!-- i will add fields for filling in requests for o`level ne a`level  -->
                <div class="col-12">
                    <button class="btn btn-primary" name="create_student" type="submit">Submit</button>
                </div>
            </form>
        </div>

    </div>
</body>

</html>