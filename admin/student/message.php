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
<!-- payments grouped per semester for easy issuing out a examination permit/card and financial statements  -->

    <!-- content  -->
    <div class="content">
        <div class="content-button-space">
            <button type="submit" data-bs-toggle="modal" data-bs-target="#payNow" class="btn btn-warning pull-right"><i class="bi bi-paypal"></i> &nbsp; Pay Now</button>
            <!-- <input class="form-control w-25" type="search" name="search_student_name" placeholder="Search Message" aria-label="Search"> -->
        </div>

        <table class="table table-striped table-bordered table-hover caption-top">
            <caption class="text-center fs-4">ANNOUNCEMENTS</caption>
            <thead class="bg-info text-center">
                <th>Date</th>
                <th>Subject</th>
                <th colspan='5'>Message</th>
            </thead>
            <tbody class="text-center">
                <?php
                include('../../includes/logic/config.php');

                $sql = "SELECT * FROM chat";
                $result = mysqli_query($conn, $sql);
                $rowCount = mysqli_num_rows($result);

                if ($rowCount > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo
                        "
                        <tr>
                        <td>". Date('d-M-Y') ."</td>
                        <td>" . $row['chatsubject'] . "</td>
                        <td>" . $row['content'] . "</td>
                        </tr>
                        ";
                    }
                } else {
                    echo
                        ("
                        <tr>
                        <td colspan='5'> No message !</td>
                        </tr>
                        ");
                }
                ?>
            </tbody>
        </table>

    </div>
</main>
<?php include_once('../../includes/logic/view_print_modal.php'); ?>
<?php include_once('../../includes/logic/paynow_modal.php') ?>


<?php
    include('../../includes/layouts/footer.php')
?>