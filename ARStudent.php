<?php
    include "server.php";
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
        include "ARtop.php";
        ?>
    </div>

    <div class="dashboard0">
        <div class="bg-light fixedDashboard">
            <?php
            require_once "ARDashboard.php";
            ?>
        </div>
        <div class="fixedDisplay">
            <div class="m-2">
                <div class="containers">
                    <h3 class="text-success">Students</h3>
                    <nav class="navbar">
                        <div class="container">
                            <form action="fixedStudentAR.php" method="POST" class="d-flex" role="search">
                                <input class="form-control me-2" type="search" name="search_student_name" placeholder="Student" aria-label="Search">
                                <button class="btn btn-outline-success" name="search_student_AR" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>
                <hr class="text-dark m-2">

                <table class="table table-striped table-hover ">
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
                            <a href="fixedUpdateAR.php"><button class="btn btn-info">Edit</button></a>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>19/BIT/031/UMC</td>
                        <td>Lubowa Edris</td>
                        <td>@edris</td>
                        <td>lubowaedris</td>
                        <td>Technology</td>
                        <td>BIT</td>
                        <td>
                            <a href="fixedUpdateAR.php"><button class="btn btn-info">Edit</button></a>
                            <button name="delete" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>19/BIT/031/UMC</td>
                        <td>Lubowa Edris</td>
                        <td>@edris</td>
                        <td>lubowaedris</td>
                        <td>Technology</td>
                        <td>BIT</td>
                        <td>
                            <a href="fixedUpdateAR.php"><button class="btn btn-info">Edit</button></a>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>19/BIT/031/UMC</td>
                        <td>Lubowa Edris</td>
                        <td>@edris</td>
                        <td>lubowaedris</td>
                        <td>Technology</td>
                        <td>BIT</td>
                        <td>
                            <a href="fixedUpdateAR.php"><button class="btn btn-info">Edit</button></a>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>19/BIT/031/UMC</td>
                        <td>Lubowa Edris</td>
                        <td>@edris</td>
                        <td>lubowaedris</td>
                        <td>Technology</td>
                        <td>BIT</td>
                        <td>
                            <a href="fixedUpdateAR.php"><button class="btn btn-info">Edit</button></a>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>19/BIT/031/UMC</td>
                        <td>Lubowa Edris</td>
                        <td>@edris</td>
                        <td>lubowaedris</td>
                        <td>Technology</td>
                        <td>BIT</td>
                        <td>
                            <a href="fixedUpdateAR.php"><button class="btn btn-info">Edit</button></a>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>19/BIT/031/UMC</td>
                        <td>Lubowa Edris</td>
                        <td>@edris</td>
                        <td>lubowaedris</td>
                        <td>Technology</td>
                        <td>BIT</td>
                        <td>
                            <a href="fixedUpdateAR.php"><button class="btn btn-info">Edit</button></a>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</body>

</html>