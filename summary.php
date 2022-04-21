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
                        <div class="col-md-10 offset-md-1 d-none d-md-block sign-up__vh_big u-center-big">
                            <div class="card">
                                
                                <div class="card-body neg-margin-sidebar">

                                    <div class="row">
                                        
                                            <div class="col-md-3 d-none d-md-block sidebar-background">
    
                                                <div class="text-left">
    
                                                    <div class="margin-small-top"></div>
                                                    <p class="margin-left-large light-grey">100% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                            <!--Navbar  -->
                                            <?php  require_once 'navbar.php'; ?>

                                            <div class="col-md-9">
                                                
                                                <table class="table mt-5">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col"></th>
                                                      <th scope="col"></th>
                                                      <th scope="col"></th>
                                                      <th scope="col"></th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <th scope="row">1</th>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                    </tr>
                                                    <tr>
                                                      <th scope="row">2</th>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                    </tr>
                                                    <tr>
                                                      <th scope="row">3</th>
                                                      <td colspan="2"></td>
                                                      <td></td>
                                                    </tr>
                                                  </tbody>
                                                </table>



                                                <!--<div class="row">-->
                        
                                                <!--    <div class="col-md-2 offset-md-6">-->
                                                <!--        <div class="row mr-auro">-->
                                                <!--            <div class="d-flex ">-->

                                                <!--                <div class="">-->
                                                <!--                    <a href="general2.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>-->
                                                <!--                        <span class="pl-1 button_font_small">General Information</span>-->
                                                <!--                    </a>-->
                                                <!--                </div>-->

                                                <!--                <div class="mr-5">-->
                                                <!--                    <a href="itin.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5">-->
                                                <!--                        <span class="pl-3 button_font_small">ITIN Information <i class="fas fa-arrow-right button_font_small"></i></span>-->
                                                <!--                    </a>-->
                                                <!--                </div>-->

                                                <!--            </div>-->

                                                <!--        </div>-->
                                                            
                                                <!--    </div>-->
                                                        
                                                <!--</div>-->


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
        var tele = document.querySelector('#telle');

        tele.addEventListener('keyup', function(e){
          if (event.key != 'Backspace' && (tele.value.length === 3 || tele.value.length === 6)){
          tele.value += '-';
          }
        });

    </script>

</body>
