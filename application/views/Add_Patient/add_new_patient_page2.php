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

        .smallinput { /** For "Others" input type **/
            width: 8px;
            height: 18px;
            margin-left: 3px;
        }

        textarea{
            width: 75%;
            height: 50px;
            padding: 12px 20px;
            box-sizing: border-box;
            margin-top: 8px;
            margin-bottom: 15px;
            resize: vertical;
}

    </style>

<hr class="first" style="width:101.5%;">

<div class="breadcrumb_container">
    <div class="row">
        <div class="btn-group btn-breadcrumb">
            <a href="<?php echo site_url('welcome/main_menu'); ?>" class="btn btn-default"><img src="<?php echo base_url('images/png/home-icon-silhouette.png'); ?>" style="width:20px;height:20px;" /></a>
            <a href="<?php echo site_url('welcome/add_new_patient_page2'); ?>" class="btn btn-default">Add Patient</a>
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
            
            <form method="post" action="<?= site_url('welcome/confirm_form')?>">

                <div class="col-md-12">
                    <h3>Past Medical History</h3>
                    <hr class="third" style="margin-bottom:8px">
                    
                    <div class="col-md-3">
                        <div class="checkbox checkbox-inline">
                            <div class="checkbox">
                                <label> <input type="checkbox" name="HMO[]"> Cancer </label>
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" name="medical_hist">
                                <label for="inlineCheckbox1"> Cancer </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="medical_hist">
                                <label for="inlineCheckbox1"> Alcoholism </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="medical_hist">
                                <label for="inlineCheckbox1"> Ulcers </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="medical_hist">
                                <label for="inlineCheckbox1"> Cholesterol </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="medical_hist">
                                <label for="inlineCheckbox1"> Asthma </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="checkbox checkbox-inline">
                            <div class="checkbox">
                                <input type="checkbox" name="medical_hist">
                                <label for="inlineCheckbox1"> Heart Trouble </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="medical_hist">
                                <label for="inlineCheckbox1"> Kidney Disease </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="medical_hist">
                                <label for="inlineCheckbox1"> Sick Cell Anemia </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="medical_hist">
                                <label for="inlineCheckbox1"> Tuberculosis/HIV </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="medical_hist">
                                <label for="inlineCheckbox1"> Emphysema/COPD </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="checkbox checkbox-inline">
                            <div class="checkbox">
                                <input type="checkbox" name="medical_hist">
                                <label for="inlineCheckbox1"> High Blood Pressure </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="medical_hist">
                                <label for="inlineCheckbox1"> Bleeding Disorder </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="medical_hist">
                                <label for="inlineCheckbox1"> Liver Disorder </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="medical_hist">
                                <label for="inlineCheckbox1"> Birthd Defects </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="medical_hist">
                                <label for="inlineCheckbox1"> Stroke </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="checkbox checkbox-inline">
                            <div class="checkbox">
                                <input type="checkbox" name="medical_hist[]" value="Arthritis">
                                <label for="inlineCheckbox1"> Arthritis </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="medical_hist[]" value="Diabetes">
                                <label for="inlineCheckbox1"> Diabetes </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="medical_hist">
                                <label for="inlineCheckbox1"> Heart Attack </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="medical_hist">
                                <label for="inlineCheckbox1"> Gout </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="medical_hist_others">
                                <label for="inlineCheckbox1"> Others </label>
                                <input type="text" name="medical_hist[]" class="smallinput" style="margin-top: 2px; width: 100px;">
                            </div>
                        </div>
                    </div>
                </div> <!-- closing div for Past Medical History -->

                <div class="col-md-12">
                    <h3>Surgery or Procedure</h3>
                    <hr class="third" style="margin-bottom:8px">

                    <div class="col-md-3">
                        <div class="checkbox checkbox-inline">
                            <div class="checkbox">
                                <input type="checkbox" name="surgery">
                                <label for="inlineCheckbox1"> Tonsils </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="surgery">
                                <label for="inlineCheckbox1"> Ovaries </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="surgery">
                                <label for="inlineCheckbox1"> Thyroid </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="surgery">
                                <label for="inlineCheckbox1"> Joint Replacement </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="surgery">
                                <label for="inlineCheckbox1"> Extremities, Neck, Back </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="checkbox checkbox-inline">
                            <div class="checkbox">
                                <input type="checkbox" name="surgery">
                                <label for="inlineCheckbox1"> Breast </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="surgery">
                                <label for="inlineCheckbox1"> Stomach </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="surgery">
                                <label for="inlineCheckbox1"> Kidney </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="surgery">
                                <label for="inlineCheckbox1"> Appendix </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="surgery">
                                <label for="inlineCheckbox1"> Prostate </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="checkbox checkbox-inline">
                            <div class="checkbox">
                                <input type="checkbox" name="surgery">
                                <label for="inlineCheckbox1"> Hernia(repair) </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="surgery">
                                <label for="inlineCheckbox1"> Arthroscopy </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="surgery">
                                <label for="inlineCheckbox1"> Uterus </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="surgery">
                                <label for="inlineCheckbox1"> Small Intestine </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="surgery">
                                <label for="inlineCheckbox1"> Heart </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="checkbox checkbox-inline">
                            <div class="checkbox">
                                <input type="checkbox" name="surgery">
                                <label for="inlineCheckbox1"> Gall Bladder </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="surgery">
                                <label for="inlineCheckbox1"> Colon </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="surgery">
                                <label for="inlineCheckbox1"> Pacemaker </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="surgery">
                                <label for="inlineCheckbox1"> Others </label>
                                <input type="text" name="surgery" class="smallinput" style="margin-top: 2px; width: 100px;">
                            </div>
                        </div>
                    </div>
                    
                </div> <!-- closing div for Surgery or Procedure -->

                <div class="col-md-12">
                    <h3>Allergies</h3>
                    <hr class="third">
                    
                    <div class="col-md-7">
                    <p>Are you allergic to peniccilin or any other drugs?
                        <label class="radio-inline">
                            <input type="radio" name="decision" style="margin-left: 5px; margin-right: 8px">Yes
                        </label>

                        <label class="radio-inline">
                            <input type="radio" name="decision" style="margin-left: 5px; margin-right: 8px">No
                        </label></p>
                    </div>

                    <div class="col-md-12">
                        <p>Please List:
                            <input type="text" name="allergies" class="smallinput" style="margin-top: 2px; width: 230px; height: 22px"></p>
                    </div>
                </div> <!-- closing div for Allergies -->

                <div class="col-md-12">
                    <h3>Medications</h3>
                    <hr class="third">
                    
                    <div class="col-md-12">
                        <p>Please List:
                            <input type="text" name="allergies" class="smallinput" style="margin-top: 2px; width: 360px; height: 22px"></p>
                    </div>

                </div> <!-- closing div for Medications -->

                <div class="col-md-12">
                    <h3>Social and Preventive History</h3>
                    <hr class="third">

                    <div class="col-md-4">
                    <p style="text-decoration: underline;">Tobacco Use</p>
                    <p> Cigarettes:
                    <label class="radio-inline">
                            <input type="radio" name="decision" style="margin-left: 5px; margin-right: 8px">Yes
                        </label>

                        <label class="radio-inline">
                            <input type="radio" name="decision" style="margin-left: 5px; margin-right: 8px">No
                        </label> </p>

                        <p>Sticks per day:
                            <input type="text" name="sticksperday" class="smallinput" style="margin-top: 2px; width: 120px; height: 22px" placeholder="if answer is yes"></p>
                    </div>
                    
                    <div class="col-md-8">
                    <p style="text-decoration: underline;">Alcohol Consumption</p>
                    <div class="col-md-12">
                        <p>Do you drink?
                        <label class="radio-inline">
                            <input type="radio" name="drink_decision" style="margin-left: 5px; margin-right: 8px">Yes </label>

                            <label class="radio-inline">
                            <input type="radio" name="drink_decision" style="margin-left: 5px; margin-right: 8px">No </label>
                        <p> Frequency:


                            <label class="radio-inline">
                            <input type="radio" name="decision" style="margin-left: 5px; margin-right: 8px">No </label>

                            <label class="radio-inline">
                            <input type="radio" name="decision" style="margin-left: 5px; margin-right: 8px">Seldom </label>
                        
                            <label class="radio-inline">
                            <input type="radio" name="decision" style="margin-left: 5px; margin-right: 8px">Occasionally </label>

                            <label class="radio-inline">
                            <input type="radio" name="decision" style="margin-left: 5px; margin-right: 8px">Often</label>
                        </p>

                        <p>Quantity:
                            <input type="text" name="alcohol_qty" class="smallinput" style="margin-top: 2px; width: 140px; height: 22px" placeholder="if answer is yes"></p>
                    </div>
                    </div>

                </div> <!-- closing div for Social and Preventive History -->

                <div class="col-md-12">
                    <h3>OB-Gyne History (for females)</h3>
                    <hr class="third">

                    <div class="col-md-12">
                        <p>Age of first menstruation:
                            <input type="text" name="sticksperday" class="smallinput" style="margin-top: 2px; width: 120px; height: 22px"></p>
                    </div>

                    <div class="col-md-12">
                        <p>Date of last menstrual period:
                            <input type="text" name="sticksperday" class="smallinput" style="margin-top: 2px; width: 120px; height: 22px"></p>
                    </div>
                    
                    <div class="col-md-12">
                        <p>Number of pregnancies:
                            <input type="text" name="sticksperday" class="smallinput" style="margin-top: 2px; width: 120px; height: 22px"></p>
                    </div>
                </div> <!-- closing div for OB-Gyne History (for females) -->
                    
                <div class="col-md-12">
                    <h3> Family History </h3>
                    <hr class="third">

                    <div class="col-md-3">
                        <div class="checkbox checkbox-inline">
                            <div class="checkbox">
                                <input type="checkbox" name="family_hist">
                                <label for="inlineCheckbox1"> Cancer </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="family_hist">
                                <label for="inlineCheckbox1"> Gout </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="family_hist">
                                <label for="inlineCheckbox1"> Diabetes </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="checkbox checkbox-inline">
                            <div class="checkbox">
                                <input type="checkbox" name="family_hist">
                                <label for="inlineCheckbox1"> Bleeding Problems </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="family_hist">
                                <label for="inlineCheckbox1"> Rheumatiod Arthritis </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="family_hist">
                                <label for="inlineCheckbox1"> Sickle Cell Anemia </label>
                            </div>
                        </div>
                    </div>

                     <div class="col-md-3">
                        <div class="checkbox checkbox-inline">
                            <div class="checkbox">
                                <input type="checkbox" name="family_hist">
                                <label for="inlineCheckbox1"> Other Type of Arthritis </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="family_hist">
                                <label for="inlineCheckbox1"> Heart Disease </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" name="family_hist">
                                <label for="inlineCheckbox1"> Others </label>
                                <input type="text" name="family_hist" class="smallinput" style="margin-top: 2px; width: 100px;">
                            </div>
                        </div>
                    </div>
                </div> <!-- closing div for Family History -->

                <div class="col-md-12">
                    <h3>Hospital Confinement</h3>
                    <hr class="third">

                    <div class="col-md-12">
                    <p> Have you ever been confined?

                    <label class="radio-inline">
                            <input type="radio" name="decision" style="margin-left: 5px; margin-right: 8px">Yes
                        </label> 

                    <label class="radio-inline">
                            <input type="radio" name="decision" style="margin-left: 5px; margin-right: 8px">No
                        </label></p>
                    </div>

                    <div class="col-md-3">
                        <p>Hospital:
                            <input type="text" name="hospital" class="smallinput" style="margin-top: 2px; width: 120px; height: 22px"></p>
                    </div>

                    <div class="col-md-12">
                        <p>Problem:
                            <input type="text" name="problem" class="smallinput" style="margin-top: 2px; width: 120px; height: 22px"></p>
                    </div>

                    <div class="col-md-12">
                        <p>Date admitted:
                            <input type="date" name="date_admitted" class="smallinput" style="margin-top: 2px; width: 120px; height: 22px"></p>
                    </div>

                    <div class="col-md-12">
                        <p>Date discharged:
                            <input type="date" name="date_discharged" class="smallinput" style="margin-top: 2px; width: 120px; height: 22px"></p>
                    </div>

                </div> <!-- closing div for Social and Preventive History -->

                <div class="col-md-12">
                    <h3> Immunizations </h3>
                    <hr class="third">

                    <div class="col-md-2">
                        <p>Please List:</p>
                    </div>

                    <div class="col-md-8">
                        <textarea rows="4" cols="50">
                        </textarea>
                    </div>

                    
                </div> <!-- closing div for Immunizations -->
                
                <div style="float: right; margin: 20px">
                <input type="submit" id="step-1-next" class="btn btn-lg btn-primary nextBtn pull-right" name="next" value="Submit"></div>
                
            </div>
            
        </div>
    </div>
</div>