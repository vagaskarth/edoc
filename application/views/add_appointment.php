<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Appointment</title>

        <link rel="stylesheet" href="<?php base_url(); ?>../../css/bootstrap_breadcrumbs.css" type="text/css" />
        <link rel="stylesheet" href="<?php base_url(); ?>../../css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php base_url(); ?>../../css/main_menu.css" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

    <style>
        th {text-align: center}
        h3 {font-size: 15px; font-weight: bold}

        input[type="date"]::before { 
        content: attr(data-placeholder);
        width: 100%;
        }
        
        table#acrylic {
            border-collapse: separate;
            background: #fff;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            margin: 50px auto;
            -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
            cursor: pointer;
        }
        
        #acrylic thead {
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }
        
        #acrylic thead th {
            font-family: 'Roboto';
            font-size: 16px;
            font-weight: 400;
            color: #fff;
            text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);
            text-align: left;
            padding: 20px;
            background-size: 100%;
            background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #646f7f), color-stop(100%, #4a5564));
            background-image: -moz-linear-gradient(#646f7f, #4a5564);
            background-image: -webkit-linear-gradient(#646f7f, #4a5564);
            background-image: linear-gradient(#646f7f, #4a5564);
            border-top: 1px solid #858d99;
        }
        
        #acrylic thead th:first-child {
            -moz-border-top-right-radius: 5px;
            -webkit-border-top-left-radius: 5px;
            border-top-left-radius: 5px;
        }
        
        #acrylic thead th:last-child {
            -moz-border-top-right-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            border-top-right-radius: 5px;
        }
        
        #acrylic tbody tr td {
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
            color: #5f6062;
            font-size: 13px;
            padding: 20px 20px 20px 20px;
            border-bottom: 1px solid #e0e0e0;
        }
        
        #acrylic tbody tr:nth-child(2n) {
            background: #f0f3f5;
        }
        
        #acrylic tbody tr:last-child td {
            border-bottom: none;
        }
        
        #acrylic tbody tr:last-child td:first-child {
            -moz-border-bottom-right-radius: 5px;
            -webkit-border-bottom-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }
        
        #acrylic tbody tr:last-child td:last-child {
            -moz-border-bottom-right-radius: 5px;
            -webkit-border-bottom-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        
        #acrylic tbody:hover > tr td {
            filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=50);
            opacity: 0.5;
        }
        
        #acrylic tbody:hover > tr:hover td {
            text-shadow: none;
            color: #2d2d2d;
            filter: progid: DXImageTransform.Microsoft.Alpha(enabled=false);
            opacity: 1;
            transition: 0.2s all;
        }
        
        @media screen and (max-width: 767px) {
            #acrylic thead {
                display: none;
            }
            #acrylic tr {
                margin-bottom: 10px;
                display: block;
            }
            #acrylic td {
                display: block;
                text-align: right;
                font-size: 13px;
                border-bottom: 1px dotted #ccc;
            }
            #acrylic td:last-child {
                border-bottom: 0;
            }
            #acrylic td:before {
                content: attr(data-label);
                float: left;
                text-transform: uppercase;
                font-weight: bold;
            }
            table#acrylic {
                width: 100%;
            }
        }
    </style>

<hr class="first" style="width:101.5%;">

<div class="breadcrumb_container">
    <div class="row">
        <div class="btn-group btn-breadcrumb">
            <a href="<?php echo site_url('welcome/main_menu'); ?>" class="btn btn-default"><img src="<?php echo base_url('images/png/home-icon-silhouette.png'); ?>" style="width:20px;height:20px;" /></a>
            <a href="<?php echo site_url('welcome/schedule_n_appointments'); ?>" class="btn btn-default">Schedule and Appointments</a>
            <a href="<?php echo site_url('welcome/add_appointment'); ?>" class="btn btn-default"> Add Appointment</a>
        </div>
    </div>
</div>

<hr class="first" style="margin-bottom: 40px; width:101.5%;">
<br>

