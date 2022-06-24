<?php
    include "server.php";
?>

<!DOCTYPE html>
<html lang="en">
<?php
    include "head.php";
?>
<body class="mt-0 p-0 h-100">
    <div class="container">
        <h2 class="text-center text-success mt-5">Student`s Portal</h2>
        <hr class="text-dark mx-2">
        <p class="text-center text-danger mt-4 fs-6 int">'Please enter your account email to verify'</p>

        <form action="login.php" method="post" class="w-100 text-center">
            <?php include 'errors.php'; ?>
            <div class="d-grid g-1 align-center">
                <input class="form-control w-25 mt-6 login text-center" type="text" name="enterEmail.com" placeholder="Enter Email">
                <input class="form-control w-25 mt-6 login text-center" type="text" name="code" placeholder="Enter Sent Code">
            </div>
            <button class="btn btn-success mt-4 mb-3" type="submit" name="reset_user">Submit</button>
        </form>
    </div>
</body>

</html>