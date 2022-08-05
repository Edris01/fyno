<?php

session_start();
include_once('./config.php');

if(isset($_POST['add'])) {
    $fullName = $_POST['fname'];
    $course = $_POST['course'];
    $regno = $_POST['regno'];
    $fees = $_POST['fees'];

    $sql = "INSERT INTO students (name,course,regno,fees) VALUE('$fullName','$course','$regno','$fees')";

    if($conn->query($sql)) {
        $_SESSION['success'] = 'Student added successfully';
    } else {
        $_SESSION['error'] = 'Something went wrong';
    }
} else{
    $_SESSION['error'] = 'Fill up the form';
}

header('location: ../../admin/AR/student.php');