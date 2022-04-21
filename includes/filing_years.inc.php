<?php

    require_once 'database_connection.php';
    

    if(isset($_POST['create'])) {
        
        $filing_year = mysqli_real_escape_string($con, $_POST['year']);

        
        require_once 'functions.inc.php';
    
        
        createFilingYear($con, $filing_year);
    
    }


?>