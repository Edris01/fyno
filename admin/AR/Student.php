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
            require_once "ARDashboard.php";
            ?>
        </div>
        <div class="fixedDisplay">
            <div class="pt-2">
                <div class="d-flex w-100">
                    <h3 class="text-success col-md-8">Students</h3>
                    <nav class="navbar col-md-4">
                        <form action="ARStudent.php" method="get" class="d-flex" role="search">
                            <input class="form-control me-2" type="search" name="search_student_name" placeholder="Student" aria-label="Search">
                            <button class="btn btn-outline-success" name="search_student_AR" type="submit">Search</button>
                        </form>
                    </nav>
                </div>
                <hr class="text-dark mx-2">



                <table class="table table-striped table-hover">
                    <thead class="bg-warning">
                        <th>No.</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Reg No.</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php

                        $sql = "SELECT * FROM users";
                        $result = mysqli_query($db, $sql);
                        $rowCount = mysqli_num_rows($result);

                        if ($rowCount > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo
                                "
                        <tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['username'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['regno'] . "</td>
                        <td>
                            <button class='btn btn-success' type='submit' name='delete'>Edit</button>
                            <button class='btn btn-danger' type='submit' name='delete'>Delete</button>
                        </td>
                        </tr>
                        ";
                            }
                        } else {
                            echo 'No result found.';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>

</html>