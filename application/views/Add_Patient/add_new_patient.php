            <!-- CSS -->
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add New Patient</title>

        <link rel="stylesheet" href="<?php base_url(); ?>../../css/bootstrap_breadcrumbs.css" type="text/css" />
        <link rel="stylesheet" href="<?php base_url(); ?>../../css/main_menu.css" type="text/css" />
        <link rel="stylesheet" href="<?php base_url(); ?>../../css/form2.css" type="text/css" />

        <meta http-equiv="pragma" content="no-cache" />

    <style>

        h3 {font-size: 15px; font-weight: bold}

    </style>

<hr class="first" style="width:101.5%;">

<div class="breadcrumb_container">
    <div class="row">
        <div class="btn-group btn-breadcrumb">
            <a href="<?php echo site_url('welcome/main_menu'); ?>" class="btn btn-default"><img src="<?php echo base_url('images/png/home-icon-silhouette.png'); ?>" style="width:20px;height:20px;" /></a>
            <a href="<?php echo site_url('welcome/add_new_patient'); ?>" class="btn btn-default">Add Patient</a>
        </div>
    </div>
</div>


<hr class="first" style="width:101.5%; margin-bottom: 40px;">
<br>

<div class="container" style="width: 950px;">
    <div class="row">
        <div class="board">
            <ul class="nav nav-tabs">
                
              <h1 style="font-family: arial; font-size: 25px"> Add New Patient </h1>
            </ul>
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="step-1">
            
            <form method="post" action="<?php echo site_url("welcome/save_patient") ?>">

                <div class="col-md-12">
                   
                <div class="col-md-12">
                    <?php if($this->session->flashdata('validation_errors')):?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php foreach(array_values($this->session->flashdata('validation_errors')) AS $err):?>
                                <li><?= $err?></li>
                            <?php endforeach;?>    
                        </ul>
                        
                    </div>
                    <?php endif;?>
                     <h3>Personal Information</h3>
                    <hr class="third">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">First Name</label>
                            <input  maxlength="100" type="text" name="fname"  class="form-control" style="width: 270px"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Middle Name</label>
                            <input  maxlength="100" type="text" name="mname"  class="form-control" style="width: 270px"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group"> 
                            <label class="control-label">Last Name</label>
                            <input  maxlength="100" type="text" name="lname"  class="form-control" style="width: 270px"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="gender">
                                Gender</label>
                            <select id="subject" name="gender" class="form-control"  style="width: 270px">
                                <option value="na" selected="" selected disabled hidden></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="bloodtype">
                                Blood Type</label>
                            <select id="subject" name="btype" class="form-control"  style="width: 270px">
                                <option value="na" selected="" selected disabled hidden></option>
                                <option name="bloodtype">A+</option>
                                <option name="bloodtype">A-</option>
                                <option name="bloodtype">B+</option>
                                <option name="bloodtype">B-</option>
                                <option name="bloodtype">AB+</option>
                                <option name="bloodtype">AB-</option>
                                <option name="bloodtype">A-</option>
                                <option name="bloodtype">O+</option>
                                <option name="bloodtype">O-</option>
                                <option name="bloodtype">Unknown</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="civil_status">
                                Civil Status</label>
                            <select id="subject" name="cstatus" class="form-control"  style="width: 270px">
                                <option value="na" selected="" selected disabled hidden></option>
                                <option name="civil_status">Single</option>
                                <option name="civil_status">Married</option>
                                <option name="civil_status">Separated</option>
                                <option name="civil_status">Widowed</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Nationality</label>
                            <input  maxlength="100" type="text" name="nationality"  class="form-control" style="width: 270px"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Religion</label>
                            <input  maxlength="100" type="text" name="religion"  class="form-control" style="width: 270px"/>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="control-label">Height</label>
                            <input  maxlength="10" type="text" name="height" placeholder="cm"  class="form-control" />
                        </div>
                    </div>


                     <div class="col-md-2">
                        <div class="form-group">
                            <label class="control-label">Weight</label>
                            <input  maxlength="10" type="text" name="weight" placeholder="kg"  class="form-control"  />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Birthdate</label>
                            <input  maxlength="100" name="dob" type="date"  class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Email Address</label>
                            <input  maxlength="100" type="text" name="email"  class="form-control" style="width: 270px"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Contact number</label>
                            <input  maxlength="10" type="text" name="contact"  class="form-control" style="width: 270px" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Home Address</label>
                            <input  maxlength="100" type="text" name="address"  class="form-control" style="width: 560px"/>
                        </div>
                    </div>

                </div> <!-- closing div for Personal Information -->

                <div class="col-md-12">
                    <h3>Create Account</h3>
                    <hr class="third">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Username</label>
                            <input  maxlength="100" type="text" name="username"  class="form-control" style="width: 270px"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Password</label>
                            <input  maxlength="100" type="password" name="password"  class="form-control" style="width: 270px" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Confirm Password</label>
                            <input  maxlength="100" type="password" name="confirm" id="confirm"  class="form-control" style="width: 270px" />
                    </div>
                    
                    </div>
                </div> <!-- closing div for Account Information -->

                <div class="col-md-12">
                    <h3>Employment Information</h3>
                    <hr class="third">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Occupation</label>
                            <input  maxlength="100" type="text" name="occupation"  class="form-control" style="width: 270px"/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Employer's name</label>
                            <input  maxlength="40" type="text" name="Employername"  class="form-control" style="width: 270px"/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Employer's Address</label>
                            <input  maxlength="5" type="text" name="employeraddress"  class="form-control" style="width: 270px"/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Employer's Contact number</label>
                            <input  maxlength="2" type="text" name="employernumber"  class="form-control" style="width: 270px"/>
                        </div>
                    </div>

                </div> <!-- closing div for Employment Information -->

                <div class="col-md-12">
                    <h3>Emergency Contact Information</h3>
                    <hr class="third">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input  maxlength="14" type="text" name="Emergencyname"  class="form-control" style="width: 270px"/>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="gender">
                                Relationship</label>
                            <select id="subject" name="relationship" class="form-control"  style="width: 270px">
                                <option value="na" selected="" selected disabled hidden></option>
                                <option name="relationship">Parent</option>
                                <option name="relationship">Sibling</option>
                                <option name="relationship">Guardian</option>
                                <option name="relationship">Friend</option>
                                <option name="relationship">Others</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Contact number</label>
                            <input  maxlength="100" type="text" name="Emergencynum"  class="form-control" style="width: 270px"/>
                        </div>
                    </div>
                </div> <!-- closing div for Emergency Contact Information -->
                    
                <div class="col-md-12">
                    <h3>Health Maintenance Organization (HMO)</h3>
                    <hr class="third" style="margin-bottom:8px">

                    <div class="col-md-4" style="padding-left: 1px">
                        <div class="checkbox checkbox-inline">

                            <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]">  AON Philippines </label>
                            </div>

                            <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]"> AsianLife and General Assuarance Corp. </label>
                            </div>

                            <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]"> Asian Care Health Systems </label>
                            </div>

                            <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]"> Blue Cross Healthcare, Inc. </label>
                            </div>

                            <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]"> BPI-Philam </label>
                            </div>

                            <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]"> Cocolife Healthcare
                            </div>

                             <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]"> Eastwest Healthcare, Inc </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" style="padding-left: 1px">
                        <div class="checkbox checkbox-inline">

                            <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]"> Fortune Medicare, Inc </label>
                            </div>

                            <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]"> Getawell Health Systems, Inc </label>
                            </div>

                            <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]"> Health Metrics, Inc </label>
                            </div>

                            <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]"> Healthtrust International, Inc </label>
                            </div>

                            <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]"> Medicard Philippines, Inc</label>
                            </div>

                            <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]"> Medilink Network, Inc </label>
                            </div>

                             <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]"> Medocare Systems, Inc. </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" style="padding-left: 1px">
                        <div class="checkbox checkbox-inline">
                            <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]"> Metrocare Health Systems Inc. </label>
                            </div>

                            <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]"> Philcare (PhilHealth Care, Inc. </label>
                            </div>

                            <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]"> Star Healthcare Systems, Inc </label>
                            </div>

                            <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]">St. Patrick's Health Care Systems, Inc </label>
                            </div>

                            <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]"> Time is Gold Healthcare, Inc </label>
                            </div>

                            <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]"> ValuCare Health Systems, Inc </label>
                            </div>

                             <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]"> Others </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- closing div for Health Maintenance Organization (HMO) -->
                
                <div style="float: right; margin: 20px">
                    <button class="btn btn-lg btn-primary" type="submit">Next</button>
                   
                </div>  

                <!-- 
                <button id="step-1-next" class="btn btn-lg btn-primary nextBtn pull-right">Next</button>
                -->
                </div>
            </form>
        </div>
    </div>
</div>