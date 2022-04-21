<?php

require_once 'database_connection.php';

if(isset($_POST['create'])) {
    
    $projectName = mysqli_real_escape_string($con, $_POST['name_of_project']);
    $projectDescription = mysqli_real_escape_string($con, $_POST['project_description']);
    $projectCategory_other = mysqli_real_escape_string($con, $_POST['task_category_other']);
    $projectCategory = mysqli_real_escape_string($con, $_POST['task_category']);
    
    
    if ($projectCategory == "Other") {
        $projectCategory = $projectCategory_other;
    }
    
    require_once 'functions.inc.php';

    
    createProject($con, $projectName, $projectCategory, $projectDescription);

}
// else{
//     header("Location: ../signup.php");
//     exit();
// }

?>