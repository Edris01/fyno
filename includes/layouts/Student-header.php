<header>
    <div class="logo">
        <a href="../../admin/student/Payments.php">
            <h3 class="logo-text px-3 text-light"><span>MIU</span>-FPS</h3>
        </a>
    </div>

    <nav class="pt-3 pe-3">
        <div class="dropdown">
        <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Log Out
            <!-- i want show username for the account holder instead of the log out word  -->
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../../admin/student/Payments.php"><i class="bi bi-cash-coin"></i> Payments</a></li>
            <li>
                <a href="../../admin/student/message.php" class="dropdown-item"><i class="bi bi-envelope"></i> Messages</a>
            </li>
            <li class="">
                <form action="../../includes/logic/logout.php" method="get">
                    <button type="submit" name="logout" class="dropdown-item">Log Out <i class="bi bi-power"></i></button>
                </form>
            </li>
        </ul>
    </div>
    </nav>     
</header>