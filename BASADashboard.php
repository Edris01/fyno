
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse h-100">
        <div>
            <br>
            <div class="text-center mt-3">
                <h2 class="int text-danger ">Dashboard</h2>
                <div class="text-center text-success int">
                    <?php
                    echo date("D d-M-Y");
                    ?>
                </div>
            </div>
        </div>
        <br>

        <ul class="nav-bar" id="main-menu">
            <li>
                <a class="active-menu fs-4 text-dark btn" href="BASAPayments.php">Payments</a>
            </li>
            <br>
            <li>
                <a class="fs-4 text-dark btn" href="BASACleared.php">Cleared</a>
            </li>
            <br>
            <li>
                <a class="fs-4 text-datk btn" href="BASABalances.php">Balances</a>
            </li>
            <!-- i had created this botton to help the bausar to calculate and make more finanical calculate like the cashflow e.g cash in ne cas out  -->
            <!-- <br>
            <li>
                <a class="fs-4 text-dark btn" href="fixedChecksBASA.php">Checks</a>
            </li> -->
            <br>
            <li>
                <a class="fs-4 text-datk btn btn-warning" href="BASACommunicate.php">We Chat</a>
            </li>
        </ul>
    </div>
</nav>