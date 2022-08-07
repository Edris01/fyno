<?php

    session_start();
    include_once('./config.php');

    if(isset($_POST['pay'])) {
        $fullName = $_POST['name'];
        $regNo = $_POST['regno'];
        $paid = $_POST['paid'];
        $reason = $_POST['reason'];
        $balance = $_POST['balance'];

        $sql = "INSERT INTO payments (name,regno,paid,reason,balance) VALUE('$fullName', '$regNo', '$paid', '$reason', '$balance')";

        if($conn->query($sql)) {
            $_SESSION['success'] = 'Payment sent successfully';
        } else{
            $_SESSION['error'] = 'something went wrong';
        }
    } else {
        $_SESSION['error'] = 'Transaction failed try again ';
    }

    header('location: ../../admin/student/payments.php');