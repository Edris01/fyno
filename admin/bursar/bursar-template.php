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
            <input class="form-control w-25" type="search" name="search_student_name" placeholder="Search..." aria-label="Search">
        </div>
        <!-- type here content to be viewed  -->

    </div>
</main>
<?php include_once('../../includes/logic/view_print_modal.php'); ?>

<?php
    include('../../includes/layouts/footer.php')
?>