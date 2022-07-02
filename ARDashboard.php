<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <div>
            <br>
            <div class="text-center mt-3">
                <h2 class="int text-danger ">Dashboard</h2>
                <div class="int text-center text-success">
                    <?php
                    echo date("D d-M-Y");
                    ?>
                </div>
            </div>
        </div>
        <br>

        <ul class="nav-bar" id="main-menu">
            <li>
                <a class="active-menu fs-4 text-dark btn" href="AREnroll.php">Enroll</a>
            </li>
            <br>
            <li>
                <a class="fs-4 text-dark btn" href="ARStudent.php">Students</a>
            </li>
            <br>
            <li>
                <a class="fs-4 text-dark btn" href="ARSummary.php">Summary</a>
            </li>
            <br>
            <li>
                <a class="fs-4 text-dark btn btn-warning" href="ARCommunicate.php">We Chat <i class="bi bi-chat-right-quote-fill"></i></a>
            </li>
        </ul>
    </div>
</nav>