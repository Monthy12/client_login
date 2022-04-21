<!DOCTYPE html>
<html lang="en">


<!-- HEADER -->
<?php require_once 'header.php';?>

<body>
<!-- 
    <div class="box box-red"></div>
    <div class="box box-blue"></div> -->
    <section class="login">
            <div class="blue-overlay">
                <div class="home-inner container-fluid">
                    <?php  require_once 'navbar_links.php'; ?>

                    <div class="row ">
                        <div class="col-md-10 offset-md-1 d-none d-md-block sign-up__vh_index_23 u-center-big">
                            <div class="card">
                                
                                <div class="card-body neg-margin-sidebar">

                                    <div class="row">
                                        
                                             <div class="col-md-3 d-none d-md-block sidebar-background">
    
                                                <div class="text-left">
    
                                                    <div class="margin-small-top"></div>
                                                    <p class="margin-left-large light-grey">96% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 96%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                            <!--Navbar  -->
                                            <?php  require_once 'navbar.php'; ?>

                                            <div class="col-md-9">


                                                <div class="row mt-4">
                                                    <div class="col-md-11 ml-5">
                                                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item mr-2 pb-4"><a href="not-profits.php" class="boder-under">Not For Profits 990</a></li>

                                                        </ol>
                                                    </nav>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                            <p class="light-blue">General Information of the US Not-for Profit</p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Name</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">EIN</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Address</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                
                                               <div class="row mt-5">
                                                    <div class="col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">What is the name of the officer in care of the books and records of the organization.</label><br/>
                                                                <input type="text" class="form-control col-md-4" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">What is the address of the officer in care of the books and records of the organization.</label><br/>
                                                                <input type="text" class="form-control col-md-4" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="row mt-3">
                                                    <div class="col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">What is the telephone number of the officer in care of the books and records of the organization.</label><br/>
                                                                <input type="text" class="form-control col-md-4" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                <div class="row mt-3" id="apply_itin_id">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Is this your first time filing with us?</label><br/>
                                                                
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
                                                                    <label for="">Please provide a copy of the last filed Form 990 filed for the organization.</label> <span class="pl-3">
                                                                       
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
                                                    
                                                    <div class="row mt-3" id="no_amended_returns">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Provide a copy of your initial 1023 application.</label> <span class="pl-3">
                                                                       
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
                                                                    <label for="">Provide a copy of the IRS 501c3 determination letter.</label> <span class="pl-3">
                                                                       
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
                                                                    <label for="">Provide a copy of the original articles of incorporation.</label> <span class="pl-3">
                                                                       
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
                                                    
                                                </div>
                                                
                                                
                                                
                                                
                                                <div class="row mt-3" id="apply_itin_id">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Do you have proper Blance Sheet and Profit and Loss statements?</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-14-outlined" autocomplete="off" name="Year1" value="yes" onchange="blance_sheet_yes()">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-14-outlined">Yes</label>
    
                                                                <input type="radio" class="btn-check" id="btn-check-13-outlined" autocomplete="off" name="Year1" value="no" onchange="blance_sheet_no()">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-13-outlined">No</label>
    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div id="blance_sheet_id">

                                                    <div class="row mt-3" id="no_amended_returns">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Provide the Profit and loss report for calendar tax years 2019 and 2020.</label> <span class="pl-3">
                                                                       
                                                                    </span><br/>
    
                                                                    <div class="form-group">
                                                                        <div class="form-group light-grey button_group">
                                                                            <label for="input5" value="test"> <i class="fa fa-upload mr-4"></i> File_Upload.pdf</label> <span id="file_name4"></span>
                                                                            <input type="file" class="form-control col-md-2" name="personalSNNUpload" id="input5">
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
                                                    
                                                    <div class="row mt-3" id="no_amended_returns">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Provide the Balance sheet for tax years ending December 31, 2019 and 2020.</label> <span class="pl-3">
                                                                       
                                                                    </span><br/>
    
                                                                    <div class="form-group">
                                                                        <div class="form-group light-grey button_group">
                                                                            <label for="input6" value="test"> <i class="fa fa-upload mr-4"></i> File_Upload.pdf</label> <span id="file_name6"></span>
                                                                            <input type="file" class="form-control col-md-2" name="personalSNNUpload" id="input6">
                                                                        </div>
                                                                    </div>
    
                                                                    <div class="row mt-2">
                                                                        <div class="col-md-12 ml-5">
                                                                            <div class="form-group">
                                                                                <div class="form-group light-grey">
                                                                                   
                                                                                    <div class="wrapper">
                                                                                        <input type="file" class="form-control col-md-2" id="real_input6">
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
                                                
                                                
                                                
                                                
                                                

                                                <div class="row">
                        
                                                    <div class="col-md-2 offset-md-6">
                                                        <div class="row mr-auro">
                                                            <div class="d-flex ">

                                                                <div class="">
                                                                    <a href="partnershipn-income.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                        <span class="pl-1 button_font_small">Partnership Income</span>
                                                                    </a>
                                                                </div>

                                                                <div class="mr-5">
                                                                    <a href="summary.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-1 button_font_small">summary <i class="fas fa-arrow-right button_font_small"></i></span>
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
