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
                        <div class="col-md-10 offset-md-1 d-none d-md-block sign-up__vh_bigger u-center-big">
                            <div class="card">
                                
                                <div class="card-body neg-margin-sidebar">

                                    <div class="row">
                                        
                                            <div class="col-md-3 d-none d-md-block sidebar-background">
    
                                                <div class="text-left">
    
                                                    <div class="margin-small-top"></div>
                                                    <p class="margin-left-large light-grey">8% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 8%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                                            <li class="breadcrumb-item mr-2"><a href="spouse_itin.php" class="boder-under">Spouse ITIN Information</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="dependent.php">Dependents</a></li>
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
                                                            <label for="">Do you have an ITIN?</label> <span class="pl-3">
                                                                
                                                            </span><br/>

                                                            <div class="form-group light-grey">
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-1-outlined" autocomplete="off" name="Year" value="yes" onchange="itin_yes()">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-1-outlined">Yes</label>
    
                                                                <input type="radio" class="btn-check" id="btn-check-2-outlined" autocomplete="off" name="Year" value="no" onchange="itin_no()">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-2-outlined">No</label>
    
                                                            </div>                                                               
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                                <div class="row mt-3" id="itin_number_id">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">What is your ITIN?</label><br/>
                                                                <input type="text" class="form-control col-md-2" name="itinNumber" id="telle" maxlength="11">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3" id="apply_itin_id">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Do you want to apply for an ITIN?</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-11-outlined" autocomplete="off" name="Year1" value="yes" onchange="apply_itin_yes()">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-11-outlined">Yes</label>
    
                                                                <input type="radio" class="btn-check" id="btn-check-12-outlined" autocomplete="off" name="Year1" value="no" onchange="apply_itin_no()">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-12-outlined">No</label>
    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div id="foreign_id">

                                                    <div class="row mt-3" id="no_amended_returns">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Provide a copy of your foreign passport *</label> <span class="pl-3">
                                                                        
                                                                    </span><br/>
    
                                                                    <div class="form-group">
                                                                        <div class="form-group light-grey button_group">
                                                                            <label for="input1" value="test"> <i class="fa fa-upload mr-4"></i> File_Upload.pdf</label> <span id="file_names"></span>
                                                                            <input type="file" class="form-control col-md-2" name="personalSNNUpload" id="input1">
                                                                        </div>
                                                                    </div>
    
                                                                    <div class="row mt-2">
                                                                        <div class="col-md-12 ml-5">
                                                                            <div class="form-group">
                                                                                <div class="form-group light-grey">
                                                                                   
                                                                                    <div class="wrapper">
                                                                                        <input type="file" class="form-control col-md-2" id="real_input">
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

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Provide two of the following documents</label> <span class="pl-3">
                                                                   
                                                                </span><br/>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Drivers License" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                        Drivers License
                                                                    </label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Birth Certificate" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                        Birth Certificate
                                                                    </label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Foreign ID" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                        Foreign ID
                                                                    </label>
                                                                </div>                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3" id="no_amended_returns">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Drivers License *</label> <span class="pl-3">
                                                                    
                                                                </span><br/>

                                                                <div class="form-group">
                                                                    <div class="form-group light-grey button_group">
                                                                        <label for="input2" value="test"> <i class="fa fa-upload mr-4"></i> File_Upload.pdf</label> <span id="file_name2"></span>
                                                                        <input type="file" class="form-control col-md-2" name="personalSNNUpload" id="input2">
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <div class="col-md-12 ml-5">
                                                                        <div class="form-group">
                                                                            <div class="form-group light-grey">
                                                                               
                                                                                <div class="wrapper">
                                                                                    <input type="file" class="form-control col-md-2" id="real_input2">
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3" id="no_amended_returns">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Birth Certificate *</label> <span class="pl-3">
                                                                   
                                                                </span><br/>

                                                                <div class="form-group">
                                                                    <div class="form-group light-grey button_group">
                                                                        <label for="input3" value="test"> <i class="fa fa-upload mr-4"></i> File_Upload.pdf</label> <span id="file_name3"></span>
                                                                        <input type="file" class="form-control col-md-2" name="personalSNNUpload" id="input3">
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <div class="col-md-12 ml-5">
                                                                        <div class="form-group">
                                                                            <div class="form-group light-grey">
                                                                               
                                                                                <div class="wrapper">
                                                                                    <input type="file" class="form-control col-md-2" id="real_input3">
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3" id="no_amended_returns">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Foreign ID *</label> <span class="pl-3">
                                                                   
                                                                </span><br/>

                                                                <div class="form-group">
                                                                    <div class="form-group light-grey button_group">
                                                                        <label for="input4" value="test"> <i class="fa fa-upload mr-4"></i> File_Upload.pdf</label> <span id="file_name4"></span>
                                                                        <input type="file" class="form-control col-md-2" name="personalSNNUpload" id="input4">
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <div class="col-md-12 ml-5">
                                                                        <div class="form-group">
                                                                            <div class="form-group light-grey">
                                                                               
                                                                                <div class="wrapper">
                                                                                    <input type="file" class="form-control col-md-2" id="real_input4">
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Are you filing a Non-Resident Tax return?</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-4-outlined" autocomplete="off" name="Year2" value="yes">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-4-outlined">Yes</label>
    
                                                                <input type="radio" class="btn-check" id="btn-check-3-outlined" autocomplete="off" name="Year2" value="2020">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-3-outlined">No</label>
    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="row">
                        
                                                    <div class="col-md-2 offset-md-5">
                                                        <div class="row mr-auro">
                                                            <div class="d-flex ">

                                                                <div class="">
                                                                    <a href="spouse.php" class="btn btn-outline-warning  color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                        <span class="pl-1 button_font_small">Spouse Info</span>
                                                                    </a>
                                                                </div>

                                                                <div class="mr-5">
                                                                    <a href="dependent.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-3 button_font_small">Dependents <i class="fas fa-arrow-right button_font_small"></i></span>
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
