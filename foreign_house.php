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
                        <div class="col-md-10 offset-md-1 d-none d-md-block sign-up__vh_index_6 u-center-big">
                            <div class="card">
                                
                                <div class="card-body neg-margin-sidebar">

                                    <div class="row">
                                            <div class="col-md-3 d-none d-md-block sidebar-background">
    
                                                <div class="text-left">
    
                                                    <div class="margin-small-top"></div>
                                                    <p class="margin-left-large light-grey">28% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 28%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                            <!--Navbar  -->
                                            <?php  require_once 'navbar.php'; ?>

                                            <div class="col-md-9">


                                                <div class="row mt-4">
                                                    <div class="col-md-11 ml-5">
                                                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                            <ol class="breadcrumb">
                                                                <li class="breadcrumb-item mr-2 pb-4"><a href="foreign_taxpayer.php"> Taxpayer</a></li>
                                                                <li class="breadcrumb-item mr-2"><a href="foreign_spouse.php">Spouse</a></li>
                                                                <li class="breadcrumb-item mr-2"><a href="foreign_house.php" class="boder-under">Foreign Housing Exclusion/Deduction</a></li>

                                                            </ol>
                                                        </nav>
                                                    </div>
                                                </div> 
                                                
                                                
                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                            <p class="">Only complete if your income is above $100,000</p>
                                                            <p class="">The following is a general list of allowable expenses used to calculate your foreign housing exclusion/deduction.  <br>Please provide amounts of actual expenses incurred during the tax year.</p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">

                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Rent</label><br/> 
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
                                                                <label for="">Household repairs and maintenance</label><br/> 
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
                                                                <label for="">Utilities (other than telephone)</label><br/> 
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
                                                                <label for="">Real property and personal property insurance</label><br/> 
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
                                                                <label for="">Occupancy taxes</label><br/> 
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
                                                                <label for="">Nonrefundable security deposits</label><br/> 
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
                                                                <label for="">Furniture rental</label><br/> 
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
                                                                <label for="">Residential parking fees</label><br/> 
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



                                                <div class="row">
                        
                                                    <div class="col-md-2 offset-md-6">
                                                        <div class="row mr-auro">
                                                            <div class="d-flex ">

                                                                <div class="">
                                                                    <a href="foreign_spouse.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                        <span class="pl-1 button_font_small">Spouse Income</span>
                                                                    </a>
                                                                </div>

                                                                <div class="mr-5">
                                                                    <a href="business_info.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-1 button_font_small">Business Information <i class="fas fa-arrow-right button_font_small"></i></span>
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
