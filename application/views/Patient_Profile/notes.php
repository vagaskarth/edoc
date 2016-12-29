<link rel="stylesheet" href="<?php base_url(); ?>css/bootstrap_breadcrumbs.css" type="text/css" />
<link rel="stylesheet" href="<?php base_url(); ?>css/main_menu.css" type="text/css" />
<link rel="stylesheet" href="<?php base_url(); ?>css/form2.css" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<meta http-equiv="pragma" content="no-cache" />

<title>Patient Profile - Notes</title>

<style type="text/css">

th { text-align: center;
    }
th:hover {
    background-color: #D3D3D3;
}

</style>

<hr class="first" style="width:101.5%;">

<div class="breadcrumb_container">
    <div class="row">
        <div class="btn-group btn-breadcrumb">
            <a href="<?php echo site_url('welcome/patient_menu'); ?>" class="btn btn-default"><img src="<?php echo base_url('images/png/home-icon-silhouette.png'); ?>" style="width:20px;height:20px;" /></a>
            <a href="#" class="btn btn-default"> My Profile</a>
        </div>
    </div>
</div>

<hr class="first" style="width:101.5%;">
<br>
<div class="container">
Patient Name: <br>
Birthdate: <br>
Gender: <br>
Blood Type: <br>
</div>
<br><br><br>
            <div class="container" style="width:1000px;">
                <div class="row">
                  <div class="board">

                    <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><a href="<?php echo site_url('welcome/patient_profile'); ?>" style="display:block; text-decoration:none;">Patient Profile</a></th>
                        <th><a href="<?php echo site_url('welcome/notes'); ?>" style="display:block; text-decoration:none;">Notes</a></th>
                        <th><a href="<?php echo site_url('welcome/eprescription'); ?>" style="display:block; text-decoration:none;">E-Prescription</a></th>
                        <th><a href="<?php echo site_url('welcome/medical_record'); ?>" style="display:block; text-decoration:none;">Medical Record</a></th>
                        <th><a href="<?php echo site_url('welcome/recent_visits'); ?>" style="display:block; text-decoration:none;">Recent Visits</a></th>
                    </tr> 
                  </thead>
                  <tbody>

                          <tr>
                            <td colspan="5">
                                <strong>Vitals</strong>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="4">
                                Vitals
                            </td>
                            <td colspan="1" style="text-align: center;">
                                <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                            </td>
                          </tr>

                          <tr>
                            <td colspan="5">
                                <strong>Patient Notes</strong>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="4">
                                Patient Notes
                            </td>
                            <td colspan="1" style="text-align: center;">
                                <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                            </td>
                          </tr>
                        </tbody>
                </table>
                  </div>
                </div>
            </div>

</div>