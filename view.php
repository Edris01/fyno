<?php
include_once "head.php";
?>

<body class="container-fluid m-0 p-0">
    <div class="bg-success fixedtop">
        <?php
        include_once "ARtop.php";
        ?>
    </div>

    <div class="dashboard0">
        <div class="bg-light fixedDashboard ">
            <?php
            include_once "ARDashboard.php";
            ?>
        </div>
        <div class="fixedDisplay">
            <div class="d-flex col-md-12">
                <h3 class="text-success col-md-8">Students</h3>
                <nav class="navbar col-md-4">
                    <form action="view.php" method="POST" class="d-flex pe-2" role="search">
                        <input class="form-control me-2" type="search" name="search_student_name" placeholder="Student" aria-label="Search">
                        <button class="btn btn-outline-success" name="search_student_AR" type="submit">Search</button>
                    </form>
                </nav>
            </div>
            <hr class="text-dark mx-2">

            <table class="table w-75 m-2">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>USERNAME</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $idRow; ?>
                        </td>
                        <td>
                            <?php echo $idUsername; ?>
                        </td>
                        <td>
                            <form action="view.php" method="get">
                                <a class="btn btn-info" name="edit" href="update.php?edited">Edit</a>&nbsp;
                                <a class="btn btn-danger" name="delete" href="delete.php?">Delete</a>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>