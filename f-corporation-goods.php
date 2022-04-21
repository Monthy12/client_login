<!DOCTYPE html>
<html lang="en">


<!-- HEADER -->
<?php require_once 'header.php';
?>

<body>
<!-- 
    <div class="box box-red"></div>
    <div class="box box-blue"></div> -->
    <section class="login">
            <div class="blue-overlay">
                <div class="home-inner container-fluid">

                    <?php  require_once 'navbar_links.php'; ?>

                    <div class="row ">
                        <div class="col-md-10 offset-md-1 d-none d-md-block sign-up__vh_index_6 u-center-big">
                            <div class="card">
                                
                                <div class="card-body neg-margin-sidebar">

                                    <div class="row">
                                        
                                            <div class="col-md-3 d-none d-md-block sidebar-background">
    
                                                <div class="text-left">
    
                                                    <div class="margin-small-top"></div>
                                                    <p class="margin-left-large light-grey">89% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 89%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                        <!--Navbar  -->
                                        <?php  require_once 'navbar.php'; ?>

                                        <div class="col-md-9">


                                            <div class="row mt-4">
                                                <div class="col-md-11 ml-5">
                                                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item mr-2 pb-4"><a href="f-general-part.php">General Partnership Information</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="f-corporation-income.php">Income and Expenses</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="f-corporation-goods.php" class="boder-under">Cost of Goods Sold</a></li>

                                                        </ol>
                                                    </nav>
                                                </div>
                                            </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Do you have Cost of goods sold?*</label><br/>
                                                                
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
                                                                <label for="">What method do you use to value your closing inventory (cost, lower of cost or market, or other?)</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">What was your inventory at the beginning of the year?</label><br/> 
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
                                                                <label for="">Please enter the amount you spent on purchases:</label><br/> 
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
                                                                <label for="">Please enter the cost of items withdrawn for personal use:</label><br/> 
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
                                                                <label for="">Please enter the cost of labor (excluding amounts paid to yourself):</label><br/> 
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
                                                                <label for="">Please enter the amount you spent on materials and supplies:</label><br/> 
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
                                                                <label for="">Please enter other costs:</label><br/> 
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
                                                                <label for="">What was your year-end inventory amount?</label><br/> 
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
                                                                    <a href="f-corporation-income.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                        <span class="pl-0 button_font_small">F-Corp. Income</span>
                                                                    </a>
                                                                </div>

                                                                <div class="mr-5">
                                                                    <a href="partnership.php" class="btn btn-outline-warning  color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-1 button_font_small">Partnership <i class="fas fa-arrow-right button_font_small"></i></span>
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
