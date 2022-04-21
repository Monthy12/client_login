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
                        <div class="col-md-10 offset-md-1 d-none d-md-block sign-up__vh_index_18 u-center-big">
                            <div class="card">
                                
                                <div class="card-body neg-margin-sidebar">

                                    <div class="row">
                                        
                                        <div class="col-md-3 d-none d-md-block sidebar-background">
    
                                                <div class="text-left">
    
                                                    <div class="margin-small-top"></div>
                                                    <p class="margin-left-large light-grey">52% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 52%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                            <!--Navbar  -->
                                            <?php  require_once 'navbar.php'; ?>

                                            <div class="col-md-9">


                                            <div class="row mt-4">
                                                    <div class="col-md-11 ml-5">
                                                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item mr-2 pb-4"><a href="account_info.php" class="boder-under"> Account Information</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="account_holder.php">Account Holder</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="8938_fatca.php">8938 Fatca Requirements</a></li>
                                                        </ol>
                                                    </nav>
                                                    </div>
                                                </div> 
                                                

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Are you required to file an FBAR *</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-1-outlined" autocomplete="off" name="Year" value="yes">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-1-outlined">Yes</label>

                                                                <input type="radio" class="btn-check" id="btn-check-2-outlined" autocomplete="off" name="Year" value="no">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-2-outlined">No</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-5">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-blue">
                                                                <label for="">BANK INFORMATION</label><br/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Bank/Financial Institution Name</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Bank/Financial Institution Street Address</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">City</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">ZIP/ Postal Code</label><br/>
                                                                <input type="text" class="form-control col-md-8" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Country</label><br/>
                                                                <input type="text" class="form-control col-md-8" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-5">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-blue">
                                                                <label for="">ACCOUNT INFORMATION</label><br/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Account Number</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Account Type</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-check light-grey">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                              This is a new account, opened during the tax year
                                                            </label>
                                                          </div>
                                                          <div class="form-check light-grey">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                            <label class="form-check-label" for="flexCheckChecked">
                                                              This account was closed during the tax year
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-5">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-blue">
                                                                <label for="">ACCOUNT BALANCE</label><br/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class=" col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Currency of account</label><br/>
                                                                <select class="form-control" aria-label="Default select example">
                                                                    <option value="">-----</option>
                                                                    <option value="son">AUD</option>
                                                                    <option value="daughter">CAD</option>
                                                                    <option value="other">EUR</option>
                                                                    <option value="other">GBP</option>
                                                                    <option value="other">ILS</option>
                                                                    <option value="other">USD</option>
                                                                </select>
                                                                                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Highest Balance in Account During the year</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Balance on Dec. 31st</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="row">
                        
                                                    <div class="col-md-2 offset-md-6">
                                                        <div class="row mr-auro">
                                                            <div class="d-flex ">

                                                                <div class="">
                                                                    <a href="property_sales.php" class="btn btn-outline-warning  color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                        <span class="pl-1 button_font_small">Sales of Property</span>
                                                                    </a>
                                                                </div>

                                                                <div class="mr-5">
                                                                    <a href="account_holder.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-0 button_font_small">Account Holder <i class="fas fa-arrow-right button_font_small"></i></span>
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
