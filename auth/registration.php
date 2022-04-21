<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i|Source+Sans+Pro:400,400i,600,600i" rel="stylesheet">

    <link rel='stylesheet' href='../css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='../css/bootstrap_old.css' type='text/css' media='all' />

    <script src="https://kit.fontawesome.com/7c6eb29ba2.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">

    <title>Client-Login</title>


</head>


<body>


    <section class="login">
        <div class="blue-overlay">
            <div class="home-inner container-fluid">

                <br><br><br><br>
                <div class="row ">
                    <div class="col-md-4 offset-md-4 sign-up__vh_register u-center-big">
                        <div class="card">
                            
                            <div class="card-body neg-margin-sidebar">

                                <div class="row">

                                    <div class="col-md-8 offset-md-2">
                                        
                                        <div class="container text-center">
                                            <?php 
                                                
                                                if (isset($_GET["error"])){
                                                    if ($_GET["error"] == "emptyinput") {
                                                        echo "<p>Fill in all fields!</p>";
                                                    }
                                                    elseif ($_GET["error"] == "invaliduid") {
                                                        echo "<p>Choose a proper username!</p>";
                                                    }
                                                    elseif ($_GET["error"] == "invalidemail") {
                                                        echo "<p>Choose a proper email!</p>";
                                                    }
                                                    elseif ($_GET["error"] == "passwordsdontmatch") {
                                                        echo "<p>Passwords doesn't match!</p>";
                                                    }
                                                    elseif ($_GET["error"] == "usernametaken") {
                                                        echo "<p>Username or email already taken!</p>";
                                                    }
                                                    elseif ($_GET["error"] == "stmtfailed") {
                                                        echo "<p>Something went wrong. Please try again!</p>";
                                                    }
                                                    elseif ($_GET["error"] == "none") {
                                                        echo "<p>You have signed up!</p>";
                                                    }
                                                }
                                            ?>
                                        </div>


                                        <div class="row mt-4">
                                            <div class="col-md-11 text-center">
                                                <h3 class="light-grey mb-4 mt-4">SignUp</h3>
                                            </div>
                                        </div> 

                                        <form  class="needs-validation" action="../includes/signup.inc.php" method="POST">

                                            <div class="form-group">
        
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="pr-2 mt-3 light-grey">First Name</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control mb-4" placeholder="" name="first_name" required>
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="pr-2 mt-3 light-grey">Middle Name</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control mb-4" placeholder="" name="middle_name" required>
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="pr-2 mt-3 light-grey">Last Name</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control mb-4" placeholder="" name="last_name"required>
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="pr-2 mt-3 light-grey">Email</label>
                                                        <div class="input-group">
                                                            <input type="email" class="form-control mb-4" placeholder="" name="email" required>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
        
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="pr-2 mt-3 light-grey">Password</label>
                                                        <div class="input-group">
                                                            <input type="password" class="form-control mb-4" placeholder="" name="password" id="myInput" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="pr-2 mt-3 light-grey">Confirm Password</label>
                                                        <div class="input-group">
                                                            <input type="password" class="form-control mb-4" placeholder="" name="confirm_password" id="myInput_confirm" required>
                                                        </div>
                                                      
                                                    </div>
                                                </div>
        
        
                                                <div class="row">
                                                    <div class="col-md-10 offset-md-1 mt-3">
                                                        <div class="input-group">
                                                            <input type="submit" value="Create Account" name="submit" class="btn btn-outline-warning color-text-white">
                                                        </div>
                                                    </div>
                                                </div
                            
                                                <br><br>
                                                
                                                <div class="text-center mb-5">
                                                    <a href="login.php">Already Registered !! Login Here.</a>
                                                </div>
                                                    
                            
                                        </form>
        
                                                </div>
        
                                            </div>
                                    
                                </div>
                                
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="../js/main.js" type="text/javascript"></script>

</body>
