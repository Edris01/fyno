<?php

$email = $password = "";
$errors = array();

// login action for students
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    if (empty($email)) {
        array_push($errors, 'email is required');
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, 'Invalid email format');
    }

    // if(empty($email)) {
    //     array_push($errors, "Email required");
    // } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     array_push($error, "Invalid email format");
    // }


    if (empty($password)) {
        array_push($errors, 'password is required');
    } elseif(strlen($password) > 8) {
        array_push($errors, "Password must be more than 8 characters");
    }

    if (count($errors) == 0) {
        $password = md5($password);

        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "";
            header('Location: ./login-two.php');
        } else {
            array_push($errors, "username and password don`t match");
        }
    }
}

//logout button

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php?loggedout");
}



















// i have to add in more fleids since it registeration for a student and it required many question to be filled by the bausar 
//registration action
// if (isset($_POST['register_user'])) {
//     $username = mysqli_real_escape_string($db, $_POST['username']);
//     $email = mysqli_real_escape_string($db, $_POST['email']);
//     $passwordOne = mysqli_real_escape_string($db, $_POST['password_1']);
//     $passwordTwo = mysqli_real_escape_string($db, $_POST['password_2']);

//     if (empty($username)) {
//         array_push($errors, 'username is required');
//     }
//     if (empty($email)) {
//         array_push($errors, 'email is required');
//     }
//     if (empty($passwordOne)) {
//         array_push($errors, 'password is required');
//     }
//     if ($passwordOne !== $passwordTwo) {
//         array_push($errors, 'passwords don`t match');
//     }

//     $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
//     $result = mysqli_query($db, $sql);
//     $user = mysqli_fetch_assoc($result);

//     if ($user) {
//         if ($user['username'] === $username) {
//             array_push($errors, "username already exists");
//         }

//         if ($user['email'] === $email) {
//             array_push($errors, 'email already exits');
//         }
//     }

//     if (count($errors) == 0) {
//         $password = md5($passwordOne);

//         $sql = "INSERT INTO users (username, email, password) 
//                     VALUES('$username', '$email', '$password')";

//         mysqli_query($db, $sql);

//         $_SESSION['username'] = $username;
//         $_SESSION['success'] = '';
//         header("Location: login.php");
//         echo "thanks for creating with a page";
//     }
// }



// code for updating the code thru editing
// if (isset($_GET['edit'])) {

//     header("location: ARUpdate.php");

//     $sql = "UPDATE users SET username = '$username' password = '$password' WHERE username = '$username'";

//     $result = mysqli_query($db, $sql);
// }




//code for delecting the user thru pressing the delete botton 

// if (isset($_GET['Delete'])) {
//     $UserID = $_GET['Delete'];
//     $sql = "DELETE FROM users WHERE username = '$username'";
//     $result = mysqli_query($db, $sql);

//     if ($result) {
//         header("location:view.php?deletedsuccessfully");
//     } else {
//         echo ' Please Check Your Query ';
//     }
// }




//send message by the admin
// if (isset($_POST['send_message'])) {

//     // sending a message to the students
//     header("location: ARStudent.php?sent");
// }




// code for veiwing data from the database

// if (isset($_GET['view'])) {
//     // this is code for viewing data from the database
//     $sql = "SELECT * FROM users";
//     $result = mysqli_query($db, $sql);
//     $rowCount = mysqli_num_rows($result);

//     if ($rowCount > 0) {
//         while ($row = mysqli_fetch_assoc($result)) {
//             $idRow = $row['id'];
//             $idUsername = $row['username'];
//         }
//     } else {
//         echo 'No result found.';
//     }
// }




// botton for printing the slip 
// if (isset($_GET['print'])) {
//     header("location: StudentSlips.php?printedsuccessfull");
// }




//logout botton

// if (isset($_GET['logout'])) {
//     session_destroy();
//     unset($_SESSION['username']);
//     header("location: login.php?loggedout");
// }




//search botton
// if (isset($_GET['search_student_AR'])) {
//     header("location: searched.php");
//     $sql = "SELECT * FROM users WHERE username = $username";
//     $result = mysqli_query($db, $sql);
//     $rowCount = mysqli_num_rows($result);

//     if ($rowCount > 0) {
//         while ($row = mysqli_fetch_assoc($result)) {
//             $row['username'] = $username;
//         };
//     } else {
//         echo 'No Results Found!';
//     }
// }
