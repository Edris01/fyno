<?php
    session_start();
    include_once('./config.php');

    if(isset($_POST['send'])) {

        // planning to just email the announcement to the students email address just by one click

        // $to = $_POST['receipt'];
        // $subject = $_POST['chatsubject'];
        // $message = $_POST['message'];
        // $from = 'miuofps@miu.ac.ug';

        // mail($to,$subject,$message);
        
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