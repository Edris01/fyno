<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse h-100">
        <div>
            <div class="text-center mt-3">
                <h2 class="int text-danger ">Dashboard</h2>
                <div class="mx-2">
                    <?php
                    echo date("D d-M-Y H:i");
                    ?>
                </div>
            </div>
        </div>
        <br>

        <ul class="nav-bar" id="main-menu">
            <li>
                <a class="active-menu fs-4 text-dark btn" href="fixedPaymentsBASA.php">Payments</a>
            </li>
            <br>
            <li>
                <a class="fs-4 text-dark btn" href="fixedClearedBASA.php">Cleared</a>
            </li>
            <br>
            <li>
                <a class="fs-4 text-datk btn" href="fixedBalancesBASA.php">Balances</a>
            </li>
            <br>
            <li>
                <a class="fs-4 text-dark btn" href="fixedChecksBASA.php">Checks</a>
            </li>
        </ul>
    </div>
</nav>