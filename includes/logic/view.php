<?php

    session_start();
    include_once('config.php');

    if($_GET['view']){
        $sql = "SELECT * FROM students WHERE id = '".$_GET['id']."'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);

        if($rowCount > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo
                "
                <tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['firstname'] . "</td>
                <td>" . $row['lastname'] . "</td>
                <td>" . $row['course'] . "</td>
                <td>" . $row['regno'] . "</td>
                <td>" . $row['fees'] . "</td>
                <td>" . $row['hall'] . "</td>
                <td>" . $row['gender'] . "</td>
                <td>
                    <button class='btn btn-success' type='submit' name='delete'><i class='bi bi-eye'></i> View</button>
                    <button class='btn btn-primary' type='submit' name='print'><i class='bi bi-printer-fill'></i> Print</button>
                </td>
                </tr>
                ";
            }
        }else{
            echo ("
                <tr>
                <td colspan='5'> No Results Found!!!</td>
                </tr>
            ");
        }
    }