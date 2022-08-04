<?php
include("../../includes/layouts/head.php");
?>

<?php
include('../../includes/layouts/admin-header.php')
?>

<main>
    <!-- sidebar  -->
    <div class="left-sidebar">
        <?php
        include('../../includes/layouts/AR-dashboard.php')
        ?>
    </div>

    <!-- content  -->
    <div class="content">
        <div class="d-flex">
            <h3 class="text-success col-md-8">Students</h3>
            <div class="d-flex col-md-4">
                <input class="form-control me-2" type="search" name="search_student_name" placeholder="Student" aria-label="Search">
                <button class="btn btn-outline-success" name="search_student_AR" type="submit">Search</button>
            </div>
        </div>
        <hr class="text-success">

        <table class="table table-striped table-hover w-100">
            <thead class="bg-warning text-center">
                <th>No.</th>
                <th>Username</th>
                <th>Email</th>
                <th>Reg No.</th>
                <th colspan="4">Action</th>
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
                            <button class='btn btn-secondary' type='submit' name='view'><i class='bi bi-eye'></i> View</button>
                            <button class='btn btn-success' type='submit' name='delete'><i class='bi bi-pencil-square'></i> Edit</button>
                            <button class='btn btn-primary' type='submit' name='print'><i class='bi bi-eye'></i> Print</button>
                            <button class='btn btn-danger' type='submit' name='delete'><i class='bi bi-trash'></i> Delete</button>
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