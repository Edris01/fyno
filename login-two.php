<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIU Student`s Portal</title>
    <!-- customized css  -->
    <link rel="stylesheet" href="./assets/css/login-two.css">
    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- bootstrap icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body class="bg-success">
    <div class="wrapper">
        <header>Login Form</header>
        <form action="#">
            <div class="field username">
                <div class="input-area">
                    <input type="text" placeholder="Username">
                    <i class="icon bi bi-envelope"></i>
                    <i class="error error-icon bi bi-exclamation-circle"></i>
                </div>
                <div class="error error-txt">* Username Required</div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="password" placeholder="Password">
                    <i class="icon bi bi-lock"></i>
                    <i class="error error-icon bi bi-exclamation-circle"></i>
                </div>
                <div class="error error-txt">* Password Required</div>
            </div>
            <div class="pass-txt text-center pt-4"><a href="#">Forgot password?</a></div>
            <input type="submit" class="btn btn-success" value="Login">
        </form>
        <!-- <div class="sign-txt">Not yet a member? <a href="#">Sign up now</a></div> -->
        <!-- <form action="" method="post" class="w-100 text-center">
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
        </form> -->
    </div>

    <!-- JQuery  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- my javascript  -->
    <script src="script.js"></script>

</body>

</html>