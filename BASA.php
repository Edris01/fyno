<!DOCTYPE html>
<html lang="en">

<?php
include "head.php";
?>

<body class="container-fluid m-0 p-0">
    <div class="bg-success">
        <?php
        include "topAR.php";
        ?>
    </div>

    <div class="dashboard">
        <div class="bg-light">
            <?php
            require_once "dashboardBASA.php";
            ?>
        </div>

        <div class="m-2">
            <div class="containers">
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
                <tr>
                    <td>5</td>
                    <td>Lubowa Edris</td>
                    <td>112233444</td>
                    <td>300,000</td>
                    <td>400,000</td>
                    <td>Airtel</td>
                    <td>100,000</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Lubowa Edris</td>
                    <td>112233444</td>
                    <td>300,000</td>
                    <td>400,000</td>
                    <td>Airtel</td>
                    <td>100,000</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Lubowa Edris</td>
                    <td>112233444</td>
                    <td>300,000</td>
                    <td>400,000</td>
                    <td>Airtel</td>
                    <td>100,000</td>
                </tr>
                <tr>
                    <td>8</td>
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