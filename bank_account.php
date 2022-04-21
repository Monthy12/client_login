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
                                                    <p class="margin-left-large light-grey">11% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 11%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                            <!--Navbar  -->
                                            <?php  require_once 'navbar.php'; ?>

                                            <div class="col-md-9">


                                            <div class="row mt-4">
                                                <div class="col-md-11 ml-5">
                                                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item mr-2 pb-4"><a href="personal.php">Taxpayer Personal Information</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="itin.php">ITIN Information</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="spouse.php">Spouse Personal Information</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="spouse_itin.php">Spouse ITIN Information</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="dependent.php">Dependents</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="contact.php">Contact Information</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="bank_account.php" class="boder-under">Bank Information</a></li>
                                                        </ol>
                                                    </nav>
                                                </div>
                                            </div>  



                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">American Bank Account Information</label> <span class="pl-3">
                                                                    
                                                                </span><br/>                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class=" col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Account Type</label><br/>
                                                                <select class="form-control" aria-label="Default select example">
                                                                    <option value="">-----</option>
                                                                    <option value="son">Savings</option>
                                                                    <option value="daughter">Checking</option>
                                                                </select>
                                                                                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Account Number</label><br/>
                                                                <input type="text" class="form-control col-md-2" name="itinNumber" placeholder="">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Routing Number</label><br/>
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
                                                                <a href="contact.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                    <span class="pl-1 button_font_small">Contact Info</span>
                                                                </a>
                                                            </div>

                                                            <div class="mr-5">
                                                                <a href="id_verification.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5">
                                                                    <span class="pl-3 button_font_small">ID verification <i class="fas fa-arrow-right button_font_small"></i></span>
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

</body>
