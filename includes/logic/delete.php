<?php

    session_start();
    require_once('./config.php');

    if(isset($_GET['id'])) {
        $sql = "DELETE FROM students WHERE id = '". $_POST['id']."'";

        if($conn->query($sql)) {
            $_SESSION['success'] = 'Student deleted successfully';
            header('location: ../../admin/AR/student.php');

        } else {
            $_SESSION['error'] = 'Something went wrong';
            header('location: ../../admin/AR/student.php');
        }
    } else {
        $_SESSION['error'] = 'Select a student to delete';
        header('location: ../../admin/AR/student.php');
    }



    if(isset($_POST['delete_payment'])) {
        $sql = "DELETE FROM payment WHERE id = '". $_POST['id']."'";

        if($conn->query($sql)) {
            $_SESSION['success'] = 'Student deleted successfully';
            header('location: ../../admin/AR/payments.php');
        } else {
            $_SESSION['error'] = 'Something went wrong';
            header('location: ../../admin/AR/payments.php');
        }
    } else {
        $_SESSION['error'] = 'Select a student to delete';
        header('location: ../../admin/AR/payments.php');
    }