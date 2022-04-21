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
                        <div class="col-md-10 offset-md-1 d-none d-md-block sign-up__vh_index_27 u-center-big">
                            <div class="card">
                                
                                <div class="card-body neg-margin-sidebar">

                                    <div class="row">
                                            <div class="col-md-3 d-none d-md-block sidebar-background">
    
                                                <div class="text-left">
    
                                                    <div class="margin-small-top"></div>
                                                    <p class="margin-left-large light-grey">26% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 26%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                            <!--Navbar  -->
                                            <?php  require_once 'navbar.php'; ?>

                                        <div class="col-md-9">


                                                <div class="row mt-4">
                                                    <div class="col-md-11 ml-5">
                                                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                            <ol class="breadcrumb">
                                                                <li class="breadcrumb-item mr-2 pb-4"><a href="foreign_taxpayer.php" class="boder-under">Taxpayer</a></li>
                                                                <li class="breadcrumb-item mr-2"><a href="foreign_spouse.php">Spouse</a></li>
                                                                <li class="breadcrumb-item mr-2"><a href="foreign_house.php">Foreign Housing Exclusion/Deduction</a></li>

                                                            </ol>
                                                        </nav>
                                                    </div>
                                                </div> 


                                            <div class="row mt-3">
                                                <div class="col-md-12 ml-5">
                                                    <div class="form-group">
                                                        <div class="form-group light-grey">
                                                            <label for="">Please provide the name of your employer.*</label><br/>
                                                            <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-12 ml-5">
                                                    <div class="form-group">
                                                        <div class="form-group light-grey">
                                                            <label for="">Please provide the address of your employer.*</label><br/>
                                                            <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row mt-3">
                                                <div class="col-md-12 ml-5">
                                                    <div class="form-group">
                                                        <div class="form-group light-grey">
                                                            <label for="">Of what country(ies) are you a citizen/national? *</label><br/>
                                                            <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                

                                                <div class="row mt-3">
                                                    <div class="col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Did you maintain a separate foreign residence for your family because of adverse living conditions at your tax home? *</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-1-outlined" autocomplete="off" name="Year" value="yes">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-1-outlined">Yes</label>

                                                                <input type="radio" class="btn-check" id="btn-check-2-outlined" autocomplete="off" name="Year" value="2020">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-2-outlined">No</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">What was your country of residence during the year? *</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">When did you move to your country of residence? *</label><br/>
                                                                <input type="date" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">If you have since moved away from the above country, please provide the date on which your residence ended: *</label><br/>
                                                                <input type="date" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class=" col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Please specify which statement is applicable to you regarding your living quarters in the foreign country: </label><br/>
                                                                <select class="form-control col-md-2" aria-label="Default select example">
                                                                    <option value="">-----</option>
                                                                    <option value="son">Purchased home</option>
                                                                    <option value="daughter">Rented house or apartment</option>
                                                                    <option value="other"> Rented a room</option>
                                                                    <option value="other"> Quarters furnished by employer</option>
                                                                </select>
                                                                                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Did any of your family lived with you abroad during any part of the tax year?  *</label><br/>
                                                                
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
                                                                <label for="">Please specify who (which relative) *</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Please for what period: *</label><br/>
                                                                <input type="date" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Have you submitted a statement to the authorities of the foreign country where you claim residence that you are not a resident of that country?  *</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-5-outlined" autocomplete="off" name="Year2" value="yes">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-5-outlined">Yes</label>

                                                                <input type="radio" class="btn-check" id="btn-check-6-outlined" autocomplete="off" name="Year2" value="2020">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-6-outlined">No</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Are you required to pay income tax to the foreign country where you claim residence?  *</label><br/>
                                                                
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
                                                                <label for="">Were you present in the US during the tax year?  *</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-9-outlined" autocomplete="off" name="Year4" value="yes">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-9-outlined">Yes</label>

                                                                <input type="radio" class="btn-check" id="btn-check-10-outlined" autocomplete="off" name="Year4" value="2020">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-10-outlined">No</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Date of Arrival in the US *</label><br/>
                                                                <input type="date" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Date Left the US *</label><br/>
                                                                <input type="date" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Number of Days in the US on Business *</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Income earned in the US</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Under what type of visa did you enter the foreign coutry?</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Did your visa limit the length of your stay or employment in the country?  *</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-11-outlined" autocomplete="off" name="Year5" value="yes">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-11-outlined">Yes</label>

                                                                <input type="radio" class="btn-check" id="btn-check-12-outlined" autocomplete="off" name="Year5" value="2020">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-12-outlined">No</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Did you maintain a home in the U.S. while living abroad?  *</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-13-outlined" autocomplete="off" name="Year6" value="yes">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-13-outlined">Yes</label>

                                                                <input type="radio" class="btn-check" id="btn-check-14-outlined" autocomplete="off" name="Year6" value="2020">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-14-outlined">No</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="row">
                        
                                                    <div class="col-md-2 offset-md-6">
                                                        <div class="row mr-auro">
                                                            <div class="d-flex ">

                                                                <div class="">
                                                                    <a href="stimulus_grants.php" class="btn btn-outline-warning  color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                        <span class="pl-1 button_font_small">Stimulus Grants</span>
                                                                    </a>
                                                                </div>

                                                                <div class="mr-5">
                                                                    <a href="foreign_spouse.php" class="btn btn-outline-warning  color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-3 button_font_small">Spouse Income <i class="fas fa-arrow-right button_font_small"></i></span>
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
