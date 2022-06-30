<!DOCTYPE html>
<html lang="en">

<?php
include "head.php";
?>

<body class="container-fluid m-0 p-0">
    <div class="bg-success fixedtop">
        <?php
        include "ARtop.php";
        ?>
    </div>

    <div class="dashboard0">
        <div class="bg-light fixedDashboard">
            <?php
            require_once "BASADashboard.php";
            ?>
        </div>

        <div class="fixedDisplay">
            <div class="containers mx-2">
                <h3 class="text-success">Payments</h3>
                <nav class="navbar">
                    <div class="container">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Student" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
            <hr class="text-dark m-2">
            <div class="">
                <table class="table table-striped table-hover mx-4 text-center w-75">
                    <tr class="bg-warning">
                        <th>Student</th>
                        <th>Transaction Id</th>
                        <th>Paid</th>
                        <th>Payable</th>
                        <th>Paid from</th>
                        <th>Balance</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>Lubowa Edris</td>
                        <td>112233444</td>
                        <td>300,000</td>
                        <td>400,000</td>
                        <td>Airtel</td>
                        <td>100,000</td>
                        <td><button class="btn btn-info">View</button></td>
                    </tr>
                    <tr>
                        <td>Lubowa Edris</td>
                        <td>112233444</td>
                        <td>300,000</td>
                        <td>400,000</td>
                        <td>Airtel</td>
                        <td>100,000</td>
                        <td><button class="btn btn-info">View</button></td>
                    </tr>
                    <tr>
                        <td>Lubowa Edris</td>
                        <td>112233444</td>
                        <td>300,000</td>
                        <td>400,000</td>
                        <td>Airtel</td>
                        <td>100,000</td>
                        <td><button class="btn btn-info">View</button></td>
                    </tr>
                    <tr>
                        <td>Lubowa Edris</td>
                        <td>112233444</td>
                        <td>300,000</td>
                        <td>400,000</td>
                        <td>Airtel</td>
                        <td>100,000</td>
                        <td><button class="btn btn-info">View</button></td>
                    </tr>
                    <tr>
                        <td>Lubowa Edris</td>
                        <td>112233444</td>
                        <td>300,000</td>
                        <td>400,000</td>
                        <td>Airtel</td>
                        <td>100,000</td>
                        <td><button class="btn btn-info">View</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>