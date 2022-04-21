<?php session_start(); ?>

<?php

    // $userid = $_SESSION["userid"];
    // $email = $_SESSION["email"];
    
    
    // if(isset($userid) && $mail != 'admin@gmail.com'){
    //     require_once 'index.php';
        
    // }else {
    //     require_once 'auth/login.php';
    //     exit();
    // }

?>

<!DOCTYPE html>
<html lang="en">


<!-- HEADER -->
<?php require_once 'header.php';?>

<body>

    <section class="login">
            <div class="blue-overlay">
                
                <div class="home-inner container-fluid">
                    
                    <?php  require_once 'navbar_links.php'; ?>

                    <div class="row">
                        <div class="col-md-10 offset-md-1 sign-up__vh_index_6 u-center-big">
                            <div class="card">
                                
                                <div class="card-body neg-margin-sidebar">

                                    <div class="row">
                                        
                                            <div class="col-md-3 d-none d-md-block sidebar-background">
    
                                                <div class="text-left">
    
                                                    <div class="margin-small-top"></div>
                                                    <p class="margin-left-large light-grey">1% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 1%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                            
                                                    <!--Navbar  -->
                                                    <?php  require_once 'navbar.php'; ?>

                                            <div class="col-md-9">


                                            <div class="row mt-4">
                                                <div class="col-md-11 ml-5">
                                                    <p class="light-grey">Welcome message ......</p>
                                                </div>
                                            </div> 


                                                
                                                <div class="row margin-big">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">How many tax returns should we prepare for you?</label><br/></br>
                                                                
                                                                    <input type="radio" class="btn-check form-check-input" name="options-outlined" id="success-outlined" autocomplete="off" value='1' onchange="singleYear()">
                                                                    <label class="btn btn-outline-secondary mr-3" for="success-outlined">One Year</label>    
                                                                

                                                                
                                                                    <input type="radio" class="btn-check form-check-input" name="options-outlined" id="danger-outlined" autocomplete="off" onchange="multipleYears()" value='2'>
                                                                    <label class="btn btn-outline-secondary" for="danger-outlined">More Than One Year</label>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div id="multipleForms" class="class_hidden">
                                                    <form action="includes/filing_years.inc.php" method="POST">
                                                        
                                                        <div class="row mt-5">
                                                            <div class="col-md-12 ml-5 mt-3">
                                                                <div class="form-group">
                                                                    <div class="form-group light-grey">
                                                                        <label for="">Which years would you like us to prepare</label><br/><br/>
                                                                        
                                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-1" autocomplete="off" name="year" value="2018">
                                                                        <label class="btn btn-outline-info mr-3" for="btn-check-outlined-1">2018</label>

                                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-4" autocomplete="off" name="year" value="2019">
                                                                        <label class="btn btn-outline-info mr-3" for="btn-check-outlined-4">2019</label>
    
                                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-2" autocomplete="off" name="year" value="2020">
                                                                        <label class="btn btn-outline-info mr-3" for="btn-check-outlined-2">2020</label>
    
                                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-3" autocomplete="off" name="year" value="2021">
                                                                        <label class="btn btn-outline-info mr-3" for="btn-check-outlined-3">2021</label>
    

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
    
                                                        <div class="row mt-3">
                                                            <div class="col-md-12 ml-5">
                                                                <div class="form-group">
                                                                    <p class="light-grey">Great, lets start with .....</p>
                                                                </div>
                                                            </div>
                                                        </div>
    
    
                                                        <div class="row">
                                
                                                            <div class="col-md-6 offset-md-6">
                                                                <div class="row mr-auro">


                                                                    <div class="mr-5">
                                                                        <input type="submit"  name="create" value="Create" class="btn btn-primary btn-block color-text-white mb-5 mt-5">
                                                                    </div>
    
                                                                </div>
                                                                    
                                                            </div>
                                                                
                                                        </div>
                                                        
                                                    </form>
                                                </div>


                                                <div id="singleForm" class="class_hidden">
                                                    
                                                    <form action="includes/filing_years.inc.php" method="POST">
                                                        
                                                        <div class="row mt-5">
                                                            <div class="col-md-12 ml-5 mt-3">
                                                                <div class="form-group">
                                                                    <div class="light-grey">
                                                                        <label for="">Which year would you like us to prepare</label><br/><br/>
                                                                        
                                                                        <input type="radio" class="btn-check" id="btn-check-1-outlined" autocomplete="off" name="year" value="2018">
                                                                        <label class="btn btn-outline-info mr-3" for="btn-check-1-outlined">2018</label>

                                                                        <input type="radio" class="btn-check" id="btn-check-4-outlined" autocomplete="off" name="year" value="2019">
                                                                        <label class="btn btn-outline-info mr-3" for="btn-check-4-outlined">2019</label>
    
                                                                        <input type="radio" class="btn-check" id="btn-check-2-outlined" autocomplete="off" name="year" value="2020">
                                                                        <label class="btn btn-outline-info mr-3" for="btn-check-2-outlined">2020</label>
    
                                                                        <input type="radio" class="btn-check" id="btn-check-3-outlined" autocomplete="off" name="year" value="2021">
                                                                        <label class="btn btn-outline-info mr-3" for="btn-check-3-outlined">2021</label>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
    
                                                        <div class="row mt-3">
                                                            <div class="col-md-12 ml-5">
                                                                <div class="form-group">
                                                                    <p class="light-grey">Great, lets start with .....</p>
                                                                </div>
                                                            </div>
                                                        </div>
    
    
                                                        <div class="row">
                                                            <div class="col-md-6 offset-md-6">
                                                                <div class="row mr-auro">
                                                                    <div class="mr-5 button_font_small">
                                                                        <input type="submit"  name="create" value="General Question" class="btn btn-outline-warning btn-block color-text-white mb-5 mt-5 button_font_small">
                                                                    </div>
                                                                </div>
                                                            </div>
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
            </div>

    </section>

    <!-- FOOTER -->
    <?php require_once 'footer.php';?>

</body>
