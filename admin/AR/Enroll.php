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
        <div class="">
            <h3 class="text-success text-center">Enroll Student</h3>
        </div>
        <hr class="text-success">
        <h2>form for inputting students in the database</h2>

        <!-- <table class="table table-striped table-hover w-100">
            <thead class="bg-warning">
                <th>No.</th>
                <th>Username</th>
                <th>Email</th>
                <th>Reg No.</th>
                <th colspan="2">Action</th>
            </thead>
            <tbody>
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
        </table> -->

    </div>
</main>

<?php
    include('../../includes/layouts/footer.php')
?>