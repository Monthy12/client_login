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
                                                    <p class="margin-left-large light-grey">42% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 42%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                            <!--Navbar  -->
                                            <?php  require_once 'navbar.php'; ?>

                                            <div class="col-md-9">


                                                <div class="row mt-4">
                                                    <div class="col-md-11 ml-5">
                                                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item mr-2 pb-4"><a href="passive_income.php" class="boder-under"> Passive Income</a></li>
                                                            
                                                        </ol>
                                                    </nav>
                                                    </div>
                                                </div>    
    
                                                    <div class="row mt-3 mb-5">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <p>Please select any sources of passive income that you have:</p>

                                                                    <p>Please ensure the file upload requires all files uploaded to be in pdf format only and cannot be password protected!</p>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3" id="itin_number_id">
                                                        <div class="col-md-3 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    
                                                                <div class="card" style="width: 18rem;">
                                                                    <div class="card-header">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" value="Birth Certificate" id="flexCheckDefault">
                                                                            <label class="form-check-label text-white text-center" for="flexCheckDefault">
                                                                                <i class="far fa-id-card  mt-3 mb-1" style="font-size: 50px;"></i>
                                                                                <p class="mb-3 mt-2">Interest, Dividends, Capital Gains</p>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
    
                                                        <div class="col-md-3 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    
                                                                <div class="card" style="width: 18rem;">
                                                                    <div class="card-header">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" value="Birth Certificate" id="flexCheckDefault">
                                                                            <label class="form-check-label text-white text-center" for="flexCheckDefault">
                                                                                <i class="far fa-id-card ml-5 mt-3 mb-2" style="font-size: 50px;"></i>
                                                                                <p class="mb-3 mt-2 ml-5 mb-5">Royalties</p>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
    
                                                        <div class="col-md-3 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    
                                                                <div class="card" style="width: 18rem;">
                                                                    <div class="card-header">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" value="Birth Certificate" id="flexCheckDefault">
                                                                            <label class="form-check-label text-white text-center" for="flexCheckDefault">
                                                                                <i class="far fa-id-card ml-5 mt-3 mb-2" style="font-size: 50px;"></i>
                                                                                <p class="mb-3 mt-2 ml-5 mb-5">Pension Payments</p>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3" id="itin_number_id">
                                                        <div class="col-md-3 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    
                                                                <div class="card" style="width: 18rem;">
                                                                    <div class="card-header">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" value="Birth Certificate" id="flexCheckDefault">
                                                                            <label class="form-check-label text-white text-center" for="flexCheckDefault">
                                                                                <i class="far fa-id-card mt-3 mb-2" style="font-size: 50px;"></i>
                                                                                <p class="mb-3 mt-2 mb-5">Social Security Payments</p>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
    
                                                        <div class="col-md-3 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    
                                                                <div class="card" style="width: 18rem;">
                                                                    <div class="card-header">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" value="Birth Certificate" id="flexCheckDefault">
                                                                            <label class="form-check-label text-white text-center" for="flexCheckDefault">
                                                                                <i class="far fa-id-card ml-5 mt-3 mb-2" style="font-size: 50px;"></i>
                                                                                <p class="mb-3 mt-2 ml-5 mb-5">K-1s</p>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
    
                                                        <div class="col-md-3 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    
                                                                <div class="card" style="width: 18rem;">
                                                                    <div class="card-header">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" value="Birth Certificate" id="flexCheckDefault">
                                                                            <label class="form-check-label text-white text-center" for="flexCheckDefault">
                                                                                <i class="far fa-id-card ml-5 mt-3 mb-2" style="font-size: 50px;"></i>
                                                                                <p class="mb-3 mt-2 ml-5 mb-5">10425 Forms</p>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row mt-3" id="itin_number_id">
                                                        <div class="col-md-3 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    
                                                                <div class="card" style="width: 18rem;">
                                                                    <div class="card-header">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" value="Birth Certificate" id="flexCheckDefault">
                                                                            <label class="form-check-label text-white text-center" for="flexCheckDefault">
                                                                                <i class="far fa-id-card ml-5 mt-3 mb-2" style="font-size: 50px;"></i>
                                                                                <p class="mb-3 mt-2 ml-5 mb-5">Others</p>
                                                                            </label>
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
                                                                    <a href="rental_expenses.php" class="btn btn-outline-warning  color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                        <span class="pl-0 button_font_small">Income & Expenses</span>
                                                                    </a>
                                                                </div>

                                                                <div class="mr-5">
                                                                    <a href="property_sales.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-0 button_font_small">Property Sales <i class="fas fa-arrow-right button_font_small"></i></span>
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
