<?php
session_start();
include "head.php";
?>

<body class="container-fluid m-0 p-0">
    <div class="bg-success fixedtop">
        <?php
        include "ARtop.php";
        ?>
    </div>

    <div class="dashboard">
        <div class="bg-light fixedDashboard ">
            <?php
            require_once "ARDashboard.php";
            ?>
        </div>
        <div class="fixedDisplay">
            <h3 class="text-success text-center">Searched Students</h3>
            <hr class="text-dark mx-2">

            <table class="table mx-2">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>USERNAME</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            if (isset($_GET['search_student_AR'])) {
                                header("location: searched.php");
                                $sql = "SELECT * FROM users WHERE username = $username";
                                $result = mysqli_query($db, $sql);
                                $rowCount = mysqli_num_rows($result);
                            
                                if ($rowCount > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $user_Id = $row['id'];
                                        $uName = $row['username'];
                                    };
                                } else {
                                    echo 'No Results Found!';
                                }
                            }
                        ?>
                        <td>
                            <?php echo $user_Id; ?>
                        </td>
                        <td>
                            <?php echo $uName; ?>
                        </td>
                        <td>
                           <form action="searched.php" method="get">
                                <button class="btn btn-info" type="submit" name="edit">Edit</button>&nbsp;
                                <button class="btn btn-danger" type="submit" name="update">Update</button>
                           </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
<?php
    include_once "footer.php";
?>