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
<!-- payments grouped per semester for easy issuing out a examination permit/card and financial statements  -->
    <!-- content  -->
    <div class="content">
        <div class="content-button-space">
            <button type="submit" data-bs-toggle="modal" data-bs-target="#payNow" class="btn btn-warning pull-right"><i class="bi bi-paypal"></i> &nbsp; Pay Now</button>
            <input class="form-control w-25" type="search" name="search_student_name" placeholder="Search Slips" aria-label="Search">
        </div>

        <table class="table table-striped table-bordered table-hover caption-top">
            <caption class="text-center fs-4">PAY SLIPS</caption>
            <thead class="bg-info text-center">
                <th>#</th>
                <th>Name</th>
                <th>Registration No.</th>
                <th>Paid</th>
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
                        <td>" . $row['transaction id'] . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['regno'] . "</td>
                        <td>" . $row['paid'] . "</td>
                        <td>" . $row['balance'] . "</td>
                        <td>
                            <button class='btn btn-success' data-bs-toggle='modal' data-bs-target='#myView' type='submit' name='view'><i class='bi bi-binoculars'></i> View</button>
                            <button class='btn btn-primary' type='submit' name='print'><i class='bi bi-printer-fill'></i> Print</button>
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
<?php include_once('../../includes/logic/view_modal.php'); ?>

<?php
    include('../../includes/layouts/footer.php')
?>