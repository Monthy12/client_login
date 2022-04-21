<?php

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $passowrd = $_POST["password"];
    

    require_once 'database_connection.php';
    require_once 'functions.inc.php';


    if (emptyInputLogin($email, $passowrd) !== false){
        header("Location: ../login.php?error=emptyinput");
        exit();
    }
    
    // echo $email;
    // exit();

    loginUser($con, $email, $passowrd);
    
}
else {
    // header("Location: ../login.php");
    // exit();
}