<!DOCTYPE html>
<html lang="en">

<?php 
    include "./includes/head.php";
?>
<body class="container-fluid m-0 p-0">
    <div class="bg-success">
        <?php
        include "./includes/top.php";
        ?>
    </div>

    <div class="dashboard">
        <div class="bg-success">
            <?php
            require_once "./includes/dashboardAR.php";
            ?>
        </div>
        <div class="m-2">
            <div class="d-flex">
                <h1 class="text-success text-center mt-3 fs-4">Students</h1>
                <nav class="navbar bg-light">
                    <div class="container-fluid header-right">
                        <form class="d-flex header-right" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search Student" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
            <hr class="text-success">

            <table class="table table-striped table-hover">
                <tr class="bg-warning">
                    <th>No.</th>
                    <th>Reg No.</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Faculty </th>
                    <th>Course</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>19/BIT/031/UMC</td>
                    <td>Lubowa Edris</td>
                    <td>@edris</td>
                    <td>lubowaedris</td>
                    <td>Technology</td>
                    <td>BIT</td>
                    <td>
                        <a href="updateAR.php"><button class="btn btn-info">Edit</button></a>
                        <button name="delete" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>19/BIT/031/UMC</td>
                    <td>Lubowa Edris</td>
                    <td>@edris</td>
                    <td>lubowaedris</td>
                    <td>Technology</td>
                    <td>BIT</td>
                    <td>
                        <button class="btn btn-info">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>19/BIT/031/UMC</td>
                    <td>Lubowa Edris</td>
                    <td>@edris</td>
                    <td>lubowaedris</td>
                    <td>Technology</td>
                    <td>BIT</td>
                    <td>
                        <button class="btn btn-info">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>19/BIT/031/UMC</td>
                    <td>Lubowa Edris</td>
                    <td>@edris</td>
                    <td>lubowaedris</td>
                    <td>Technology</td>
                    <td>BIT</td>
                    <td>
                        <button class="btn btn-info">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>19/BIT/031/UMC</td>
                    <td>Lubowa Edris</td>
                    <td>@edris</td>
                    <td>lubowaedris</td>
                    <td>Technology</td>
                    <td>BIT</td>
                    <td>
                        <button class="btn btn-info">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>19/BIT/031/UMC</td>
                    <td>Lubowa Edris</td>
                    <td>@edris</td>
                    <td>lubowaedris</td>
                    <td>Technology</td>
                    <td>BIT</td>
                    <td>
                        <button class="btn btn-info">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </table>
        </div>

    </div>
</body>

</html>