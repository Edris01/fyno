<?php
    include "server.php";
?>

<!DOCTYPE html>
<html lang="en">
<?php
    include "./head.php";
?>
<body class="m-5 p-0">
    <div class="container">
        <h2 class="text-center text-success mt-3">Student`s Portal</h2>
        <hr>
        <p class="text-center mt-4 fs-6 int">'Please enter your account email to verify'</p>

        <form action="login.php" method="post" class="w-100 h-auto text-center">
            <?php include 'errors.php'; ?>
            <div class="row g-1 align-center">
                <div class="col-md-12">
                    <input class="form-control w-25 mt-6 login text-center" type="text" name="enterEmail.com" placeholder="Enter Email">
                </div>
            </div>
            
            <button class="btn btn-success w-25 h-auto mt-4 mb-3" type="submit" name="reset_user">Submit</button>
        </form>
    </div>
</body>

</html>