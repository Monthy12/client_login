<?php

function emptyInputSignup($firstName, $middleName, $lastName, $email, $password, $confirmPassword) {
    $result;

    if (empty($firstName) || empty($middleName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword)){
        
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}


function invalidUid($username) {
    $result;

    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}


function time_convertor($num){

    $hours = floor($num / 60);

    $minutes = fmod($num, 60);

    return $hours.":".$minutes;

}

function invalidEmail($email) {
    $result;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}


function pwdMatch($password, $confirmPassword) {
    $result;

    if ($password !== $confirmPassword){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}


function uidExists($con, $email) {
    
    $sql = "SELECT * FROM users WHERE email = ?;";

    $stmt = mysqli_stmt_init($con);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../auth/registration.php?error=stmtfailed");
        exit;
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}



function createUser($con, $firstName, $middleName, $lastName, $email, $password) {


    $sql = "INSERT INTO users (first_name, middle_name, last_name, email, password, timestamp, account_type) VALUE (?,?,?,?,?,?,?)";

    $stmt = mysqli_stmt_init($con);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../auth/registration.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    $date = date('d-m-y h:i:s');
    $account_type = "client";

    mysqli_stmt_bind_param($stmt, "sssssss", $firstName, $middleName, $lastName, $email, $hashedPwd, $date, $account_type);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // header("Location: ../index.php");
    session_start();
    $_SESSION["email"] = $email;
    
    header("Location: ../auth/login.php");
    

}



function emptyInputLogin($username, $password) {
    $result;

    if (empty($username) || empty($password)){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}


function loginUser($con, $email, $passowrd){
    
    $uidExists = uidExists($con, $email);

    if($uidExists == false){
        header("Location: ../auth/login.php?error=wronglogin");
        exit();
    }

    $passwordHashed = $uidExists["password"];

    // $passwordHashed = $uidExists["user_pass"];
    $checkPassword = password_verify($passowrd, $passwordHashed);

    if($checkPassword == false){
        header("Location: ../auth/login.php?error=wronglogin");
        exit();
        
    }else if ($checkPassword == true){
        session_start();
     
        $_SESSION["userid"] = $uidExists["id"];
        $_SESSION["email"] = $uidExists["email"];
        

        header("Location: ../index.php");
        exit();
    }
}


function createTask($con, $taskName, $taskCategory, $taskDescription) {
    session_start();
    
    $username = $_SESSION["username"];
    $user_id;
    $categoty_id;
    $email;
    

    if(!isset($username)){
        header("Location: ../login.php");
        exit();
    }else{
        $user_query = "SELECT * FROM pixels_users WHERE user_login = '$username';";
        $result = mysqli_query($con, $user_query);
        while($row = mysqli_fetch_assoc($result)){
            $user_id= $row['ID'];
            $email = $row['user_email'];
        }
    }

    
    $category_query = "SELECT * FROM category WHERE name_of_category = '$taskCategory';";
    // echo $category_query;
    // exit();
    $result =  mysqli_query($con, $category_query);
   
        while($row = mysqli_fetch_assoc($result)){
            $category_id =  $row['id'];
            // echo $category_id;
            // exit();
        }

    
    $sql = "INSERT INTO project (user_id,category_id,project_name,description) VALUE (?,?,?,?)";


    $stmt = mysqli_stmt_init($con);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../tasks.php?error=stmtfailed");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "ssss", $user_id, $category_id, $taskName, $taskDescription);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        
        $to = $email;
        $from = "subscription@pixelsva.com";
        $name = "Pixels VA - Tasks";
        $subj = "Pixels VA - Subscription";
        $msg = "Hello <b>$username</b>,<br/><br/>Your task <b>$taskName</b> has been created successfully. You will be contacted by our team very soon.<br/><br/>Thank you.";
    
        smtpmailer($to, $from, $name, $subj, $msg);
        
        smtpmailer('pixelsva@gmail.com', $from, $name, $subj, $msg);
        
        header("Location: ../tasks.php?error=none");
        exit();
    }

}




function createProject($con, $projectName, $projectCategory, $projectDescription) {
    session_start();
    
    $username = $_SESSION["username"];
    $user_id;
    $email;
    // $categoty_id;
    

    if(!isset($username)){
        header("Location: ../login.php");
        exit();
    }else{
        $user_query = "SELECT * FROM pixels_users WHERE user_login = '$username';";
        $result = mysqli_query($con, $user_query);
        while($row = mysqli_fetch_assoc($result)){
            $user_id= $row['ID'];
            $email = $row['user_email'];
        }
    }

    
    $sql = "INSERT INTO development (user_id, project_name, project_category, project_description) VALUE (?,?,?,?)";
    
    $stmt = mysqli_stmt_init($con);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../projects.php?error=stmtfailed");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "ssss", $user_id, $projectName, $projectCategory, $projectDescription);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        
        
        $to = $email;
        $from = "subscription@pixelsva.com";
        $name = "Pixels VA - Projects";
        $subj = "Pixels VA - Subscription";
        $msg = "Hello <b>$username</b>,<br/><br/>Your project  <b>$projectName</b> has been created successfully. You will be contacted by our team very soon.<br/><br/>Thank you.";
    
        smtpmailer($to, $from, $name, $subj, $msg);
        
        smtpmailer('pixelsva@gmail.com', $from, $name, $subj, $msg);
        
        header("Location: ../projects.php?error=none");
        exit();
    }

}


function createFilingYear($con, $filing_year) {
    session_start();
    
    $email = $_SESSION["email"];
    $user_id;


    if(!isset($email)){
        header("Location: ../auth/login.php");
        exit();
    }else{
        $user_query = "SELECT * FROM users WHERE email = '$email';";
        $result = mysqli_query($con, $user_query);
        while($row = mysqli_fetch_assoc($result)){
            $user_id= $row['id'];
            // $email = $row['user_email'];
        }
    }

    
    $sql = "INSERT INTO filing_years (user_id, year) VALUE (?,?)";
    
    $stmt = mysqli_stmt_init($con);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../index.php?error=stmtfailed");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "ss", $user_id, $filing_year);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        
        
        header("Location: ../general.php?error=none");
        exit();
    }

}




