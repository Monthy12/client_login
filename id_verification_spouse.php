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
                        <div class="col-md-10 offset-md-1 d-none d-md-block sign-up__vh_big u-center-big">
                            <div class="card">
                                
                                <div class="card-body neg-margin-sidebar">

                                    <div class="row">
                                            <div class="col-md-3 d-none d-md-block sidebar-background">
    
                                                <div class="text-left">
    
                                                    <div class="margin-small-top"></div>
                                                    <p class="margin-left-large light-grey">13% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 13%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                            <!--Navbar  -->
                                            <?php  require_once 'navbar.php'; ?>

                                            <div class="col-md-9">


                                            <div class="row mt-4">
                                                    <div class="col-md-11 ml-5">
                                                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item mr-2 pb-4"><a href="id_verification.php">Taxpayer ID Verification</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="id_verification_spouse.php" class="boder-under">Spouse ID Verification</a></li>
                                                        </ol>
                                                    </nav>
                                                    </div>
                                                </div> 

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">ID Verification</label> <span class="pl-3">
                                                                    
                                                                </span><br/>                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class=" col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Spouse US Driving License</label><br/>
                                                                <select class="form-control" aria-label="Default select example">
                                                                    <option value="">-----</option>
                                                                    <option value="son">Valid or expired US Driver's license</option>
                                                                    <option value="daughter">State issued identification card</option>
                                                                    <option value="daughter">Neither</option>
                                                                </select>                                                                   
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">License Number</label><br/>
                                                                <input type="text" class="form-control col-md-2" name="itinNumber" placeholder="">
                                                                
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
                                                                <label for="">Issue Date</label><br/>
                                                                <input type="date" class="form-control col-md-2" name="itinNumber" placeholder="">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Issue State</label><br/>
                                                                <select class="form-control" aria-label="Default select example">
                                                                    <option value="">-----</option>
                                                                    <option value="Alabama">Alabama</option>
                                                                    <option value="Alaska">Alaska</option>
                                                                    <option value="Arizona">Arizona</option>
                                                                    <option value="Arkansas">Arkansas</option>
                                                                    <option value="California">California</option>
                                                                    <option value="Colorado">Colorado</option>
                                                                    <option value="Connecticut">Connecticut</option>
                                                                    <option value="Delaware">Delaware</option>
                                                                    <option value="Florida">Florida</option>
                                                                    <option value="Georgia">Georgia</option>
                                                                    <option value="Hawaii">Hawaii</option>
                                                                    <option value="Idaho">Idaho</option>
                                                                    <option value="Illinois">Illinois</option>
                                                                    <option value="Indiana">Indiana</option>
                                                                    <option value="Iowa">Iowa</option>
                                                                    <option value="Kansas">Kansas</option>
                                                                    <option value="Kentucky">Kentucky</option>
                                                                    <option value="Louisiana">Louisiana</option>
                                                                    <option value="Maine">Maine</option>
                                                                    <option value="Maryland">Maryland</option>
                                                                    <option value="Massachusetts">Massachusetts</option>
                                                                    <option value="Michigan">Michigan</option>
                                                                    <option value="Minnesota">Minnesota</option>
                                                                    <option value="Mississippi">Mississippi</option>
                                                                    <option value="Missouri">Missouri</option>
                                                                    <option value="Montana">Montana</option>
                                                                    <option value="Nebraska">Nebraska</option>
                                                                    <option value="Nevada">Nevada</option>
                                                                    <option value="New Hampshire">New Hampshire</option>
                                                                    <option value="New Jersey">New Jersey</option>
                                                                    <option value="New Mexico">New Mexico</option>
                                                                    <option value="New York">New York</option>
                                                                    <option value="North Carolina">North Carolina</option>
                                                                    <option value="North Dakota">North Dakota</option>
                                                                    <option value="Ohio">Ohio</option>
                                                                    <option value="Oklahoma">Oklahoma</option>
                                                                    <option value="Oregon">Oregon</option>
                                                                    <option value="Pennsylvania">Pennsylvania</option>
                                                                    <option value="Rhode Island">Rhode Island</option>
                                                                    <option value="South Carolina">South Carolina</option>
                                                                    <option value="South Dakota">South Dakota</option>
                                                                    <option value="Tennessee">Tennessee</option>
                                                                    <option value="Texas">Texas</option>
                                                                    <option value="Utah">Utah</option>
                                                                    <option value="Vermont">Vermont</option>
                                                                    <option value="Virginia">Virginia</option>
                                                                    <option value="Washington">Washington</option>
                                                                    <option value="West Virginia">West Virginia</option>
                                                                    <option value="Wisconsin">Wisconsin</option>
                                                                    <option value="Wyoming">Wyoming</option>
                                                                </select>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                

                                                <div class="row">
                        
                                                <div class="col-md-2 offset-md-6">
                                                    <div class="row mr-auro">
                                                        <div class="d-flex ">

                                                            <div class="">
                                                                <a href="bank_account.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                    <span class="pl-1 button_font_small">Personal ID</span>
                                                                </a>
                                                            </div>

                                                            <div class="mr-5">
                                                                <a href="payment.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5">
                                                                    <span class="pl-3 button_font_small">Payment <i class="fas fa-arrow-right button_font_small"></i></span>
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
