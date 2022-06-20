<?php
include "server.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <link href="assets/css/font-awesome.css" rel="stylesheet" /> -->
    <script src="https://kit.fontawesome.com/286dd47235.js" crossorigin="anonymous"></script>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="style.css">
</head>

<body class="m-0 p-0">
    <div class="container">
        <?php
        include "includes/header.php";
        ?>

        <div>
            <h1 class="text-center mt-3 fs-2"> Log In</h1>
            <!-- just when i needed to register somebody for testing -->
            <!-- <p>No account? <a href="register.php">Register here!</a></p> -->

            <form action="login.php" method="post" class="form-control w-50 h-25">
                <?php include 'errors.php'; ?> 
                <input class="form-control w-50 mt-3" type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
                <input class="form-control w-50 mt-4" type="password" name='password' placeholder='Password' value="<?php echo $password; ?>">
                <button class="btn btn-info w-25 h-25 mt-3 mb-3" type="submit" name="login_user">LOGIN</button>
            </form>
        </div>

        <?php
        require_once "includes/footer.php";
        ?>
    </div>
</body>

</html>