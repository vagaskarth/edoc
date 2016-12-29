<link rel="stylesheet" href="<?php base_url(); ?>css/bootstrap_breadcrumbs.css" type="text/css" />
<link rel="stylesheet" href="<?php base_url(); ?>css/main_menu.css" type="text/css" />
<meta http-equiv="pragma" content="no-cache" />

<title>Schedule and Appointments</title>

<style>
.menuicon {
  height: 125px;
  border-radius: 6px;
  margin: 19px;
}


</style>

<hr class="first" style="width:101.5%;">

<div class="breadcrumb_container">
    <div class="row">
        <div class="btn-group btn-breadcrumb">
            <a href="<?php echo site_url('welcome/main_menu'); ?>" class="btn btn-default"><img src="<?php echo base_url('images/png/home-icon-silhouette.png'); ?>" style="width:20px;height:20px;" /></a>
            <a href="#" class="btn btn-default">Schedule and Appointments</a>
        </div>
    </div>
</div>

<hr class="first" style="margin-bottom: 60px; width:101.5%;">

<div class="contain">
<a href="<?php echo site_url('welcome/personal_schedule'); ?>"><img class="menuicon" src="<?php echo base_url('images/personal-sched.png'); ?>"/></a>&emsp;
<a href="<?php echo site_url('welcome/daily_appointments'); ?>"><img class="menuicon" src="<?php echo base_url('images/daily-appts.png'); ?>"/></a>&emsp;	
<br>
<a href="<?php echo site_url('welcome/manage_appointments'); ?>"><img class="menuicon" src="<?php echo base_url('images/manage-appts.png'); ?>"/></a>&emsp;
<a href="<?php echo site_url('welcome/add_appointment'); ?>"><img class="menuicon" src="<?php echo base_url('images/add-appts.png'); ?>"/></a>&emsp;


</div>