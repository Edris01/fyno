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

    <!-- content  -->
    <div class="content">
        <div class="">
            <h3 class="text-success text-center">Pay Now</h3>
        </div>
        <hr>
        <!-- on payment we want to do it as its with mtn nga
         somebody just entering details and when he/she pressed
          the pay button it he receiving a message on his phone then
           he puts a password like its with mtn  -->

           <h2>input options that will be filled to make transactions</h2>
        <!-- <table class="table table-striped table-hover">
            <thead class="bg-warning">
                <th>No.</th>
                <th>Username</th>
                <th>Email</th>
                <th>Reg No.</th>
                <th>Action</th>
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