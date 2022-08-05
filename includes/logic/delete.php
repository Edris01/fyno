<?php

    session_start();
    include_once('./config.php');

    if(isset($_GET['id'])) {
        $sql = "DELETE FROM students WHERE id = '". $_GET['id']."'";

        if($conn->query($sql)) {
            $_SESSION['success'] = 'Student deleted success';
        } else {
            $_SESSION['error'] = 'Something went wrong';
        }
    } else {
        $_SESSION['error'] = 'Select a student to delete';
    }

    header('location: index.php');