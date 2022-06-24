<?php
session_start();
include "server.php";

$sql = "SELECT * FROM 'users'";

$result = mysqli_query($db, $sql);

?>


<!DOCTYPE html>
<html lang="en">

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
        <div class="bg-light fixedDashboard ">
            <?php
            require_once "fixedDashboardAR.php";
            ?>
        </div>
        <div class="fixedDisplay">
            <div class="containers mx-2">
                <h3 class="text-success">Students</h3>
                <nav class="navbar">
                    <div class="container">
                        <form action="studentAR.php" method="POST" class="d-flex" role="search">
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
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc());
                    }
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td>
                            <a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
                            <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Update</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- <table class="table table-striped table-hover mx-1">
                <tr class="bg-warning">
                    <th>Reg No.</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Faculty </th>
                    <th>Course</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>19/BIT/031/UMC</td>
                    <td><?php echo $username; ?></td>
                    <td>lubowaedris</td>
                    <td>Technology</td>
                    <td>BIT</td>
                    <td>
                        <a href="updateAR.php"><button class="btn btn-info">Edit</button></a>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </table> -->
        </div>

    </div>
</body>

</html>