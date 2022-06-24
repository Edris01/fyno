<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <div>
            <div class="">
                <!-- all the profile picture should be gotten for the database -->
                <img class="dp px-5 mb-3 mt-2 w-75 h-75 img-thumbnail" src="./user.jpeg" />
                <div class="inner-text">
                    <!-- <?php echo $_SESSION['RegNo']; ?> //getting Regno from the database -->
                    <h5 class="px-3 text-info">19/BIT/031/UMC</h5>
                    <div class="mx-2">
                        <?php
                            echo date("D d-M-Y H:i");
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <ul class="nav-bar" id="main-menu">
            <li>
                <a class="active-menu fs-4 text-dark btn" href="fixedPayments.php">Payments</a>
            </li>
            <br>
            <li>
                <a class="fs-4 text-dark btn" href="fixedResults.php">Results</a>
            </li>
            <br>
            <li>
                <a class="fs-4 text-dark btn" href="fixedSlips.php">Bank Slips</a>
            </li>
            <br>
            <li>
                <a class="fs-4 text-dark btn" href="fixedPaynow.php ">Pay Now</a>
            </li>
            <br>
        </ul>
    </div>
</nav>