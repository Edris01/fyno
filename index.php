<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'you must login in first';
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <script src="https://kit.fontawesome.com/286dd47235.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require_once "includes/header1.php";
    ?>
    <label class="logo mt-3 p-3">Welcome <strong><?php echo $_SESSION['username']; ?></strong></label>

    <table>
        <tr>
            <th>1</th>
            <th></th>
        </tr>
        <tr>
            <th>2</th>
            <th></th>
        </tr>
        <tr>
            <th>3</th>
            <th></th>
        </tr>
        <tr>
            <th>4</th>
            <th></th>
        </tr>
    </table>

    <?php
    require_once "includes/footer.php";
    ?>

</body>

</html>