<link rel="stylesheet" href="<?php base_url(); ?>css/bootstrap_breadcrumbs.css" type="text/css" />
<link rel="stylesheet" href="<?php base_url(); ?>css/bootstrap_min.css" type="text/css" />
<link rel="stylesheet" href="<?php base_url(); ?>css/main_menu.css" type="text/css" />

<style>
.menuicon {
  height: 125px;
  border-radius: 6px;
  margin: 20px;
}

</style>

<title>Home</title>

<hr style="margin-bottom: 90px; width:101.5%;">
<div class="contain" style="margin: auto;">

&emsp;
<a href="<?php echo site_url('welcome/search_patient'); ?>"><img class="menuicon" src="<?php echo base_url('images/search.png'); ?>"/></a>&emsp;
<a href="<?php echo site_url('welcome/add_new_patient'); ?>"><img class="menuicon" src="<?php echo base_url('images/add.png'); ?>"/></a>&emsp;
<a href="<?php echo site_url('welcome/contact'); ?>"><img class="menuicon" src="<?php echo base_url('images/contact.png'); ?>" /></a>
<br>
<a href="<?php echo site_url('welcome/schedule_n_appointments'); ?>"><img class="menuicon" src="<?php echo base_url('images/schedule.png'); ?>" style="margin-left: 40px"/></a>&emsp;
<a href="<?php echo site_url('welcome/manage_clinic'); ?>"><img class="menuicon" src="<?php echo base_url('images/hospital.png'); ?>" /></a>&emsp;

</div>

