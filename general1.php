<!DOCTYPE html>
<html lang="en">


<!-- HEADER -->
<?php require_once 'header.php';?>


<body>

    <section class="login">
            <div class="blue-overlay">
                <div class="home-inner container-fluid">

                    <?php  require_once 'navbar_links.php'; ?>

                    <div class="row ">
                        <div class="col-md-10 offset-md-1 d-none d-md-block sign-up__vh_index_2 u-center-big">
                            <div class="card">
                                
                                <div class="card-body neg-margin-sidebar">

                                    <div class="row">
                                        
                                            <div class="col-md-3 d-none d-md-block sidebar-background">
    
                                                <div class="text-left">
    
                                                    <div class="margin-small-top"></div>
                                                    <p class="margin-left-large light-grey">3% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 3%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                            <!--Navbar  -->
                                            <?php  require_once 'navbar.php'; ?>

                                            <div class="col-md-9">


                                            <div class="row mt-4">

                                                <div class="col-md-11 ml-5">
                                                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item mr-2 pb-4"><a href="general.php">Filing Questions</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="general1.php" class="boder-under">Streamlined Procedure</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="general2.php">General Questions</a></li>
                                                        </ol>
                                                    </nav>
                                                </div>
                                                
                                            </div> 
                                                
                                                <div>
                                                    <form action="" method="POST">
                                                       
    
                                                        <div class="row mt-4">
                                                            <div class="col-md-12 ml-5">
                                                                <div class="form-group">
                                                                    <div class="form-group light-grey">
                                                                        <label for="">Are you filing streamline? *</label><br/>
                                                                        
                                                                        <input type="radio" class="btn-check" id="btn-check-1-outlined" autocomplete="off" name="Year" value="yes">
                                                                        <label class="btn btn-outline-info mr-3" for="btn-check-1-outlined">Yes</label>
    
                                                                        <input type="radio" class="btn-check" id="btn-check-2-outlined" autocomplete="off" name="Year" value="2020">
                                                                        <label class="btn btn-outline-info mr-3" for="btn-check-2-outlined">No</label>
    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                                
                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Complete the Non-willful Failure to File Explanation Wording *</label><br/>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Please complete and upload relevant information and forms for each year you are filing *</label><br/>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                        
                                                    <div class="col-md-2 offset-md-6">
                                                        <div class="row mr-auro">
                                                            <div class="d-flex ">

                                                                <div class="">
                                                                    <a href="general.php" class="btn btn-outline-warning  color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                        <span class="pl-1 button_font_small">Filing Questions
                                                                        </span>
                                                                    </a>
                                                                </div>

                                                                <div class="mr-5">
                                                                    <a href="general2.php" class="btn btn-outline-warning  color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-3 button_font_small">General Questions <i class="fas fa-arrow-right button_font_small"></i></span>
                                                                    </a>
                                                                </div>

                                                            </div>

                                                        </div>
                                                            
                                                    </div>
                                                        
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
