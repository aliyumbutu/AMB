<!doctype html>

<?php session_start(); ?>





      <?php
        if(isset($_SESSION['error'])){

           header("location:register_form_mentor.php");
          echo "
            <div class='alert alert-danger text-center'>
              <i class='fas fa-exclamation-triangle'></i> ".$_SESSION['error']."
            </div>
          ";

          //unset error
          unset($_SESSION['error']);

             
        }

        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success text-center'>
              <i class='fas fa-check-circle'></i> ".$_SESSION['success']."

            </div>
          ";

          //unset success
          unset($_SESSION['success']);
        }
      ?>

       <?php

                $mail = $_GET["mail"];

                 ?>



<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Mentor07</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

  <!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

  <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>
<div class="image-container set-full-height">
    <!--   Creative Tim Branding   -->
    <a href="http://creative-tim.com">
         <div class="logo-container">
            <div class="logo">
                <img src="assets/img/new_logo.png">
            </div>
            <div class="brand">
                Creative Tim
            </div>
        </div>
    </a>

  <!--  Made With Get Shit Done Kit  -->
    <a href="http://demos.creative-tim.com/get-shit-done/index.html?ref=get-shit-done-bootstrap-wizard" class="made-with-mk">
      <div class="brand">GK</div>
      <div class="made-with">Made with <strong>GSDK</strong></div>
    </a>

    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card" data-color="orange" id="wizardProfile">
                   
                    <form action="mentor_register2.php?email=<?php echo $mail ?>" method="POST">
                    
                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->
               

                      <div class="wizard-header">
                          <h3> <?php echo $mail; ?>
                              <br/><b>Step 2/2</b><br/>
                             <b>BUILD</b> YOUR PROFILE <br>
                             
                            
                             <small>This information will let us know more about you.</small>
                          </h3>
                      </div>

            <div class="wizard-navigation">
              <ul>
                              <li><a href="#about" data-toggle="tab">About</a></li>
                              <li><a href="#description" data-toggle="tab">Description</a></li>
                              <li><a href="#address" data-toggle="tab">Address</a></li>
                          </ul>

            </div>

                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                  <h4 class="info-text">Welcome to Mento07</h4>
                                  <div class="col-sm-4 col-sm-offset-1">
                                     <div class="picture-container">
                                          <div class="picture">
                                              <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                              <input type="file" id="wizard-picture">
                                          </div>
                                          <h6>Choose Picture</h6>
                                      </div>
                                  </div>
                              
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>Full Name <small>(required)</small></label>
                                        <input name="full_name" type="text" class="form-control" placeholder="...">
                                      </div>
                                      <div class="form-group">
                                        <label>Date of Birth <small>(required)</small></label>
                                        <input name="dob" type="date" class="form-control">

                                      </div>

                                       <div class="form-group">
                                        <label>Gender<small>(required)</small></label>

                                       <select class="btn" name="gender">
                                         
                                         <option>Male</option>
                                         <option>Female</option>
                                         <option>Custom</option>

                                       </select>

                                      </div>



                                  </div>

                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Skills Saparated with comma (,)<small>(required)</small></label>
                                          <input name="skill" type="text" class="form-control" placeholder="example WebDeveloper" required="">
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="description">
                               <div class="row">
                                    <h4 class="info-text"> Drop us a small description. </h4>
                                    <div class="col-sm-6 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Place description</label>
                                            <textarea class="form-control" name="description" placeholder="" rows="9">

                                            </textarea>
                                          </div>
                                    </div>
                                    <div class="col-sm-4">
                                         <div class="form-group">
                                            <label>Example</label>
                                            <p class="description">"just a Description about you "</p>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Are you living in a nice area? </h4>
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="5h Avenue">
                                          </div>
                                    </div>
                                    <div class="col-sm-3">
                                         <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="number" name="phone" class="form-control" placeholder="+232323435464">
                                          </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Expirience Duration</label>
                                            <input type="text" class="form-control" name="e_duration"placeholder="eg: 1year">
                                          </div>
                                    </div>
                                    <div class="col-sm-5">
                                         <div class="form-group">
                                            <label>Country</label><br>
                                             <select name="country" class="form-control">
                                                <option value="Afghanistan"> Ghana </option>
                                                <option value="Albania"> Albania </option>
                                                <option value="Algeria"> Algeria </option>
                                                <option value="American Samoa"> American Samoa </option>
                                                <option value="Andorra"> Andorra </option>
                                                <option value="Angola"> Angola </option>
                                                <option value="Anguilla"> Anguilla </option>
                                                <option value="Antarctica"> Antarctica </option>
                                                <option value="...">...</option>
                                            </select>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">

                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />

                                <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='submit'/>



                            </div>

                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->

    <div class="footer">
        <div class="container">
             Made with <i class="fa fa-heart heart">Mento07 </i>
    </div>

</div>

</body>

  <!--   Core JS Files   -->
  <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

  <!--  Plugin for the Wizard -->
  <script src="assets/js/gsdk-bootstrap-wizard.js"></script>

  <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
  <script src="assets/js/jquery.validate.min.js"></script>

</html>
