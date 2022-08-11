<?php
session_start();

// initialling variables 
$emailErr = $passwordErr = $misMatchErr = "";
$email = $password = "";


// login action for students
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email)) {
        $emailErr = "Email required";
    }else {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($password)) {
        $passwordErr = "Password is required";
    } else{
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        if(strlen($password) < 3) {
            $passwordErr = "Password must be more than 3 characters";
        } else {
            // $password = md5($password);
        }
    } 

    if (!($emailErr <> "") && !($passwordErr <> "")) {
        
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['regno'] = $regno;
            header('Location: ./admin/Student/Payments.php');
        } else {
            $misMatchErr = "Invalid Username or Password";
        }
    }
}
