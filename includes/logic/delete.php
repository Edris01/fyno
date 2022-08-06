<?php

    session_start();
    include_once('./config.php');

    if(isset($_POST['delete'])) {
        $sql = "DELETE FROM students WHERE name = '". $_POST['name']."'";

        if($conn->query($sql)) {
            $_SESSION['success'] = 'Student deleted success';
        } else {
            $_SESSION['error'] = 'Something went wrong';
        }
    } else {
        $_SESSION['error'] = 'Select a student to delete';
    }

    header('location: ../../admin/AR/student.php');