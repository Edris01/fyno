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

        <div class="content-button-space">
            <button type="button" data-bs-toggle="modal" class="btn btn-primary" data-bs-target="#myAdd"><span class="bi bi-plus"></span> New</button>
            <input class="form-control w-25" type="search" name="" placeholder="Search Student" aria-label="Search">
        </div>


        <table class="table table-striped table-bordered table-hover caption-top">
            <caption class="text-center fs-4">Students</caption>
            <thead class="bg-info text-center">
                <th>No.</th>
                <th>Full name</th>
                <th>Course</th>
                <th>Reg No.</th>
                <th>Fees</th>
                <th colspan="3">Action</th>
            </thead>
            <tbody class="text-center">
                <?php
                include('../../includes/logic/config.php');

                $sql = "SELECT * FROM students";
                $result = mysqli_query($conn, $sql);
                $rowCount = mysqli_num_rows($result);

                if ($rowCount > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo
                        "
                        <tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['course'] . "</td>
                        <td>" . $row['regno'] . "</td>
                        <td>" . $row['fees'] . "</td>
                        <td>
                            <button class='btn btn-secondary' data-bs-toggle='modal' data-bs-target='#myView' type='submit' name='view'><i class='bi bi-eye'></i> View</button>
                            <button class='btn btn-success' data-bs-toggle='modal' data-bs-target='#myEdit' type='submit' name='edit'><i class='bi bi-pencil-square'></i> Edit</button>
                            <button class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#myDelete' type='submit' name='delete'><i class='bi bi-trash'></i> Delete</button>
                        </td>
                        </tr>
                        ";
                    }
                } else {
                    echo(
                        "
                        <tr>
                        <td colspan='7'>No Results Found!!!</td>
                        </tr>
                        ");
                }
                ?>
            </tbody>
        </table>

    </div>
</main>

<!-- i have hopes of making this one a function to avoid repeating code  -->
<?php include_once('../../includes/logic/add_modal.php'); ?>
<?php include_once('../../includes/logic/edit_modal.php'); ?>
<?php include_once('../../includes/logic/view_modal.php'); ?>
<?php include_once('../../includes/logic/delete_modal.php'); ?>
<?php include_once('../../includes/logic/chat_modal.php'); ?>

<?php
include('../../includes/layouts/footer.php')
?>