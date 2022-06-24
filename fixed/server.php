<?php

session_start();

$username = "";
$email = "";
$errors = array();

//database connection
$db = mysqli_connect('localhost', 'root', '', 'test1');
if (!$db) {
    die("database connection failed!");
}

//registration action
if (isset($_POST['register_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $passwordOne = mysqli_real_escape_string($db, $_POST['password_1']);
    $passwordTwo = mysqli_real_escape_string($db, $_POST['password_2']);

    if (empty($username)) {
        array_push($errors, 'username is required');
    }
    if (empty($email)) {
        array_push($errors, 'email is required');
    }
    if (empty($passwordOne)) {
        array_push($errors, 'password is required');
    }
    if ($passwordOne !== $passwordTwo) {
        array_push($errors, 'passwords donot match');
    }

    $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
    $result = mysqli_query($db, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['username'] === $username) {
            array_push($errors, "username already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, 'email already exits');
        }
    }

    if (count($errors) == 0) {
        $password = md5($passwordOne);

        $sql = "INSERT INTO users (username, email, password) 
                    VALUES('$username', '$email', '$password')";

        mysqli_query($db, $sql);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = '';
        header("Location: login.php");
        echo "thanks for creating with a page";
    }
}

// login action
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);


    if (empty($username)) {
        array_push($errors, 'username is required');
    }
    if (empty($password)) {
        array_push($errors, 'password is required');
    }

    if (count($errors) == 0) {
        $password = md5($password);
        // play from here 
        if ($_POST['username'] == '@adminAR') {
            header('location: fixedEnrollAR.php');
        }

        if ($_POST['username'] == '@adminBASA') {
            header('location: fixedPaymentsBASA.php');
        }















        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "";
            header('Location: fixedPayments.php');
        } else {
            array_push($errors, "username and password dont match");
        }
    }
}


// searching button 
if(isset($_POST['search_student_AR'])) {
    $searchedName = mysqli_real_escape_string($db, $_POST['search_student_name']);
    $sql = "SELECT * FROM users WHERE username = '$searchedName'";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) >= 1) {
        header('location: view.php');
    }
}
