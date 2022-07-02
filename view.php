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
        <div class="bg-light fixedDashboard ">
            <?php
            require_once "ARDashboard.php";
            ?>
        </div>
        <div class="fixedDisplay">
            <div class="containers mx-2">
                <h3 class="text-success">Students</h3>
                <nav class="navbar">
                    <div class="container">
                        <form action="view.php" method="POST" class="d-flex" role="search">
                            <input class="form-control me-2" type="search" name="search_student_name" placeholder="Student" aria-label="Search">
                            <button class="btn btn-outline-success" name="search_student_AR" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
            <hr class="text-dark mx-2">

            <table class="table mx-2">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>USERNAME</th>
                        <!-- <th>ACTION</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $sql = "SELECT * FROM users";
                        $result = mysqli_query($db, $sql);
                        $rowCount = mysqli_num_rows($result);

                        if ($rowCount > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                // echo $row['username'] . "<br>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['username'] . "</td>";
                            }
                        } else {
                            echo 'No result found.';
                        }
                        ?>
                        <!-- <td>
                            <form action="view.php" method="get">
                                <a class="btn btn-info" name="edit" href="update.php?edited">Edit</a>&nbsp;
                                <a class="btn btn-danger" name="delete" href="delete.php?">Delete</a>
                            </form>
                        </td> -->
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>