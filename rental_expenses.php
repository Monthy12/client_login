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
                        <div class="col-md-10 offset-md-1 d-none d-md-block sign-up__vh_index_25 u-center-big">
                            <div class="card">
                                
                                <div class="card-body neg-margin-sidebar">

                                    <div class="row">
                                        
                                            <div class="col-md-3 d-none d-md-block sidebar-background">
    
                                                <div class="text-left">
    
                                                    <div class="margin-small-top"></div>
                                                    <p class="margin-left-large light-grey">40% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                            <!--Navbar  -->
                                            <?php  require_once 'navbar.php'; ?>

                                            <div class="col-md-9">


                                                <div class="row mt-4">
                                                    <div class="col-md-11 ml-5">
                                                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item mr-2 pb-4"><a href="general_rental.php"> Property Information</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="rental_expenses.php" class="boder-under">Income and Expenses</a></li>
                                                            
                                                        </ol>
                                                    </nav>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Amount of gross Income</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Currency in which income/expenses are recorded: </label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Do you have expenses? *</label><br/>
                                                                
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
                                                            <p class="">Below is a general list of expenses that may be incurred in business.  <br>Please provide expense amounts incurred in direct relation to your business during the tax year.</p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Advertising</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Auto</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Travel</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Cleaning and Maintenance</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Commissions</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Qualified mortgage insurance </label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Other insurance</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                               <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Legal and professional fees</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Management fees</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Mortgage interest qualified </label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Other mortgage interest</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Repairs</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Supplies</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Real estate taxes</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Other taxes</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Utilities</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Vehicle rental </label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Other expenses</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3" id="no_amended_returns">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Upload relevant documents not included in the questions above if any</label> <span class="pl-3">

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


                                                <div class="row">
                        
                                                    <div class="col-md-2 offset-md-6">
                                                        <div class="row mr-auro">
                                                            <div class="d-flex ">

                                                                <div class="">
                                                                    <a href="general_rental.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                        <span class="pl-1 button_font_small">Property Information</span>
                                                                    </a>
                                                                </div>

                                                                <div class="mr-5">
                                                                    <a href="passive_income.php" class="btn btn-outline-warning  color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-1 button_font_small">Passive Income <i class="fas fa-arrow-right button_font_small"></i></span>
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
