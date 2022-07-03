<?php
include "head.php";
?>

<body class="d-flex h-100">
    <div class="align-center bg-light h-100 w-100 radius">
        <h2 class="text-center text-success mt-5">Student`s Portal</h2>
        <hr class="text-dark mx-5">
        <p class="text-center text-dark mt-3 fs-5 int">'Please enter your details'</p>

        <form action="newlogin.php" method="post" class="w-100 text-center">
            <div class="field username w-25">
                <div class="input-area">
                    <input type="text" placeholder="username">
                    <i class="icon bi bi-envelope"></i>
                    <i class="error error-icon bi bi-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Username can't be blank</div>
            </div>
            <div class="field password w-25">
                <div class="input-area">
                    <input type="password" placeholder="Password">
                    <i class="icon bi bi-lock"></i>
                    <i class="error error-icon bi bi-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Password can't be blank</div>
            </div>
            <a href="reset.php">Forgot password?</a>
            <input class="btn btn-success mt-4 mb-4 w-25" type="submit" value="Login" name="login_user">
        </form>
    </div>
    <?php
    include_once "footer.php"
    ?>