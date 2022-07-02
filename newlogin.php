<?php
    include "head.php";
?>

<body class="d-flex h-100 bg-success">
    <div class="h">
        &nbsp; &nbsp; &nbsp; &nbsp;
    </div>
    <div class="align-center bg-light w-100 radius">
        <h2 class="text-center text-success mt-5">Student`s Portal</h2>
        <hr class="text-dark mx-5">
        <p class="text-center text-danger mt-3 fs-6 int">'Please enter your details'</p>

        <form action="login2.php" method="post" class="w-100 text-center">
            <div class="d-grid g-1">
                <input class="form-control w-25 mt-6 login text-center" type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
                <input class="form-control w-25 mt-4 login text-center" type="password" name='password' placeholder='Password'>
            </div>
            <br>
            <a href="reset.php">Forgot password?</a>
            <br>
            <button class="btn btn-success mt-4 mb-3" type="submit" name="login_user">LOGIN</button>
        </form>
    </div>
</body>

</html>