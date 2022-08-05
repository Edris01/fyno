<?php
session_start();
include_once('config.php');

if (isset($_POST['search'])) {
    $searchedName = $_POST['search'];

    $sql = "SELECT student.name FROM payment WHERE username = '$searchedName'";
    $results = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($results);

    if ($rowCount > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            echo ("
                <tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['fname'] . "</td>
                <td>" . $row['course'] . "</td>
                <td>" . $row['regno'] . "</td>
                <td>" . $row['fees'] . "</td>
                <td>
                    <button class='btn btn-success' type='submit' name='delete'><i class='bi bi-eye'></i> View</button>
                    <button class='btn btn-primary' type='submit' name='print'><i class='bi bi-printer-fill'></i> Print</button>
                </td>
                </tr>
            ");
        }
    } else {
        echo ("
                <tr>
                <td colspan='5'> No Results Found!!!</td>
                </tr>
            ");
    }
}
