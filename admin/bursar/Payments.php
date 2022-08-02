<?php
include "head.php";
?>

<body class="container-fluid m-0 p-0">
    <div class="bg-success fixedtop">
        <?php
        include "ARtop.php";
        ?>
    </div>

    <div class="dashboard">
        <div class="bg-light fixedDashboard">
            <?php
            require_once "BASADashboard.php";
            ?>
        </div>

        <div class="fixedDisplay">
            <div class="d-flex w-100">
                <h3 class="text-success col-md-8">Payments</h3>
                <nav class="navbar col-md-4">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Student" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </nav>
            </div>
            <hr class="text-dark m-2">
            <div class="">
                <table class="table table-striped table-hover mx-2 text-center">
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