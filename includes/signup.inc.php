<?php

require_once 'database_connection.php';


if(isset($_POST['submit'])) {
    

    
    $firstName = mysqli_real_escape_string($con, $_POST['first_name']);
    $middleName = mysqli_real_escape_string($con, $_POST['middle_name']);
    $lastName = mysqli_real_escape_string($con, $_POST['last_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($con, $_POST['confirm_password']);
    

    
    require_once 'functions.inc.php';

    if (emptyInputSignup($firstName, $middleName, $lastName, $email, $password, $confirmPassword) !== false){
        header("Location: ../auth/registration.php?error=emptyinput");
        exit();
    }

    if (invalidUid($username) !== false){
        header("Location: ../auth/registration.php?error=invaliduid");
        exit();
    }

    if (invalidEmail($email) !== false){
        header("Location: ../auth/registration.php?error=invalidemail");
        exit();
    }

    if (pwdMatch($password, $confirmPassword) !== false){
        header("Location: ../auth/registration.php?error=passwordsdontmatch");
        exit();
    }

    if (uidExists($con, $email) !== false){
        header("Location: ../auth/registration.php?error=usernametaken");
        exit();
    }

    createUser($con, $firstName, $middleName, $lastName, $email, $password);

}
else{
    header("Location: ../auth/registration.php");
    exit();
}