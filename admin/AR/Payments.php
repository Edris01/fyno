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
            <button class='btn btn-primary' type='submit' name='print'><i class='bi bi-printer-fill'></i> &nbsp; Print</button>
            <input class="form-control w-25" type="search" name="search_student_name" placeholder="Student" aria-label="Search">
        </div>

        <table class="table table-striped table-bordered table-hover caption-top">
            <caption class="text-center fs-4">Payments</caption>
            <thead class="bg-info text-center">
                <th>Transaction Id.</th>
                <th>Name</th>
                <th>Registration No.</th>
                <th>Paid</th>
                <th>Balance</th>
                <th colspan="3">Action</th>
            </thead>
            <tbody class="text-center">
                <?php
                include('../../includes/logic/config.php');

                $sql = "SELECT * FROM payments";
                $result = mysqli_query($conn, $sql);
                $rowCount = mysqli_num_rows($result);

                if ($rowCount > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo
                        "
                        <tr>
                        <td>" . $row['transaction id'] . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['regno'] . "</td>
                        <td>" . $row['paid'] . "</td>
                        <td>" . $row['balance'] . "</td>
                        <td>
                            <button class='btn btn-secondary' type='submit' name='view'><i class='bi bi-eye'></i> View</button>
                            <button class='btn btn-success' type='submit' name='delete'><i class='bi bi-pencil-square'></i> Edit</button>
                            <button class='btn btn-danger' type='submit' name='delete'><i class='bi bi-trash'></i> Delete</button>
                        </td>
                        </tr>
                        ";
                    }
                } else {
                    echo
                        ("
                        <tr>
                        <td colspan='6'> No Results Found!!!</td>
                        </tr>
                        ");
                }
                ?>
            </tbody>
        </table>

    </div>
</main>
<?php include_once('../../includes/logic/add_modal.php'); ?>
<?php include_once('../../includes/logic/edit_modal.php'); ?>
<?php include_once('../../includes/logic/view_modal.php'); ?>
<?php include_once('../../includes/logic/delete_modal.php'); ?>
<?php include_once('../../includes/logic/chat_modal.php'); ?>

<?php
    include('../../includes/layouts/footer.php')
?>