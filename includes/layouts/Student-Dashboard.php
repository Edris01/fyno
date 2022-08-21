<!-- i think a student should not have a dashboard how do you see  -->
<ul>
    <li>
        <a class="" href="../../admin/student/Payments.php"><i class="bi bi-cash-coin"></i> &nbsp; Payments</a>
    </li>
    <!-- this option helps to group slip per semester to ease examination permit/card issuance  -->
    <!-- <li>
        <a class="" href="../../admin/student/Slips.php"><i class="bi bi-wallet"></i> &nbsp;  Pay Slips</a>
    </li> -->
    <!-- <li>
        <a class="" href="../../admin/student/Pay now.php"><i class="bi bi-paypal text-success"></i> &nbsp; Pay Now</a>
    </li> -->
</ul>



<!-- i want to press this at the extreme bottom nga they show owner`s credentials profile picture and reg no. and the date and time  -->

<div class="text-center mt-3">
    <!-- picking the profile picture from the database to be displayed here and should be in a circle format -->
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