function subscription($con){
    session_start();
    
    $username = $_SESSION["username"];

    $subscription_info_id;
    $name_of_subscription;
    $subscription_amount;
    $total_hours;
    $hours_used;
    $hours_left;
    $user_id;
    $hours_id;
    
    $user_query = "SELECT * FROM pixels_users WHERE user_login = '$username';";
    $result = mysqli_query($con, $user_query);
    while($row = mysqli_fetch_assoc($result)){
        $user_id= $row['ID'];
        
    }

    $subscription_query = "SELECT * FROM subscription WHERE user_id = '$user_id' and status = 'active';";
    $result = mysqli_query($con, $subscription_query);
    while($row = mysqli_fetch_assoc($result)){
        $subscription_info_id = $row['subscription_info_id'];
        $hours_id = $row['hours_id'];
    }

    $subscription_info_query = "SELECT * FROM subscription_info WHERE id = '$subscription_info_id';";
    $result_subscription_info = mysqli_query($con, $subscription_info_query);
    while($row = mysqli_fetch_assoc($result_subscription_info)){
        $name_of_subscription = $row['name_of_subscription'];
        $subscription_amount = $row["amount"];
        // $active_hours = $row["hours"];
    }
    
    
    $hours_query = "SELECT * FROM hours WHERE id = '$hours_id';";
    $result_hours = mysqli_query($con, $hours_query);
    while($row = mysqli_fetch_assoc($result_hours)){
        $total_hours= $row['total_hours'];
        $hours_used= $row['hours_used'];
        $hours_left= $row['hours_left'];
        
    }
    
    
    // session_start();
    $_SESSION["name_of_subscription"] = $name_of_subscription;
    $_SESSION["subscription_amount"] = $subscription_amount;
    $_SESSION["total_hours"] = $total_hours;
    $_SESSION["hours_used"] = $hours_used;
    $_SESSION["hours_left"] = $hours_left;


}


function packagestatus($con, $userid){
    $subscription_status;
    $result;
    
    $subscription_query = "SELECT * FROM subscription WHERE user_id = '$userid';";
    $result = mysqli_query($con, $subscription_query);
    
     while($row = mysqli_fetch_assoc($result)){
        $subscription_status= $row['status'];
    }
    
    if($subscription_status == 'active') {
        
        $result = true;
        
    }else {
        $result = false;
    }
    
    return  $result;
}

function alltask($con, $userid){
    $subscription_status;
    $result;
    
    $project_query = "SELECT * FROM project WHERE user_id = '$userid';";
    $result = mysqli_query($con, $project_query);
    
    //  while($row = mysqli_fetch_assoc($result)){
    //     $project_name= $row['project_name'];
    //     $status= $row['status'];
    // }
    

    return   $project_query;
}

function updateUser($con, $username, $update_first_name,  $update_last_name, $update_email){
    

    $sql= "UPDATE pixels_users SET user_nicename = ?, display_name = ?, user_email = ? WHERE user_login = ?;";

    $stmt = mysqli_stmt_init($con);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../account_settings.php?error=stmtfailed");
        exit;
    }else{
        mysqli_stmt_bind_param($stmt, "ssss", $update_first_name, $update_last_name, $update_email, $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        
        
        $to = $update_email;
        $from = "subscription@pixelsva.com";
        $name = "Pixels VA - Projects";
        $subj = "Pixels VA - Subscription";
        $msg = "Hello <b>$username</b>,<br/><br/>Your account details has been updated. Below are the deatils of your account.<br/><br/> First Name: <b>$update_first_name</b> <br/><br/> Last Name: <b>$update_last_name</b> <br/><br/> Email: <b> $update_email</b><br/><br/>Thank you.";
    
        smtpmailer($to, $from, $name, $subj, $msg);
        
        // smtpmailer('pixelsva@gmail.com', $from, $name, $subj, $msg);
        
        header("Location: ../account_settings.php?error=none");
        exit();
 
    }


}



function updatePassword($con, $username, $update_password) {
    
    $email;
    
    $hashedPwd = password_hash($update_password, PASSWORD_DEFAULT);
    
    $sql= "UPDATE pixels_users SET user_pass = ? WHERE user_login = ?;";

    $stmt = mysqli_stmt_init($con);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../account_settings.php?error=stmtfailed");
        exit;
    }else{
        mysqli_stmt_bind_param($stmt, "ss", $hashedPwd, $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        
        $user_query = "SELECT * FROM pixels_users WHERE user_login = '$username';";
        $result = mysqli_query($con, $user_query);
        while($row = mysqli_fetch_assoc($result)){
            $email = $row['user_email'];
        }
        
        $to = $email;
        $from = "subscription@pixelsva.com";
        $name = "Pixels VA - Subscription";
        $subj = "Pixels VA - Subscription";
        $msg = "Hello <b>$username</b>,<br/><br/>Your password has been successfully updated.<br/><br/>Thank you.";
    
        $error = smtpmailer($to, $from, $name, $subj, $msg);
        
        header("Location: ../account_settings.php?error=none");
        exit();
 
    }
    
}



