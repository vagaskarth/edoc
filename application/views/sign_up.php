<!DOCTYPE html>

<head><title>Sign Up</title>   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 

 <link rel="stylesheet" href="<?php base_url(); ?>css/bootstrap.min.css" type="text/css" />
 <link rel="stylesheet" href="<?php base_url(); ?>css/signin.css" type="text/css" />
 <link rel="stylesheet" href="<?php base_url(); ?>../../css/main_menu.css" type="text/css" />
 
  </head>
<div class="container">
  <div class="contain" style="width: 1150px; padding: 20px 150px;">
    <div class="row">
        <div class="board">
            <ul class="nav nav-tabs">
                
              <h1 style="font-family: arial; font-size: 25px"> Physician Sign Up Form</h1>
            </ul>
        </div>
        <div class="tab-content">
            <?php if($this->session->flashdata('validation_errors')):?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach(array_values($this->session->flashdata('validation_errors')) AS $err):?>
                        <li><?= $err?></li>
                    <?php endforeach;?>    
                </ul>
                
            </div>
            <?php endif;?>
            <div role="tabpanel" class="tab-pane active" id="step-1">
            
            <form role="form" form method="post" action="New_Physician" >

                <div class="col-md-12">
                    <h4>Personal Information</h4>
                    <hr class="third">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">First Name</label>
                            <input  maxlength="100" type="text" name="fname"  class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Middle Name</label>
                            <input  maxlength="100" type="text" name="mname"  class="form-control"/>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group"> 
                            <label class="control-label">Last Name</label>
                            <input  maxlength="100" type="text" name="lname"  class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    <label class="control-label">Birthdate</label>
                    <input  maxlength="100" name="dob" type="date"  class="form-control" style="width: 255px"/>
                    </div>
                </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="gender">
                                Gender</label>
                            <select id="subject" name="gender" class="form-control"  style="width: 255px">
                                <option value="na" selected="" selected disabled hidden></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                                
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Contact Number</label>
                            <input  maxlength="100" type="text" name="contact"  class="form-control"/>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Home Address</label>
                            <input  maxlength="100" type="text" name="address"  class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Medical School</label>
                            <input  maxlength="100" type="text" name="med_school"  class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Residency</label>
                            <input  maxlength="100" type="text" name="residency"  class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Email Address</label>
                            <input  maxlength="100" type="text" name="email"  class="form-control"  />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Specialization</label>
                            <input  maxlength="100" type="text" name="Specialization"  class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">License Number</label>
                            <input  maxlength="100" type="text" name="License_num"  class="form-control"/>
                        </div>
                    </div>
                    
                </div>
                </div>
                

                <div class="col-md-12">
                <h4>Account Information</h4>
                <hr class="third">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label"> Username</label>
                            <input  maxlength="100" type="text" name="username"  class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Password</label>
                            <input  maxlength="100" type="password" name="password"  class="form-control"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Confirm Password</label>
                            <input  maxlength="100" type="password" name="confirm" id="confirm"  class="form-control"/>
                        </div>
                    </div>

                <div style="float: right; margin: 20px">
                <input type="submit" id="step-1-next" class="btn btn-lg btn-primary nextBtn pull-right" name="next" value="Submit"></div>
                </div> <!-- closing div for Account Information -->

  <body>



  

</body></html>