<?php
include("../../includes/layouts/head.php");
?>

<?php
include('../../includes/layouts/Student-header.php')
?>

<main>
    <!-- sidebar  -->
    <div class="left-sidebar">
        <?php
        include('../../includes/layouts/Student-dashboard.php')
        ?>
    </div>

    <!-- content  -->

    <!-- we need buttons here for easy checking oba the student is finally cleared or has a balance  -->
    <!-- two buttons for cleared and defaulters and when clicked gives out a print for students under that category   -->
    <div class="content">
        <div class="d-flex">
            <h3 class="text-success col-md-8">Payments</h3>
            <div class="d-flex col-md-4">
                <input class="form-control me-2" type="search" name="search_student_name" placeholder="Student" aria-label="Search">
                <button class="btn btn-outline-success" name="search_student_AR" type="submit">Search</button>
            </div>
        </div>
        <hr>

        <table class="table table-striped table-hover">
            <thead class="bg-warning text-center">
                <th>No.</th>
                <th>Username</th>
                <th>Email</th>
                <th>Reg No.</th>
                <th>Action</th>
                <!-- we need a status bar here that verifies oba somebody is cleared or has some balances and if clicked shows payments slips and the balance   -->
            </thead>
            <tbody class="text-center">
                <?php
                include('../../includes/logic/config.php');

                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);
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
                            <button class='btn btn-success' type='submit' name='delete'><i class='bi bi-eye'></i> Edit</button>
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
</main>

<?php
    include('../../includes/layouts/footer.php')
?>