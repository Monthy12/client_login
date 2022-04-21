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
                        <div class="col-md-10 offset-md-1 d-none d-md-block sign-up__vh_index_6 u-center-big">
                            <div class="card">
                                
                                <div class="card-body neg-margin-sidebar">

                                    <div class="row">
                                            <div class="col-md-3 d-none d-md-block sidebar-background">
    
                                                <div class="text-left">
    
                                                    <div class="margin-small-top"></div>
                                                    <p class="margin-left-large light-grey">14% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 14%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                            <!--Navbar  -->
                                            <?php  require_once 'navbar.php'; ?>

                                            <div class="col-md-9">


                                            <div class="row mt-4">
                                                    <div class="col-md-11 ml-5">
                                                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item mr-2 pb-4"><a href="payment.php" class="boder-under">Payment for our services</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="#">Our Fees</a></li>
                                                        </ol>
                                                    </nav>
                                                    </div>
                                                </div> 



                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Payment For Our Services</label> <span class="pl-3">
                                                                    
                                                                </span><br/>                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Card Number</label><br/>
                                                                <input type="text" class="form-control col-md-3" name="itinNumber" placeholder="">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Expiration Date</label><br/>
                                                                <input type="date" class="form-control col-md-2" name="itinNumber" placeholder="">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">CVV</label><br/>
                                                                <input type="text" class="form-control col-md-2" name="itinNumber" placeholder="">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Name on Card</label><br/>
                                                                <input type="text" class="form-control col-md-2" name="itinNumber" placeholder="">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                        
                                                <div class="col-md-2 offset-md-6">
                                                    <div class="row mr-auro">
                                                        <div class="d-flex ">

                                                            <div class="">
                                                                <a href="id_verification_spouse.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                    <span class="pl-1 button_font_small">Spouse ID</span>
                                                                </a>
                                                            </div>

                                                            <div class="mr-5">
                                                                <a href="deductions.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5">
                                                                    <span class="pl-3 button_font_small">Fees <i class="fas fa-arrow-right button_font_small"></i></span>
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

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

</body>
