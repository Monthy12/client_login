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
                                                    <p class="margin-left-large light-grey">9% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 9%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                                            <li class="breadcrumb-item mr-2"><a href="dependent.php" class="boder-under">Dependents</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="contact.php">Contact Information</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="bank_account.php">Bank Information</a></li>
                                                        </ol>
                                                    </nav>
                                                </div>
                                            </div> 
                                                
                                                
                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">First Name *</label><br/>
                                                                <input type="text" class="form-control col-md-2" name="personalFirstName">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Middle Name </label><br/>
                                                                <input type="text" class="form-control col-md-2" name="personalMiddleName">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Last Name *</label><br/>
                                                                <input type="text" class="form-control col-md-2" name="persoanlLastName">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Social Security Number</label><br/>
                                                                <input type="text" class="form-control col-md-2" name="personalSSN" id="telle" maxlength="11">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Date of Issuance of SSN </label><br/>
                                                                <input type="date" class="form-control col-md-2" name="personalDateOfBirth">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Date of Birth </label><br/>
                                                                <input type="date" class="form-control col-md-2" name="personalDateOfBirth">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class=" col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Relationship to taxpayer</label><br/>
                                                                <select class="form-control" aria-label="Default select example">
                                                                    <option value="">-----</option>
                                                                    <option value="son">Son</option>
                                                                    <option value="daughter">Daughter</option>
                                                                    <option value="other">Other</option>
                                                                </select>
                                                                                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Was child Naturalized?</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-1-outlined" autocomplete="off" name="Year" value="yes">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-1-outlined">Yes</label>
    
                                                                <input type="radio" class="btn-check" id="btn-check-2-outlined" autocomplete="off" name="Year" value="2020">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-2-outlined">No</label>
    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                        
                                                    <div class="col-md-2 offset-md-6">
                                                        <div class="row mr-auro">
                                                            <div class="d-flex ">

                                                                <div class="">
                                                                    <a href="spouse_itin.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                        <span class="pl-1 button_font_small">Spouse ITIN</span>
                                                                    </a>
                                                                </div>

                                                                <div class="mr-5">
                                                                    <a href="contact.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-3 button_font_small">Contact Info <i class="fas fa-arrow-right button_font_small"></i></span>
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
        var tele = document.querySelector('#telle');

        tele.addEventListener('keyup', function(e){
          if (event.key != 'Backspace' && (tele.value.length === 3 || tele.value.length === 6)){
          tele.value += '-';
          }
        });

    </script>

</body>
