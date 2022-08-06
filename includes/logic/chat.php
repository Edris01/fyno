<?php
    session_start();
    include_once('./config.php');

    if(isset($_POST['send'])) {
        
        $subject = $_POST['subject'];
        $receipt = $_POST['receipt'];
        $message = $_POST['message'];

        $sql = "INSERT INTO chat (chatsubject, receipt, content) VALUE('$subject', '$receipt', '$message')";

        if($conn->query($sql)) {
            $_SESSION['success'] = 'Message sent succesfully';
        } else {
            $_SESSION['error'] = 'Something went wrong';
        }
    } else{
        $_SESSION['error'] = 'Message not sent';
    }

    header('location: ../../admin/AR/student.php');