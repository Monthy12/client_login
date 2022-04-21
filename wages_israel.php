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
                                                    <p class="margin-left-large light-grey">25% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                            <!--Navbar  -->
                                            <?php  require_once 'navbar.php'; ?>

                                            <div class="col-md-9">


                                            <div class="row mt-4">
                                                    <div class="col-md-11 ml-5">
                                                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item mr-2 pb-4"><a href="wages_israel.php" class="boder-under"> Wages and Salaries</a></li>
                                                        </ol>
                                                    </nav>
                                                    </div>
                                                </div> 
                                                

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Are you employed?</label><br/>
                                                                
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
                                                                <label for="">Do you have W-2 Forms issued by the US, Foreign income documents, or both?</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-1-outlined" autocomplete="off" name="Year" value="W-2 Forms">
                                                                <label class="btn btn-outline-secondary mr-3" for="btn-check-1-outlined">W-2 Forms</label>

                                                                <input type="radio" class="btn-check" id="btn-check-2-outlined" autocomplete="off" name="Year" value="Foreign income documents">
                                                                <label class="btn btn-outline-secondary mr-3 " for="btn-check-2-outlined">Foreign income documents</label>

                                                                <input type="radio" class="btn-check" id="btn-check-2-outlined" autocomplete="off" name="Year" value="Both">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-2-outlined">Both</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row" id="show_item">
                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                       

                                                                <div class="form-group">
                                                                    <div class="form-group light-grey button_group">
                                                                        <label for="input1" value="test"> <i class="fa fa-upload mr-4"></i> Upload W-2 Forms</label> <span id="file_names"></span>
                                                                        <input type="file" class="form-control col-md-2" name="personalSNNUpload" id="input1">
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <div class="col-md-5 ml-5">
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

                                                    <div class=" col-md-3 mt-3">
                                                        <button class="btn btn-success add_item_btn mr-5"><i class="fas fa-plus"></i></button>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col-md-11 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <hr>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                              

                                                <div class="row mt-4">
                                                    <div class="col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Which country has issued you wages/salary income statements?</label><br/>
                                                                <input type="text" class="form-control col-md-8" id="exampleFormControlInput1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col-md-11 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <hr>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Did you file an Israel Tax Return?</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-1-outlined" autocomplete="off" name="yes" value="yes">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-1-outlined">Yes</label>

                                                                <input type="radio" class="btn-check" id="btn-check-2-outlined" autocomplete="off" name="no" value="no">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-2-outlined">No</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="row mt-4">

                                                    <div class="col-md-10 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Upload your Israel Tax return/s, including the Shuma and supporting documentation:</label><br/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row" id="show_item01">
                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <div class="form-group">
                                                                    <div class="form-group light-grey button_group">
                                                                        <label for="input2" value="test"> <i class="fa fa-upload mr-4"></i> Upload Forms</label> <span id="file_name2"></span>
                                                                        <input type="file" class="form-control col-md-2" name="personalSNNUpload" id="input2">
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <div class="col-md-5 ml-5">
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

                                                    <div class=" col-md-3 mt-3">
                                                        <button class="btn btn-success add_item_btn01 mr-5"><i class="fas fa-plus"></i></button>
                                                    </div>
                                                </div>



                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Did you receive income on a tlush/ payslip?</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-1-outlined" autocomplete="off" name="yes" value="yes">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-1-outlined">Yes</label>

                                                                <input type="radio" class="btn-check" id="btn-check-2-outlined" autocomplete="off" name="no" value="no">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-2-outlined">No</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="row mt-4">

                                                    <div class="col-md-10 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Upload your 106 forms</label><br/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row" id="show_item02">
                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <div class="form-group">
                                                                    <div class="form-group light-grey button_group">
                                                                        <label for="input3" value="test"> <i class="fa fa-upload mr-4"></i> Upload Forms</label> <span id="file_name3"></span>
                                                                        <input type="file" class="form-control col-md-2" name="personalSNNUpload" id="input3">
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <div class="col-md-5 ml-5">
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

                                                    <div class=" col-md-3 mt-3">
                                                        <button class="btn btn-success add_item_btn02 mr-5"><i class="fas fa-plus"></i></button>
                                                    </div>
                                                </div>



                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Did you receive any compensation from Bituach Leumi for Chalat, Unemployment for Maternity Leave?</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-1-outlined" autocomplete="off" name="yes" value="yes">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-1-outlined">Yes</label>

                                                                <input type="radio" class="btn-check" id="btn-check-2-outlined" autocomplete="off" name="no" value="no">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-2-outlined">No</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="row mt-4">

                                                    <div class="col-md-10 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Upload Chalat/ Unemployment or maternity leave income statements including the 'ishur tashlum' showing the amount of tax paid</label><br/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="row" id="show_item03">
                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <div class="form-group">
                                                                    <div class="form-group light-grey button_group">
                                                                        <label for="input4" value="test"> <i class="fa fa-upload mr-4"></i> Upload Forms</label> <span id="file_name4"></span>
                                                                        <input type="file" class="form-control col-md-2" name="personalSNNUpload" id="input4">
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <div class="col-md-5 ml-5">
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

                                                    <div class=" col-md-3 mt-3">
                                                        <button class="btn btn-success add_item_btn03 mr-5"><i class="fas fa-plus"></i></button>
                                                    </div>
                                                </div>


                                                <div class="row">
                        
                                                    <div class="col-md-2 offset-md-6">
                                                        <div class="row mr-auro">
                                                            <div class="d-flex ">

                                                                <div class="">
                                                                    <a href="stimulus_grants.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                        <span class="pl-1 button_font_small">Stimulus Grants</span>
                                                                    </a>
                                                                </div>

                                                                <div class="mr-5">
                                                                    <a href="foreign_taxpayer.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-3 button_font_small">Taxpayer <i class="fas fa-arrow-right button_font_small"></i></span>
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
        $(document).ready(function(){
            $(".add_item_btn").click(function(e) {
                e.preventDefault();
                $("#show_item").prepend(`<div class="row mt-3" id="show_item">
                    <div class="col-md-3 ml-5">
                        <div class="form-group">
                            <div class="form-group light-grey">
                                <div class="form-group">
                                    <div class="form-group light-grey button_group">
                                        <label for="input1" value="test"> <i class="fa fa-upload mr-4"></i> Upload W-2 Forms</label> <span id="file_names"></span>
                                        <input type="file" class="form-control col-md-2" name="personalSNNUpload" id="input1">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-5 ml-5">
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

                    <div class=" col-md-3">
                        <button class="btn btn-danger remove_item_btn mr-5 mt-2"><i class="fas fa-minus"></i></button>
                    </div>
                </div>`);
            });

            $(document).on('click', '.remove_item_btn', function(e) {
                e.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });
        });




        $(document).ready(function(){
            $(".add_item_btn01").click(function(e) {
                e.preventDefault();
                $("#show_item01").prepend(`<div class="row" id="show_item01">
                    <div class="col-md-3 ml-5">
                        <div class="form-group">
                            <div class="form-group light-grey">
                                <div class="form-group">
                                    <div class="form-group light-grey button_group">
                                        <label for="input2" value="test"> <i class="fa fa-upload mr-4"></i> Upload Forms</label> <span id="file_name2"></span>
                                        <input type="file" class="form-control col-md-2" name="personalSNNUpload" id="input2">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-5 ml-5">
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

                    <div class=" col-md-3 mt-3">
                        <button class="btn btn-danger remove_item_btn01 mr-5"><i class="fas fa-minus"></i></button>
                    </div>
                </div>`);
            });

            $(document).on('click', '.remove_item_btn01', function(e) {
                e.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });
        });



        $(document).ready(function(){
            $(".add_item_btn02").click(function(e) {
                e.preventDefault();
                $("#show_item02").prepend(`<div class="row" id="show_item03">
                    <div class="col-md-3 ml-5">
                        <div class="form-group">
                            <div class="form-group light-grey">
                                <div class="form-group">
                                    <div class="form-group light-grey button_group">
                                        <label for="input3" value="test"> <i class="fa fa-upload mr-4"></i> Upload Forms</label> <span id="file_name3"></span>
                                        <input type="file" class="form-control col-md-2" name="personalSNNUpload" id="input3">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-5 ml-5">
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

                    <div class=" col-md-3 mt-3">
                        <button class="btn btn-danger remove_item_btn02 mr-5"><i class="fas fa-minus"></i></button>
                    </div>
                </div>`);
            });

            $(document).on('click', '.remove_item_btn02', function(e) {
                e.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });
        });



        $(document).ready(function(){
            $(".add_item_btn03").click(function(e) {
                e.preventDefault();
                $("#show_item03").prepend(`<div class="row" id="show_item03">
                    <div class="col-md-3 ml-5">
                        <div class="form-group">
                            <div class="form-group light-grey">
                                <div class="form-group">
                                    <div class="form-group light-grey button_group">
                                        <label for="input4" value="test"> <i class="fa fa-upload mr-4"></i> Upload Forms</label> <span id="file_name4"></span>
                                        <input type="file" class="form-control col-md-2" name="personalSNNUpload" id="input4">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-5 ml-5">
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

                    <div class=" col-md-3 mt-3">
                        <button class="btn btn-danger remove_item_btn03 mr-5"><i class="fas fa-minus"></i></button>
                    </div>
                </div>`);
            });

            $(document).on('click', '.remove_item_btn03', function(e) {
                e.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });
        });
    </script>
</body>
