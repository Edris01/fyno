<?php
// database connection 
$conn = mysqli_connect('localhost', 'root', '', 'final-project');
// checking database connection 
if(!$conn) {
    die("Database connection failed");
}

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
            $misMatchErr = "Username & Password don`t match";
        }
    }
}

// logout button 
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: ./login.php?out");
}