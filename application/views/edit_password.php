<link rel="stylesheet" href="<?php base_url(); ?>css/bootstrap_breadcrumbs.css" type="text/css" />
<link rel="stylesheet" href="<?php base_url(); ?>css/main_menu.css" type="text/css" />
<meta http-equiv="pragma" content="no-cache" />

<hr class="first" style="width:101.5%;">

<div class="breadcrumb_container">
    <div class="row">
        <div class="btn-group btn-breadcrumb">
            <a href="<?php echo site_url('welcome/main_menu'); ?>" class="btn btn-default"><img src="<?php echo base_url('images/png/home-icon-silhouette.png'); ?>" style="width:20px;height:20px;" /></a>
            <a href="#" class="btn btn-default"> My Profile</a>
        </div>
    </div>
</div>

<hr class="first" style="margin-bottom: 60px; width:101.5%;">

<div class="container2">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="<?php echo base_url('images/doctor-female.png'); ?>" style="height:75px; margin: auto;" /></td>
    <td ><p class="fullname"> Meredith Grey</p>
    <p style="font-weight: bold; font-size: 12px"> MD </p>
    </td>

  </tr>
</table>

<hr class="third">

<label> Old Password </label><br>
  <input type="text" name="oldpass"> <br>
<label>New Password</label><br>
<input type="text" name="newpass"><br>
  <label>Confirm New Password</label><br>
  <input type="text" name="confirmpass">

</div>