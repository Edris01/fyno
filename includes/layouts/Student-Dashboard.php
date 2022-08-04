<div class="text-center mt-3">
    <!-- picking the profile picture from the database to be displayed here -->
    <img class="dp px-5 mb-3 mt-2 w-75 h-75 img-thumbnail" src="../../assets/image/user.jpeg" />
    <!-- picking Reg No from the database to be displayed here  -->
    <!-- <?php
        // echo $regno;
        ?> -->
    <h5 class="text-center text-info">19/BIT/031/UMC</h5>
    <!-- displaying the current date  -->
    <div class="int text-center text-success">
        <?php
        echo date("D d-M-Y");
        ?>
    </div>
</div>
<ul>
    <li>
        <a class="" href="../../admin/student/Payments.php"><i class="bi bi-cash-coin text-success"></i> &nbsp; Payments</a>
    </li>
    <li>
        <a class="" href="../../admin/student/Slips.php"><i class="bi bi-wallet text-success"></i> &nbsp;  Pay Slips</a>
    </li>
    <li>
        <a class="" href="../../admin/student/Paynow.php"><i class="bi bi-paypal text-success"></i> &nbsp; Pay Now</a>
    </li>
</ul>