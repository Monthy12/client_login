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
                        <div class="col-md-10 offset-md-1 d-none d-md-block sign-up__vh_index_36 u-center-big">
                            <div class="card">
                                
                                <div class="card-body neg-margin-sidebar">

                                    <div class="row">
                                        
                                             <div class="col-md-3 d-none d-md-block sidebar-background">
    
                                                <div class="text-left">
    
                                                    <div class="margin-small-top"></div>
                                                    <p class="margin-left-large light-grey">78% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                            <!--Navbar  -->
                                            <?php  require_once 'navbar.php'; ?>

                                            <div class="col-md-9">


                                                <div class="row mt-4">
                                                    <div class="col-md-11 ml-5">
                                                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item mr-2 pb-4 "><a href="c-general-part.php"> General Partnership Information</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="c-corporation-income.php" class="boder-under">Income and Expenses</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="c-corporation-goods.php">Cost of Goods Sold</a></li>

                                                        </ol>
                                                    </nav>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Which currency are income and expenses recorded on this form:</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Gross Receipts/Income:</label><br/>
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

                                                    <div class="col-md-3 margin-top-inverse ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""></label><br/>
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Vehicle Expenses</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                   <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                               
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Commissions and Fees</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                               
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Contract labor</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                   <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Cost of Goods sold  (if you are claiming this expense, please fill out the cost of goods section)</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                               
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Depletions</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                               
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Employee benefits ( including employee health insurance)</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                   <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Employee benefit programs</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                   <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                               
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Insurance</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Self-employed health insurance</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                   <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                 
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Mortgage interest paid to banks (if appears on Form 1098, please specify and send the form)</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Other interest payments</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                               
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Legal and professional services</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                   <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Office expenses</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                   <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                               
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Pension and profit sharing plans</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                               
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Rent or lease of vehicles</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Rent or lease of machinery, equipment</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                               
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Rental or lease of other items (ex. Land)</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Repairs and maintenance</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                   <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                               
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Supplies (if not included in cost of goods sold)</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Taxes (if reported on a Form 1098, please specify and send)</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
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
                                                                
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Meals (subject to 50% limit)</label><br/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                
                                                                <input type="text" class="form-control1 col-md-8" id="exampleFormControlInput1" placeholder="00.00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                
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
                                                                <label for="">Wages expense </label><br/> 
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



                                                <div class="row">
                        
                                                    <div class="col-md-2 offset-md-6">
                                                        <div class="row mr-auro">
                                                            <div class="d-flex ">

                                                                <div class="">
                                                                    <a href="c-general-part.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                        <span class="pl-1 button_font_small">General Partnership</span>
                                                                    </a>
                                                                </div>

                                                                <div class="mr-5">
                                                                    <a href="c-corporation-goods.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-1 button_font_small">C-Corp. Goods <i class="fas fa-arrow-right button_font_small"></i></span>
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
