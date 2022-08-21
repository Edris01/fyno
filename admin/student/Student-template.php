<?php
include("../../includes/layouts/head.php");
?>

<?php
include('../../includes/layouts/Student-header.php')
?>

<main>
    <!-- sidebar  -->
    <!-- <div class="left-sidebar">
        <?php
        // include('../../includes/layouts/Student-dashboard.php')
        ?>
    </div> -->

    <!-- content  -->

    <!-- we need buttons here for easy checking oba the student is finally cleared or has a balance  -->
    <!-- two buttons for cleared and defaulters and when clicked gives out a print for students under that category   -->
    <div class="content">
        <?php include_once('../../includes/logic/reaction_alert.php'); ?>

        <div class="content-button-space">
            <button type="submit" data-bs-toggle="modal" data-bs-target="#payNow" class="btn btn-warning pull-right"><i class="bi bi-paypal"></i> &nbsp; Pay Now</button>
            <input class="form-control w-25" type="search" name="" placeholder="Search Payment..." aria-label="Search">
        </div>

        <table class="table table-striped table-bordered table-hover caption-top">
            <caption class="text-center fs-4">PAYMENTS</caption>
            <thead class="bg-info text-center">
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
// i want session feature to get for me the username ne regno. during the payment process after pressing the pay now option 
                if ($rowCount > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo
                        "
                        <tr>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['regno'] . "</td>
                        <td>" . $row['paid'] . "</td>
                        <td>" . $row['balance'] . "</td>
                        <td>
                            <button class='btn btn-success btn-sm' data-bs-toggle='modal' data-bs-target='#myViewPayment' type='submit' name='view'><i class='bi bi-binoculars'></i> View</button>
                            <button class='btn btn-primary btn-sm' type='submit' name='print'><i class='bi bi-printer-fill'></i> Print</button>
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

<?php include_once('../../includes/logic/paynow_modal.php') ?>
<?php include_once('../../includes/logic/view_print_modal.php') ?>

<?php
    include('../../includes/layouts/footer.php')
?>