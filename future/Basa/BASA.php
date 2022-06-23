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
    <link rel="stylesheet" href="../style1.css">
</head>

<body class="container-fluid m-0 p-0">
    <div class="bg-success">
        <?php
        include "../top.php";
        ?>
    </div>

    <div class="dashboard">
        <div class="bg-success">
            <?php
            require_once "dashboardBASA.php";
            ?>
        </div>

        <div class="m-2">

            <nav class="navbar bg-light">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Student" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>

            <table class="table table-striped table-hover mt-2">
                <tr class="bg-warning">
                    <th>No</th>
                    <th>Student</th>
                    <th>transaction Id</th>
                    <th>Paid</th>
                    <th>Payable</th>
                    <th>paid from</th>
                    <th>Balance</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Lubowa Edris</td>
                    <td>112233444</td>
                    <td>300,000</td>
                    <td>400,000</td>
                    <td>Airtel</td>
                    <td>100,000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Lubowa Edris</td>
                    <td>112233444</td>
                    <td>300,000</td>
                    <td>400,000</td>
                    <td>Airtel</td>
                    <td>100,000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Lubowa Edris</td>
                    <td>112233444</td>
                    <td>300,000</td>
                    <td>400,000</td>
                    <td>Airtel</td>
                    <td>100,000</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Lubowa Edris</td>
                    <td>112233444</td>
                    <td>300,000</td>
                    <td>400,000</td>
                    <td>Airtel</td>
                    <td>100,000</td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>