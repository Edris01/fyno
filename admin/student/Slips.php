<?php
include_once "head.php";
?>

<body class="container-fluid m-0 p-0">
    <div class="bg-success fixedtop">
        <?php
        include_once "StudentTop.php";
        ?>
    </div>

    <div class="dashboard">
        <div class="bg-light fixedDashboard">
            <?php
            require_once "StudentDashboard.php";
            ?>
        </div>
        <div class="fixedDisplay">
            <h3 class="text-success text-center mx-2">Slips</h3>
            <hr class="text-dark m-2">
            <table class="table table-striped table-hover m-2 text-center">
                <tr class="bg-warning">
                    <th>Date</th>
                    <th>Bank Name</th>
                    <th>Transaction ID</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1/01/2001</td>
                    <td>Equity</td>
                    <td>000</td>
                    <td> 
                        <form action="StudentSlips.php" method="get">
                            <button class="btn btn-dark" name="view">view</button>
                            <button class="btn btn-info" name="print">Print</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>