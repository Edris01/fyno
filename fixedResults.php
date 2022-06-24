<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
include "head.php";
?>

<body class="container-fluid m-0 p-0">
    <div class="bg-success fixedtop">
        <?php
        include "top.php";
        ?>
    </div>

    <div class="dashboard0">
        <div class="bg-light fixedDashboard">
            <?php
            require "fixedDashboard.php";
            ?>
        </div>

        <div class="fixedDisplay">
            <div class="containers mx-2">
                <h3 class="text-success">Results</h3>
                <nav class="navbar">
                    <div class="container">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Student" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
            <hr class="text-dark mx-2">

            <table class="table table-striped table-hover w-75 mx-5">
                <tr class="bg-warning">
                    <th>No</th>
                    <th>Cousre Code</th>
                    <th>Cousre Unit</th>
                    <th>Test</th>
                    <th>Cousre Work</th>
                    <th>Exam</th>
                    <th>Results (%) </th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>122</td>
                    <td>Math</td>
                    <td>15</td>
                    <td>15</td>
                    <td>70</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>122</td>
                    <td>Math</td>
                    <td>15</td>
                    <td>15</td>
                    <td>70</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>122</td>
                    <td>Math</td>
                    <td>15</td>
                    <td>15</td>
                    <td>70</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>122</td>
                    <td>Math</td>
                    <td>15</td>
                    <td>15</td>
                    <td>70</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>122</td>
                    <td>Math</td>
                    <td>15</td>
                    <td>15</td>
                    <td>70</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>122</td>
                    <td>Math</td>
                    <td>15</td>
                    <td>15</td>
                    <td>70</td>
                    <td>100</td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>