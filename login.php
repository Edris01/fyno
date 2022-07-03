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
        <hr class="text-dark">
        <p class="text-center text-dark mt-3 fs-5 int">'Please enter your details'</p>

        <form action="login.php" method="post" class="w-100 text-center">
            <div class="text-center">
                <?php include 'errors.php'; ?>
            </div>
            <div class="d-grid g-1 align-center">
                <!-- i will use reg no. for logging in by the students -->
                <input class="form-control w-25 mt-6 login text-center" id="username" type="text" name="username" placeholder="Registration Number" value="<?php echo $username; ?>">
                <input class="form-control w-25 mt-4 login text-center" id="password" type="password" name='password' placeholder='Password'>
            </div>
            <br>
            <a href="reset.php" class="text-info ">Forgot password?</a>
            <br>
            <button class="btn btn-success mt-4 mb-3" type="submit" name="login_user"><i class="bi bi-box-arrow-in-right"></i> LOGIN</button>
        </form>
    </div>
    <script src="./script.js"></script>
</body>

</html>