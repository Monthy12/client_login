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
                        <div class="col-md-10 offset-md-1 d-none d-md-block sign-up__vh_index_18 u-center-big">
                            <div class="card">
                                
                                <div class="card-body neg-margin-sidebar">

                                    <div class="row">
                                         <div class="col-md-3 d-none d-md-block sidebar-background">
    
                                                <div class="text-left">
    
                                                    <div class="margin-small-top"></div>
                                                    <p class="margin-left-large light-grey">30% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                            <!--Navbar  -->
                                            <?php  require_once 'navbar.php'; ?>

                                            <div class="col-md-9">

                                                <div class="row mt-4">
                                                    <div class="col-md-11 ml-5">
                                                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item mr-2 pb-4"><a href="business_info.php" class="boder-under"> Business Information</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="business_income.php">Income and Expenses</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="goods_sold.php">Cost of Goods Sold</a></li>

                                                        </ol>
                                                    </nav>
                                                    </div>
                                                </div>
                                                

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Are you self employed in Israel? *</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-1-outlined" autocomplete="off" name="Year" value="yes">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-1-outlined">Yes</label>

                                                                <input type="radio" class="btn-check" id="btn-check-2-outlined" autocomplete="off" name="Year" value="2020">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-2-outlined">No</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3" id="no_amended_returns">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Upload your Doch Revach v'Hefsed </label> <span class="pl-3">
    
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


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Are you self Employed? *</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-3-outlined" autocomplete="off" name="Year1" value="yes">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-3-outlined">Yes</label>

                                                                <input type="radio" class="btn-check" id="btn-check-4-outlined" autocomplete="off" name="Year1" value="2020">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-4-outlined">No</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Name of Business-if you use your own name as your business name, please specify</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Address of business</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Principle Business Activity</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class=" col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Who Operates the Business</label><br/>
                                                                <select class="form-control" aria-label="Default select example">
                                                                    <option value="">-----</option>
                                                                    <option value="son">Taxpayer</option>
                                                                    <option value="daughter">Spouse</option>
                                                                    <option value="other">Joint</option>
                                                                </select>
                                                                                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">When was the Business Started?</label><br/>
                                                                <input type="date" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Did you employ any workers to whom you paid wages on a Form 1099? *</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-5-outlined" autocomplete="off" name="Year2" value="yes">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-5-outlined">Yes</label>

                                                                <input type="radio" class="btn-check" id="btn-check-6-outlined" autocomplete="off" name="Year2" value="2020">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-6-outlined">No</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">If so, did you or will you file all required Forms 1099? *</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-7-outlined" autocomplete="off" name="Year3" value="yes">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-7-outlined">Yes</label>

                                                                <input type="radio" class="btn-check" id="btn-check-8-outlined" autocomplete="off" name="Year3" value="2020">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-8-outlined">No</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Do you have other self-employed or 1099-NEC (Previously called 1099-MISC) income? *</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-9-outlined" autocomplete="off" name="Year4" value="yes">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-9-outlined">Yes</label>

                                                                <input type="radio" class="btn-check" id="btn-check-10-outlined" autocomplete="off" name="Year4" value="2020">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-10-outlined">No</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3" id="no_amended_returns">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Upload your 1099-NEC</label> <span class="pl-3">

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


                                                <div class="row">
                        
                                                    <div class="col-md-2 offset-md-6">
                                                        <div class="row mr-auro">
                                                            <div class="d-flex ">

                                                                <div class="">
                                                                    <a href="foreign_house.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                        <span class="pl-1 button_font_small">House Exclusion</span>
                                                                    </a>
                                                                </div>

                                                                <div class="mr-5">
                                                                    <a href="business_income.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-0 button_font_small">Income & Expenses <i class="fas fa-arrow-right button_font_small"></i></span>
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
