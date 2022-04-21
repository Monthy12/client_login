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
                        <div class="col-md-10 offset-md-1 d-none d-md-block sign-up__vh_index_17 u-center-big">
                            <div class="card">
                                
                                <div class="card-body neg-margin-sidebar">

                                    <div class="row">
                                            <div class="col-md-3 d-none d-md-block sidebar-background">
    
                                                <div class="text-left">
    
                                                    <div class="margin-small-top"></div>
                                                    <p class="margin-left-large light-grey">2% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 2%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                        
                                            <!--Navbar  -->
                                            <?php  require_once 'navbar.php'; ?>

                                            <div class="col-md-9">


                                            <div class="row mt-4">

                                                <div class="col-md-11 ml-5">
                                                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item mr-2 pb-4"><a href="general.php" class="boder-under">Filing Questions</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="general1.php">Streamlined Procedure</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="general2.php">General Questions</a></li>
                                                        </ol>
                                                    </nav>
                                                </div>
                                            </div> 
                                                
                                            <div>
                                                <form action="" method="">

                                                    <div class="row mt-4">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Do you want to file Corporate or Partnership returns in addition to your individual return? *</label><br/>
                                                                    
                                                                    <input type="radio" class="btn-check" id="btn-check-1-outlined" autocomplete="off" name="Year" value="yes" onchange="file_tax_yes()">
                                                                    <label class="btn btn-outline-info mr-3" for="btn-check-1-outlined">Yes</label>

                                                                    <input type="radio" class="btn-check" id="btn-check-2-outlined" autocomplete="off" name="Year" value="no" onchange="file_tax_no()">
                                                                    <label class="btn btn-outline-info mr-3" for="btn-check-2-outlined">No</label>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3" id="show_item">

                                                        <div class=" col-md-3 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">File More Tax</label><br/>
                                                                    <select class="form-control" aria-label="Default select example">
                                                                        <option value="">-----</option>
                                                                        <option value="son">Partnership 1065 Form</option>
                                                                        <option value="daughter">C-Corporation</option>
                                                                        <option value="other"> S-corporation 1120S Form</option>
                                                                        <option value="other"> Foreign  Corporation 1120F</option>
                                                                        <option value="other"> Not-for-profit 990</option>
                                                                    </select>
                                                                                                                                        
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class=" col-md-3 ml-5 margin-top-sm">
                                                            <button class="btn btn-success add_item_btn mr-5"><i class="fas fa-plus"></i></button>
                                                        </div>
                                                    </div>




                                                    
                                                    <div class="row mt-4" id="amended_returns_id">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Are you filing amended return? *</label><br/>
                                                                    
                                                                    <input type="radio" class="btn-check" id="btn-check-3-outlined" autocomplete="off" name="Year1" value="yes" onchange="amended_returns_yes()">
                                                                    <label class="btn btn-outline-info mr-3" for="btn-check-3-outlined">Yes</label>

                                                                    <input type="radio" class="btn-check" id="btn-check-4-outlined" autocomplete="off" name="Year1" value="no" onchange="amended_returns_no()">
                                                                    <label class="btn btn-outline-info mr-3" for="btn-check-4-outlined">No</label>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3" id="no_amended_returns">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Provide original returns and supporting documentation</label> <span class="pl-3">
                                                                        
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
                                                                    <label for="">Are you a returning client? *</label><br/>
                                                                    
                                                                    <input type="radio" class="btn-check" id="btn-check-5-outlined" autocomplete="off" name="Year2" value="yes" onchange="return_client_yes()">
                                                                    <label class="btn btn-outline-info mr-3" for="btn-check-5-outlined">Yes</label>

                                                                    <input type="radio" class="btn-check" id="btn-check-6-outlined" autocomplete="off" name="Year2" value="no" onchange="return_client_no()">
                                                                    <label class="btn btn-outline-info mr-3" for="btn-check-6-outlined">No</label>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                <div id="cluster_id" class="class_hidden_b0">

                                                    <div class="row mt-4" id="US_tax_id">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Have you filed a US tax return previously? *</label><br/>
                                                                    
                                                                    <input type="radio" class="btn-check" id="btn-check-7-outlined" autocomplete="off" name="Year3" value="yes" onchange="previous_tax_yes()">
                                                                    <label class="btn btn-outline-info mr-3" for="btn-check-7-outlined">Yes</label>

                                                                    <input type="radio" class="btn-check" id="btn-check-8-outlined" autocomplete="off" name="Year3" value="no" onchange="previous_tax_no()">
                                                                    <label class="btn btn-outline-info mr-3" for="btn-check-8-outlined">No</label>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="row mt-3" id="last_US_filed_id">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Upload a copy of your last filed US tax return</label> <span class="pl-3">
                                                                        <!--<i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Please ensure all file uploads requires all files uploaded to be in pdf format only and cannot be password protected!"></i>-->
                                                                    </span><br/>

                                                                    <div class="form-group">
                                                                        <div class="form-group light-grey button_group">
                                                                            <label for="input2" value=""> <i class="fa fa-upload mr-4"></i> File_Upload.pdf</label> <span id="file_name2"></span>
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


                                                    <div class="" id="tax_extension_id">

                                                        <div class="row mt-4">
                                                            <div class="col-md-12 ml-5">
                                                                <div class="form-group">
                                                                    <div class="form-group light-grey">
                                                                        <label for="">Did you file an extension for your tax return?</label><br/>
                                                                        
                                                                        <input type="radio" class="btn-check" id="btn-check-9-outlined" autocomplete="off" name="Year4" value="yes" onchange="tax_extension_yes()">
                                                                        <label class="btn btn-outline-info mr-3" for="btn-check-9-outlined">Yes</label>

                                                                        <input type="radio" class="btn-check" id="btn-check-10-outlined" autocomplete="off" name="Year4" value="no" onchange="tax_extension_no()">
                                                                        <label class="btn btn-outline-info mr-3" for="btn-check-10-outlined">No</label>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4" id="date_extension_id">
                                                            <div class="col-md-12 ml-5">
                                                                <div class="form-group">
                                                                    <div class="form-group light-grey">
                                                                        <label for="">What is the extended due date for your return? *</label><br/>
                                                                        <input type="date" class="form-control col-md-3" id="exampleFormControlInput1">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row mt-4" id="claimed_dependent_id">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Were you claimed as a dependant on anyone else's tax return? </label><br/>
                                                                    
                                                                    <input type="radio" class="btn-check" id="btn-check-11-outlined" autocomplete="off" name="Year5" value="yes">
                                                                    <label class="btn btn-outline-info mr-3" for="btn-check-11-outlined">Yes</label>

                                                                    <input type="radio" class="btn-check" id="btn-check-12-outlined" autocomplete="off" name="Year5" value="no">
                                                                    <label class="btn btn-outline-info mr-3" for="btn-check-12-outlined">No</label>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                </form>
                                            </div>

                                                <div class="row">
                        
                                                    <div class="col-md-2 offset-md-5">
                                                        <div class="row mr-auro">
                                                            <div class="d-flex ">

                                                                <div class="">
                                                                    <a href="index.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5 button_font_small"><i class="fas fa-arrow-left button_font_small"></i>
                                                                        <span class="pl-1 button_font_small">Instruction</span>
                                                                    </a>
                                                                </div>

                                                                <div class="mr-5">
                                                                    <a href="general1.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5">
                                                                        <span class="button_font_small">Streamlined Procedure
                                                                            <i class="fas fa-arrow-right button_font_small"></i></span>
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

                    <div class=" col-md-3 ml-5">
                        <div class="form-group">
                            <div class="form-group light-grey">
                                <label for="">File More Tax</label><br/>
                                <select class="form-control" aria-label="Default select example">
                                    <option value="">-----</option>
                                    <option value="son">Partnership 1065 Form</option>
                                    <option value="daughter">C-Corporation</option>
                                    <option value="other"> S-corporation 1120S Form</option>
                                    <option value="other"> Foreign  Corporation 1120F</option>
                                    <option value="other"> Not-for-profit 990</option>
                                </select>
                                                                                                    
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-3 margin-left-sm margin-top-sm">
                        <button class="btn btn-danger remove_item_btn"><i class="fas fa-minus"></i></button>
                    </div>

                </div>`);
                
            });

            $(document).on('click', '.remove_item_btn', function(e) {
                e.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });
        });
    </script>


</body>
