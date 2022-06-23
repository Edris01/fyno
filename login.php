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
        <p class="text-center mt-4 fs-6 int">'Please enter your details'</p>

        <form action="login.php" method="post" class="w-100 h-auto text-center">
            <div class="text-center">
                <?php include 'errors.php'; ?>
            </div>
            <div class="row g-1 align-center">
                <div class="col-md-12">
                    <input class="form-control w-25 mt-6 login text-center" type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
                </div>
                <div class="col-md-12">
                    <input class="form-control w-25 mt-4 login text-center" type="password" name='password' placeholder='Password'>
                </div>
            </div>
            <br>
            <a href="reset.php">Forgot password?</a>
            <br>
            <button class="btn btn-success w-25 h-auto mt-4 mb-3" type="submit" name="login_user">LOGIN</button>
        </form>
    </div>
</body>

</html>