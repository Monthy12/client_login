<?php session_start();

require_once 'database_connection.php';
require_once 'functions.inc.php';

$username = $_SESSION["username"];

                    
    if(isset($_POST["update"])) {
        
        $update_first_name = mysqli_real_escape_string($con, $_POST['first_name']);
        $update_last_name = mysqli_real_escape_string($con, $_POST['last_name']);
        $update_email = mysqli_real_escape_string($con, $_POST['email']);
        
    
        updateUser($con, $username, $update_first_name,  $update_last_name, $update_email);
    
    }
    
    
    
    
    
    if(isset($_POST["update_password"])) {
    
        $update_password = mysqli_real_escape_string($con, $_POST['change_password']);
    
        updatePassword($con, $username, $update_password);
    
    }

?>