<?php
include "server.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll page</title>
    <script src="https://kit.fontawesome.com/286dd47235.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include "includes/header.php";
    ?>
    <div>
        <h1>Register</h1>
        <p>Already have an account? <a href="login.php">Log in!</a></p>

        <form action="register.php" method="post">
            <?php include 'errors.php'; ?>
            <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
            <input type="email" name="email" placeholder="example@domain.com" value="<?php echo $email; ?>">
            <input type="password" name="password_1" placeholder="Password">
            <input type="password" name="password_2" placeholder="Confirm Password">
            <button class="btn btn-info" type="submit" name="register_user">Sign Up</button>
        </form>
    </div>

    <br>
    <?php
    require_once "includes/footer.php";
    ?>
</body>

</html>