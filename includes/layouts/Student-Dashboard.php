<div class="text-center mt-3">
    <!-- picking the profile picture from the database to be displayed here -->
    <img class="dp px-5 mb-3 mt-2 w-75 h-75 img-thumbnail" src="../../assets/image/user.jpeg" />
    <!-- picking Reg No from the database to be displayed here  -->
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
        <a class="" href="#">Payments</a>
    </li>
    <li>
        <a class="" href="#">Pay Slips</a>
    </li>
    <li>
        <a class="" href="#"><i class="bi bi-paypal"></i> Pay Now</a>
    </li>
</ul>