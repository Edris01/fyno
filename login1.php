<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIU Student`s Portal</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /> -->
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
            <input type="submit" value="Login">
        </form>
        <!-- <div class="sign-txt">Not yet a member? <a href="#">Sign up now</a></div> -->
    </div>

    <script src="script.js"></script>

</body>

</html>