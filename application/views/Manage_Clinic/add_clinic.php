    <!-- CSS -->
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Clinic</title>

        <link rel="stylesheet" href="<?php base_url(); ?>../../css/bootstrap_breadcrumbs.css" type="text/css" />
        <link rel="stylesheet" href="<?php base_url(); ?>../../css/main_menu.css" type="text/css" />
        <link rel="stylesheet" href="<?php base_url(); ?>../../css/form2.css" type="text/css" />

        <link rel="stylesheet" href="<?= base_url('bootstrap-timepicker/css/bootstrap-timepicker.min.css'); ?>" type="text/css" />
        
        <script type="text/javascript" src="<?= base_url('js/jquery-1.11.1.min.js'); ?>"></script>
        <script type="text/javascript" src="<?= base_url('bootstrap-timepicker/js/bootstrap-timepicker.min.js'); ?>"></script>

        
        <meta http-equiv="pragma" content="no-cache" />

    <style>

        h3 {font-size: 15px; font-weight: bold}

        .kv-avatar .file-preview-frame,.kv-avatar .file-preview-frame:hover {
            margin: 0;
            padding: 0;
            border: none;
            box-shadow: none;
            text-align: center;
            }
        
        .kv-avatar .file-input {
            display: table-cell;
            max-width: 220px;
            }

        th {
            text-align: center;
            font-size: 14px;
        }
    </style>

<hr class="first" style="width:101.5%;">

<div class="breadcrumb_container">
    <div class="row">
        <div class="btn-group btn-breadcrumb">
            <a href="<?php echo site_url('welcome/main_menu'); ?>" class="btn btn-default"><img src="<?php echo base_url('images/png/home-icon-silhouette.png'); ?>" style="width:20px;height:20px;" /></a>
            <a href="<?php echo site_url('welcome/manage_clinic'); ?>" class="btn btn-default">Manage Clinic</a>
            <a href="<?php echo site_url('welcome/add_clinic'); ?>" class="btn btn-default">Add Clinic</a>
        </div>
    </div>
</div>

<hr class="first" style="width:101.5%; margin-bottom: 40px;">
<br>

<div class="container" style="width: 900px;">
    <div class="row">
        <div class="board">
            <ul class="nav nav-tabs">
                
              <h1 style="font-family: arial; font-size: 25px"> Add Clinic </h1>
            </ul>
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="step-1">

            <form method="post" action="<?php echo site_url("welcome/new_clinic") ?>">
                
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

                    <h3>Clinic Information</h3>
                    <hr class="third">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input  maxlength="100" type="text" name="clinic_name" required="required" class="form-control" style="width: 365px"/>
                        </div>
                    
                        <div class="form-group">
                            <label class="control-label">Address</label>
                            <input  maxlength="100" type="text" name="clinic_add" required="required" class="form-control" style="width: 365px"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <input  maxlength="100" type="text" name="clinic_desc" required="required" class="form-control" style="width: 365px"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" name="clinic_img" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                        </div>
                    </div> 

                </div> <!-- closing div for Clinic Information Part I -->

                <div class="col-md-12">
                    <hr class="third">

                    <div class="col-md-6">
                    <div class="form-group">
                            <label class="control-label">Contact Person</label>
                            <input  maxlength="100" type="text" name="clinic_contactper" required="required" class="form-control" style="width: 365px"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Email Address</label>
                            <input  maxlength="100" type="text" name="clinic_email" required="required" class="form-control" style="width: 365px"/>
                        </div>
                    </div> <!-- closing div for Clinic Information Part II -->

                    <div class="col-md-6">
                    <div class="form-group">
                            <label class="control-label">Phone</label>
                            <input  maxlength="100" type="text" name="clinic_phone" required="required" class="form-control"/>
                        </div>

                    <div class="form-group">
                            <label class="control-label">Mobile</label>
                            <input  maxlength="100" type="text" name="clinic_mobile" required="required" class="form-control"/>
                        </div>


                </div>

                <div class="col-md-12">
                    <h3>Clinic Schedule</h3>
                    <hr class="third">

                    <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                        <th>Sunday</th>
                    </tr> 
                  </thead>
                  <tbody>

                          <tr align="center">
                            <td><input  maxlength="100" type="text" required="required" class="form-control timepicker" style="width: 80px" placeholder="In"/></td>
                            <td><input  maxlength="100" type="text" required="required" class="form-control timepicker" style="width: 80px" placeholder="In"/></td>
                            <td><input  maxlength="100" type="text" required="required" class="form-control timepicker" style="width: 80px" placeholder="In"/></td>
                            <td><input  maxlength="100" type="text" required="required" class="form-control timepicker" style="width: 80px" placeholder="In"/></td>
                            <td><input  maxlength="100" type="text" required="required" class="form-control timepicker" style="width: 80px" placeholder="In"/></td>
                            <td><input  maxlength="100" type="text" required="required" class="form-control timepicker" style="width: 80px" placeholder="In"/></td>
                            <td><input  maxlength="100" type="text" required="required" class="form-control timepicker" style="width: 80px" placeholder="In"/></td>
                          </tr>

                          <tr align="center">
                            <td><input  maxlength="100" type="text" required="required" class="form-control timepicker" style="width: 80px" placeholder="Out"/></td>
                            <td><input  maxlength="100" type="text" required="required" class="form-control timepicker" style="width: 80px" placeholder="Out"/></td>
                            <td><input  maxlength="100" type="text" required="required" class="form-control timepicker" style="width: 80px" placeholder="Out"/></td>
                            <td><input  maxlength="100" type="text" required="required" class="form-control timepicker" style="width: 80px" placeholder="Out"/></td>
                            <td><input  maxlength="100" type="text" required="required" class="form-control timepicker" style="width: 80px" placeholder="Out"/></td>
                            <td><input  maxlength="100" type="text" required="required" class="form-control timepicker" style="width: 80px" placeholder="Out"/></td>
                            <td><input  maxlength="100" type="text" required="required" class="form-control timepicker" style="width: 80px" placeholder="Out"/></td>
                          </tr>
                        </tbody>
                </table>
                                    
                </div> <!-- closing div for Clinic Schedule -->
                    
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
                    <input type="submit" id="step-1-next" class="btn btn-lg btn-primary nextBtn pull-right" name="next" value="Submit"></div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
            $('.timepicker').timepicker({
                 minuteStep: 5,
                showInputs: false,
                disableFocus: true
            });
        </script>