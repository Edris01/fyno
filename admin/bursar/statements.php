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
        include('../../includes/layouts/Bursar-dashboard.php')
        ?>
    </div>

    <!-- content  -->
    <div class="content">
        <div class="content-button-space">
            <button class='btn btn-danger' type='submit' name='print'><i class='bi bi-file-earmark-image'></i> PDF</button>
            <input class="form-control w-25" type="search" name="search_student_name" placeholder="Search Student..." aria-label="Search">
        </div>
        <!-- statements for payments which contain all transacts for all students and can be printed at once -->
        <table class="table table-striped table-bordered table-hover caption-top">
            <caption class="text-center fs-4">STATEMENTS</caption>
            <thead class="bg-info text-center">
                <th>Name</th>
                <th>Balance</th>
                <th colspan="2">Action</th>
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
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['balance'] . "</td>
                        <td>
                            <button class='btn btn-success btn-sm' data-bs-toggle='modal' data-bs-target='#myView' type='submit' name='view'><i class='bi bi-binoculars'></i> View</button>
                            <button class='btn btn-primary btn-sm' data-bs-toggle='modal' data-bs-target='#myPrint' type='submit' name='print'><i class='bi bi-printer-fill'></i> Print</button>
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
<?php include_once('../../includes/logic/view_print_modal.php'); ?>

<?php
    include('../../includes/layouts/footer.php')
?>