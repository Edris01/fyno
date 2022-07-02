<?php
include "head.php";
?>

<body class="container-fluid m-0 p-0">
    <div class="bg-success fixedtop">
        <?php
        include "topAR.php";
        ?>
    </div>

    <div class="dashboard0">
        <div class="bg-light fixedDashboard">
            <?php
            require_once "fixedDashboardBASA.php";
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
            <table class="table table-striped table-hover m-2">
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