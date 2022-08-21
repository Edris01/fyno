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

        <?php include_once('../../includes/logic/reaction_alert.php'); ?>

        <div class="content-button-space">
            <button type="button" data-bs-toggle="modal" class="btn btn-primary" data-bs-target="#myAdd"><span class="bi bi-plus"></span> New</button>
            <input class="form-control w-25" type="search" autocomplete="off" placeholder="Search Student...">
        </div>

        <table id='myTable' class="table table-striped table-bordered table-hover caption-top">
            <caption class="text-center fs-4">STUDENTS</caption>
            <thead class="bg-info text-center">
                <th>#</th>
                <th>Full name</th>
                <th>Course</th>
                <th>Reg No.</th>
                <th>Fees</th>
                <th colspan="3">Action</th>
            </thead>
            <tbody class="text-center result">
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
                            <button class='btn btn-secondary btn-sm' data-bs-toggle='modal' data-bs-target='#myViewStudent' type='submit' name='view'><i class='bi bi-binoculars'></i> View</button>
                            <button class='btn btn-success btn-sm' data-bs-toggle='modal' data-bs-target='#myEditStudent' type='submit' name='edit'><i class='bi bi-pencil-square'></i> Edit</button>
                            <button id='' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#myDelete_student' type='submit' name='delete_student'><i class='bi bi-trash'></i> Delete</button>
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

<!-- modal in the system  -->
<?php include_once('../../includes/logic/view_print_modal.php'); ?>
<?php include_once('../../includes/logic/add_delete_edit_chat_modal.php'); ?>

<!-- jquery linkup  -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    $(document).ready(function() {
        $("myTable").DataTable();

        $(document).on("click", '.close', function() {
            $('.alert').hide();
        })
    }) 
</script>
<?php
include('../../includes/layouts/footer.php')
?>