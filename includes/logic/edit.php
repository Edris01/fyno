<?php

    session_start();
    include_once('config.php');

    if(isset($_POST['edit'])) {
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $course = $_POST['course'];
        $regno = $_POST['regno'];
        $fees = $_POST['fees'];
        $hall = $_POST['hall'];
        $gender = $_POST['gender'];

        $sql = "UPDATE student SET firstname =  '$firstname', lastname = '$lastname', course = '$course', regno = '$regno', fees = '$fees', hall = '$hall', gender = '$gender'";
        
        if($conn->query($sql)) {
            $_SESSION['success'] = 'Student updated successfully';
        } else {
            $_SESSION['error'] = 'Something went wrong';
        }
    } else {
        $_SESSION['error'] = 'Select a member to edit';
    }

    header('location: index.php');