<!DOCTYPE html>
<html lang="en">

<!-- @extends('layouts.header') -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i|Source+Sans+Pro:400,400i,600,600i" rel="stylesheet">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <link rel='stylesheet' href='/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/css/bootstrap_old.css' type='text/css' media='all' />

    {{-- <script src="https://kit.fontawesome.com/7c6eb29ba2.js"></script> --}}
    <script src="https://kit.fontawesome.com/7c6eb29ba2.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">

    <title>Client-Login</title>


</head>

{{-- @extends('layouts.navbar') --}}

<body>
<!-- 
    <div class="box box-red"></div>
    <div class="box box-blue"></div> -->
    <section class="login">
            <div class="blue-overlay">
                <div class="home-inner container-fluid">
                    {{-- <div class="row">
                    <img src="/img/expat_image.jpg" class="d-block logo-margin_left" alt="client_login_logo">
                    </div> --}}

                    <nav class="navbar navbar-expand-lg margin_right_med">
                        {{-- <nav class="navbar-nav navbar-nav-scroll navbar-expand-xl fixed-top p-3 margin_right_med "> --}}
                    
                            <div class="container">
                                <a class="navbar-brand" href="">
                                  <img src="/img/expat_image.jpg" alt=""  class="logo-margin_left">
                                </a>
                              </div>
                        
                        <div class="container-fluid">
                    
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                        
                             <!--Navbar links -->
                            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    
                                 <!--Dropdown -->
                                <ul class="navbar-nav ml-auto">
                    
                                    <li class="nav-item ml-5">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-file-text mr-1"></i> Questionaire
                                        </a>
                                    </li>
                    
                                    <li class="nav-item ml-5">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-file mr-1"></i> My Files
                                        </a>
                                    </li>
                                    <li class="nav-item ml-5">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-phone mr-1"></i> Contact Us
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item dropdown ml-5">
                    
                                        {{-- <a class="nav-link" href="{{url('/login')}}"> <i class="fa fa-user-circle mr-1"></i>Login</a> --}}
                    
                                        <a class="nav-link" href="logout"> <i class="fa fa-user-circle mr-1"></i>Logout</a>
                    
                                    </li>
                                    
                                </ul>
                            </div>
                    
                        </div>
                    </nav>

                    <div class="row ">
                        <div class="col-md-10 offset-md-1 d-none d-md-block sign-up__vh_bigger u-center-big">
                            <div class="card">
                                
                                <div class="card-body neg-margin-sidebar">

                                    <div class="row">

                                        <div class="col-md-3 sidebar-background">

                                            <div class="text-left">

                                                <div class="margin-big"></div>

                                                <span class="pl-4"><a href="{{url('/')}}" class="dark-grey"> <i class="mt-5 mb-5"></i>Instruction</a></span>
                                                </br><br/>


                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                        <span class="ml-1">Filing Questions</span>
                                                        </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse neg-margin-top" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <span class="pl-3"> <a role="menuitem" tabindex="-1" href="{{url('/general')}}">General Questions</a></span><br/><br/>
                                                                <span class="pl-3"> <a role="menuitem" tabindex="-1" href="{{url('/personal_info')}}">Personal Information</a></span><br/><br/>
                                                                <span class="pl-3"> <a role="menuitem" tabindex="-1" href="{{ url('id_verification') }}">ID Verification</a></span><br/><br/>
                                                                <span class="pl-3"> <a role="menuitem" tabindex="-1" href="{{ url('payment') }}">Payment for our services</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <br/>


                                                <span class="pl-4"><a href="{{ url('deductions') }}" class="dark-grey"> <i class="mt-5 mb-5"></i>Taxes and Deductions</a></span>
                                            </br><br/>


                                                <span class="pl-4"><a href="{{ url('wages_israel') }}" class="dark-grey"> <i class="mt-5 mb-5"></i>Wages</a></span>
                                                </br><br/>

                                                <span class="pl-4"><a href="{{ url('foreign_taxpayer') }}" class="dark-grey"> <i class="mt-5 mb-5"></i>Foreign Earned Income Exclusion</a></span>
                                                </br><br/>

                                                <span class="pl-4"><a href="{{ url('business_info') }}" class="dark-grey"> <i class="mt-5 mb-5"></i>Business Income</a></span>
                                                </br><br/>

                                                <span class="pl-4"><a href="{{ url('general_rental') }}" class="dark-grey"> <i class="mt-5 mb-5"></i>Rental Income</a></span>
                                                </br><br/>

                                                <span class="pl-4"><a href="{{ url('passive_income') }}" class="dark-grey"> <i class="mt-5 mb-5"></i>Passive Income</a></span>
                                                </br><br/>

                                                <span class="pl-4"><a href="{{ url('property_sales') }}" class="dark-grey"> <i class="mt-5 mb-5"></i>Sale of Property</a></span>
                                                </br><br/>

                                                <span class="pl-4"><a href="{{ url('account_info') }}" class="dark-grey"> <i class="mt-5 mb-5"></i>FBAR and 8938</a></span>
                                                </br><br/>

                                                
                                                <span class="pl-4"><a href="{{ url('foreign_corporation') }}" class="dark-grey"> <i class="mt-5 mb-5"></i>5471 Foreign Corporation</a></span>
                                            </br><br/>

                                                <span class="pl-4"><a href="{{ url('foreign_trust') }}" class="dark-grey"> <i class="mt-5 mb-5"></i>3520 Foreign Trust</a></span>
                                            </br><br/>

                                                <span class="pl-4 pb-5"><a href="#" class="dark-grey"> <i class="mt-5 mb-5"></i>Summary</a></span>

                                            </div>
                                        </div>

                                            <div class="col-md-9">


                                            <div class="row mt-4">
                                                <div class="col-md-11 ml-5">
                                                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item mr-2 pb-4"><a href="{{url('/personal_info')}}">Taxpayer Personal Information</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="{{url('/itin')}}">ITIN Information</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="{{url('/spouse')}}">Spouse Personal Information</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="{{url('/spouse_itin')}}">Spouse ITIN Information</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="{{url('/dependent')}}">Dependents</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="{{url('/contact')}}">Contact Information</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="{{url('/bank_account')}}">Bank Information</a></li>
                                                        </ol>
                                                    </nav>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-12 ml-5">
                                                    <div class="form-group">
                                                        <div class="form-group light-grey">
                                                            <label for="">Do you have an ITIN?</label> <span class="pl-3">
                                                                <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="ITIN Requirement:
                                                                Individual Taxpayer Identification Number (ITIN) is a tax processing number issued by the Internal Revenue Service to help individuals comply with the U.S. tax laws, and to provide a means of efficiently processing and accounting for tax returns and payments for those not eligible for SSN. ITIN's are for federal tax reporting only, and are not intended to serve any other purpose. "></i>
                                                            </span><br/>

                                                            <div class="form-group light-grey">
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-1-outlined" autocomplete="off" name="Year" value="yes" onchange="itin_yes()">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-1-outlined">Yes</label>
    
                                                                <input type="radio" class="btn-check" id="btn-check-2-outlined" autocomplete="off" name="Year" value="no" onchange="itin_no()">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-2-outlined">No</label>
    
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
                                                                            <i class="far fa-id-card ml-5 mt-3" style="font-size: 50px;"></i>
                                                                            <p class="mb-3 mt-2 ml-5">Royalties</p>
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
                                                                            <i class="far fa-id-card ml-5 mt-3" style="font-size: 50px;"></i>
                                                                            <p class="mb-3 mt-2 ml-5">Royalties</p>
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
                                                                            <i class="far fa-id-card ml-5 mt-3" style="font-size: 50px;"></i>
                                                                            <p class="mb-3 mt-2 ml-5">Royalties</p>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3" id="apply_itin_id">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Do you want to apply for an ITIN?</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-11-outlined" autocomplete="off" name="Year1" value="yes" onchange="apply_itin_yes()">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-11-outlined">Yes</label>
    
                                                                <input type="radio" class="btn-check" id="btn-check-12-outlined" autocomplete="off" name="Year1" value="no" onchange="apply_itin_no()">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-12-outlined">No</label>
    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div id="foreign_id">

                                                    <div class="row mt-3" id="no_amended_returns">
                                                        <div class="col-md-12 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Provide a copy of your foreign passport *</label> <span class="pl-3">
                                                                        <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Please ensure all file uploads requires all files uploaded to be in pdf format only and cannot be password protected!"></i>
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
                                                    
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Provide two of the following documents</label> <span class="pl-3">
                                                                    <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="PLEASE NOTE: The documents must be clear, current (not expired) and one of them must contain a photo. Once the forms are ready, you will need to schedule an appointment with Pesach who is an IRS registered agent to verify your identity."></i>
                                                                </span><br/>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Drivers License" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                        Drivers License
                                                                    </label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Birth Certificate" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                        Birth Certificate
                                                                    </label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Foreign ID" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                        Foreign ID
                                                                    </label>
                                                                </div>                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3" id="no_amended_returns">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Drivers License *</label> <span class="pl-3">
                                                                    <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Please ensure all file uploads requires all files uploaded to be in pdf format only and cannot be password protected!"></i>
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


                                                <div class="row mt-3" id="no_amended_returns">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Birth Certificate *</label> <span class="pl-3">
                                                                    <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Please ensure all file uploads requires all files uploaded to be in pdf format only and cannot be password protected!"></i>
                                                                </span><br/>

                                                                <div class="form-group">
                                                                    <div class="form-group light-grey button_group">
                                                                        <label for="input3" value="test"> <i class="fa fa-upload mr-4"></i> File_Upload.pdf</label> <span id="file_name3"></span>
                                                                        <input type="file" class="form-control col-md-2" name="personalSNNUpload" id="input3">
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <div class="col-md-12 ml-5">
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
                                                </div>

                                                <div class="row mt-3" id="no_amended_returns">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Foreign ID *</label> <span class="pl-3">
                                                                    <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Please ensure all file uploads requires all files uploaded to be in pdf format only and cannot be password protected!"></i>
                                                                </span><br/>

                                                                <div class="form-group">
                                                                    <div class="form-group light-grey button_group">
                                                                        <label for="input4" value="test"> <i class="fa fa-upload mr-4"></i> File_Upload.pdf</label> <span id="file_name4"></span>
                                                                        <input type="file" class="form-control col-md-2" name="personalSNNUpload" id="input4">
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <div class="col-md-12 ml-5">
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
                                                </div>

                                                
                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Are you filing a Non-Resident Tax return?</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-4-outlined" autocomplete="off" name="Year2" value="yes">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-4-outlined">Yes</label>
    
                                                                <input type="radio" class="btn-check" id="btn-check-3-outlined" autocomplete="off" name="Year2" value="2020">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-3-outlined">No</label>
    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="row">
                        
                                                    <div class="col-md-2 offset-md-6">
                                                        <div class="row mr-auro">
                                                            <div class="d-flex ">

                                                                <div class="">
                                                                    <a href="{{ url('personal_info') }}" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                        <span class="pl-1 button_font_small">Personal Info</span>
                                                                    </a>
                                                                </div>

                                                                <div class="mr-5">
                                                                    <a href="{{ url('spouse') }}" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-3 button_font_small">Spouse Info <i class="fas fa-arrow-right button_font_small"></i></span>
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="/js/main.js" type="text/javascript"></script>


</body>