<div class="container"> 
    <div class="row">
         <div style="width: 70%; margin: auto">
            
            <div class="well text-center">
               <h3 class="panel-title">Add Appointment</h3><br>
               <hr class="third" style="margin-top: 0px">

            <form action="" method="post">

            <div class="col-md-12">

                <div class="col-md-4">
                  <input type='hidden'/>
                  <div class="form-group">
                     <input class="form-control" maxlength="100" name="patient_fname" placeholder="First Name *" type="text" style="width: 230px" />
                        
                  </div>
                  </div>
                  
                  <div class="col-md-4">
                  <input type='hidden'/>
                  <div class="form-group">
                     <input class="form-control" maxlength="100" name="patient_mname" placeholder="Middle Name *" type="text" style="width: 230px"  />
                        
                  </div>
                  </div>

                  <div class="col-md-4">
                  <input type='hidden'/>
                  <div class="form-group">
                     <input class="form-control" maxlength="100" name="patient_lname" placeholder="Last Name *" type="text" style="width: 230px"  />
                        
                  </div>
                  </div>

                </div>

                <div class="col-md-12">

                <div class="col-md-4">
                  <input type='hidden'/>
                  <div class="form-group">
                      <select class="form-control" id="clinic_name" name="clinic_name" placeholder="Gender" type="url" style="color: #888; width: 230px;  margin-top: 8px; height: 33px" />
                        <option selected disabled hidden > Gender</option>
                        <option>Male</option>
                        <option>Female</option> 
                     </select>
                        
                  </div>
                  </div>
                  
                  <div class="col-md-4">
                  <input type='hidden'/>
                  <div class="form-group">
                     <input class="form-control" maxlength="100" name="patient_number" placeholder="Contact Number *" type="text" style="width: 230px" />
                        
                  </div>
                  </div>

                  <div class="col-md-4">
                  <input type='hidden'/>
                  <div class="form-group">
                     <input class="form-control" maxlength="100" name="patient_birthdate" placeholder="Birthdate" type="text" style="width: 230px" />
                        
                  </div>
                  </div>

                </div>

                <div class="col-md-12">

                <div class="col-md-2">
                  <input type='hidden'/>
                  <div class="form-group">
                     <input class="form-control" maxlength="100" name="patient_fname" placeholder="Height (cm) *" type="text" style="width: 105px" />
                        
                  </div>
                  </div>
                  
                  <div class="col-md-2">
                  <input type='hidden'/>
                  <div class="form-group">
                     <input class="form-control" maxlength="100" name="patient_weight" placeholder="Weight (kg) *" type="text" style="width: 105px" />
                        
                  </div>
                  </div>

                </div>

                <div class="col-md-12">

                <div class="col-md-4">
                  <input type='hidden'/>
                  <div class="form-group">
                     <input class="form-control" maxlength="100" name="appt_date" type="date" data-placeholder="Appointment Date" required aria-required="true" style="width: 230px; color: #888; margin-top: 8px; height: 33px" />
                        
                  </div>
                  </div>
                  
                  <div class="col-md-4">
                  <input type='hidden'/>
                  <div class="form-group">
                    <select class="form-control" id="clinic_name" name="clinic_name" placeholder="Appointment Time" type="url" style="color: #888; width: 230px; margin-top: 8px; height: 33px" />                                
                    <option selected disabled hidden > Appointment Time</option>
                                <option name="time">8:00-8:30</option>
                                <option name="relationship">8:30-9:00</option>
                                <option name="relationship">9:00-9:30</option>
                                <option name="relationship">9:30-10:00</option>
                                <option name="relationship">10:00-10:30</option>
                                <option name="relationship">10:30-11:00</option>
                                <option name="relationship">11:00-11:30</option>
                                <option name="relationship">11:30-12:00</option>
                                <option name="relationship">12:30-1:00</option>
                                <option name="relationship">1:00-1:30</option>
                            </select>
                    </div>
                        
        
                  </div>
                </div>

                <div class="col-md-12">

                    <div class="col-md-8">
                    <input type='hidden'/>
                    <div class="form-group">
                        <input class="form-control" maxlength="100" name="Specialization" placeholder="Specialization*" type="text" style="width: 230px" />
                        
                    </div>
                    </div>
                </div>
                  
                        <div class="wrapper">
                            <table id="acrylic">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Schedule</th>
                                        <th>Specialization</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-label="Name">Dr. Meredith Grey</td>
                                        <td data-label="Schedule">M-W 1:30pm - 4:00pm</td>
                                        <td data-label="Specialization">Pediatrician</td>
                                    </tr>
                                    <tr>
                                        <td data-label="Name">Dr. Derek Shepherd</td>
                                        <td data-label="Schedule">M-F 8:30am - 6:00pm</td>
                                        <td data-label="Specialization">Pediatrician</td>
                                    </tr>
                                    <tr>
                                        <td data-label="Name">Dr. Cristina Yang</td>
                                        <td data-label="Schedule">M-W 9:30pm - 5:00pm</td>
                                        <td data-label="Specialization">Pediatrician</td>
                                    </tr>
                                 </tbody>
                            </table>
                        </div>

                <div align="right">
                  <a href="#"><button type="button" class="btn btn-sm btn-primary btn-create">Confirm</button></a>
                </div>

            </form>
            
            </div>
         </div>
         
         
      </div>
</div>