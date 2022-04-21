<?php

require_once 'database_connection.php';

if(isset($_POST['create'])) {
    
    $taskName = mysqli_real_escape_string($con, $_POST['name_of_task']);
    $taskDescription = mysqli_real_escape_string($con, $_POST['project_description']);
    $taskCategory = mysqli_real_escape_string($con, $_POST['task_category']);
    

    
    require_once 'functions.inc.php';

    
    createTask($con, $taskName, $taskCategory, $taskDescription);

}
// else{
//     header("Location: ../signup.php");
//     exit();
// }

?>