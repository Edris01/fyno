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
                <a class="active-menu fs-4 text-dark btn" href="fixedEnrollAR.php">Enroll</a>
            </li>
            <br>
            <li>
                <a class="fs-4 text-dark btn" href="fixedStudentAR.php">Students</a>
            </li>
            <br>
            <li>
                <a class="fs-4 text-dark btn btn-warning" href="fixedCommunicateAR.php">We Chat</a>
            </li>
            <!-- i had put this botton to help the AR know the name of students in each Faculty and ne ku campus  -->
            <!-- <br>
            <li>
                <a class="fs-4 text-dark btn" href="fixedSummaryAR.php">Summary</a>
            </li> -->
        </ul>
    </div>
</nav>