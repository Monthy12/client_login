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
                                                    <p class="margin-left-large light-grey">4% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 4%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                            <!--Navbar  -->
                                            <?php  require_once 'navbar.php'; ?>

                                            <div class="col-md-9">


                                            <div class="row mt-4">
                                                <div class="col-md-11 ml-5">
                                                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item mr-2 pb-4"><a href="general.php">Filing Questions</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="general1.php">Streamlined Procedure</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="general2.php" class="boder-under">General Questions</a></li>
                                                        </ol>
                                                    </nav>
                                                </div>
                                            </div>
                                            
                                            <div>
                                                <form action="{{ route('store') }}" method="POST">

                                                    <div class="row mt-4">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Were you living out of the US as of April 15th? *</label><br/>
                                                                    
                                                                    <input type="radio" class="btn-check" id="btn-check-1-outlined" autocomplete="off" name="Year" value="yes">
                                                                    <label class="btn btn-outline-info mr-3" for="btn-check-1-outlined">Yes</label>

                                                                    <input type="radio" class="btn-check" id="btn-check-2-outlined" autocomplete="off" name="Year" value="2020">
                                                                    <label class="btn btn-outline-info mr-3" for="btn-check-2-outlined">No</label>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Have you received an IP PIN from IRS? *</label><br/>
                                                                    
                                                                    <input type="radio" class="btn-check" id="btn-check-4-outlined" autocomplete="off" name="Year1" value="yes" onchange="irs_pin_yes()">
                                                                    <label class="btn btn-outline-info mr-3" for="btn-check-4-outlined">Yes</label>

                                                                    <input type="radio" class="btn-check" id="btn-check-3-outlined" autocomplete="off" name="Year1" value="no" onchange="irs_pin_no()">
                                                                    <label class="btn btn-outline-info mr-3" for="btn-check-3-outlined">No</label>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4 class_hidden_b30" id="irs_pin_id">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Enter your IP PIN from IRS? *</label><br/>
                                                                    <input type="text" class="form-control col-md-2" id="exampleFormControlInput1" maxlength="6" min="0">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                                


                                            <div class="row">
                    
                                                <div class="col-md-2 offset-md-6">
                                                    <div class="row mr-auro">
                                                        <div class="d-flex ">

                                                            <div class="">
                                                                <a href="general1.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                    <span class="button_font_small">Streamlined Proced.</span>
                                                                </a>
                                                            </div>

                                                            <div class="mr-5">
                                                                <a href="personal.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5">
                                                                    <span class="pl-1 button_font_small">Personal Info <i class="fas fa-arrow-right button_font_small"></i></span>
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
