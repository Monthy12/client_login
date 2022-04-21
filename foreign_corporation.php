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
                        <div class="col-md-10 offset-md-1 d-none d-md-block sign-up__vh_index_23 u-center-big">
                            <div class="card">
                                
                                <div class="card-body neg-margin-sidebar">

                                    <div class="row">
                                        
                                           <div class="col-md-3 d-none d-md-block sidebar-background">
    
                                                <div class="text-left">
    
                                                    <div class="margin-small-top"></div>
                                                    <p class="margin-left-large light-grey">70% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                            <!--Navbar  -->
                                            <?php  require_once 'navbar.php'; ?>

                                            <div class="col-md-9">


                                            <div class="row mt-4">

                                                <div class="col-md-11 ml-5">
                                                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item mr-2 pb-4"><a href="foreign_corporation.php" class="boder-under">Company Information</a></li>

                                                        </ol>
                                                    </nav>
                                                </div>
                                            </div> 
                                                
                                            <div>
                                                <form action="" method="">
                                                    
                                                    <div class="row mt-4" id="amended_returns_id">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Are you an officer, director, or own more than 10% of a corporation or partnership organized outside the US*</label><br/>
                                                                    
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
                                                                    <label for="">Upload your company's financial statements</label> <span class="pl-3">
                                                                        
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
                                                                    <label for="">Foreign Tax ID Number</label><br/>
                                                                    <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="row mt-3">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Date of Incorporation</label><br/>
                                                                    <input type="date" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Full name of the corporation</label><br/>
                                                                    <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Address of the corporation</label><br/>
                                                                    <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Country under whose laws the company was incorporated</label><br/>
                                                                    <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row mt-3">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">fiscal year (beginning and ending dates of the tax year applicable to the foreign corporation)</label><br/>
                                                                    <input type="date" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row mt-3">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Principle place of business</label><br/>
                                                                    <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Principle business activity</label><br/>
                                                                    <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Does the corporation have a branch or agent in the US? *</label><br/>
                                                                    
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
                                                                        <label for="">please provide the name of the branch office or agent</label><br/>
                                                                        <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                    </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4" id="US_tax_id">
                                                            <div class="col-md-12 ml-5">
                                                                <div class="form-group">
                                                                    <div class="form-group light-grey">
                                                                        <label for="">Please provide the address of the branch office or agent</label><br/>
                                                                        <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                    </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4" id="US_tax_id">
                                                            <div class="col-md-12 ml-5">
                                                                <div class="form-group">
                                                                    <div class="form-group light-grey">
                                                                        <label for="">Please provide the identifying number of the branch office or agent</label><br/>
                                                                        <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                    </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                  

                                                    <div class="row mt-3">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Name of the accountant/ bookkeeper who keeps the books of the company</label><br/>
                                                                    <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row mt-3">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Address of the accountant/ bookkeeper who keeps the books of the company</label><br/>
                                                                    <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row mt-3">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Was a U.S Tax return filed for this corporation in relevant years? </label><br/>
                                                                    
                                                                    <input type="radio" class="btn-check" id="btn-check-5-outlined" autocomplete="off" name="Year2" value="yes">
                                                                    <label class="btn btn-outline-info mr-3" for="btn-check-5-outlined">Yes</label>

                                                                    <input type="radio" class="btn-check" id="btn-check-6-outlined" autocomplete="off" name="Year2" value="no">
                                                                    <label class="btn btn-outline-info mr-3" for="btn-check-6-outlined">No</label>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Please specify the income/loss reported and the US Income tax paid</label><br/>
                                                                    <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Number of shares issued and outstanding</label><br/>
                                                                    <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>

                                            </div>

                                        </div>

                                        <div class="row">
                        
                                            <div class="col-md-2 offset-md-6">
                                                <div class="row mr-auro">
                                                    <div class="d-flex ">

                                                        <div class="">
                                                            <a href="8938_fatca.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                <span class="pl-1 button_font_small">Fatca Requirement</span>
                                                            </a>
                                                        </div>

                                                        <div class="mr-5">
                                                            <a href="foreign_trust.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5">
                                                                <span class="pl-0 button_font_small">Foreign Trust <i class="fas fa-arrow-right button_font_small"></i></span>
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
