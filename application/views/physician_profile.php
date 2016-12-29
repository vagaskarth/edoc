<link rel="stylesheet" href="<?php base_url(); ?>css/bootstrap_breadcrumbs.css" type="text/css" />
<link rel="stylesheet" href="<?php base_url(); ?>css/main_menu.css" type="text/css" />
<meta http-equiv="pragma" content="no-cache" />

<title>My Profile</title>

<hr class="first" style="width:101.5%;">

<div class="breadcrumb_container">
    <div class="row">
        <div class="btn-group btn-breadcrumb">
            <a href="<?php echo site_url('welcome/main_menu'); ?>" class="btn btn-default"><img src="<?php echo base_url('images/png/home-icon-silhouette.png'); ?>" style="width:20px;height:20px;" /></a>
            <a href="#" class="btn btn-default"> My Profile</a>
        </div>
    </div>
</div>

<hr class="second" style="width:101.5%;">
<br>


<div class="container2">


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="<?php echo base_url('images/doctor-female.png'); ?>" style="height:75px; margin: auto;" /></td>
    <td ><p class="fullname"> <?php echo $physician["Fname"]." ".$physician["Lname"]?></p>
    <p style="font-weight: bold; font-size: 12px"> MD </p>
    <a href="<?php echo site_url('welcome/edit_password'); ?>"><p style="font-size: 12px; text-decoration: underline"> Change password </p></a>
    </td>
    <td> <a href="#"> <p style="color: #1D9DE2; text-decoration: underline; font-size: 12px; padding-bottom: 45px;"> Edit </p> </a></td>
  </tr>
</table>

<hr class="third">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="font2"><strong> Main Specialty: </strong></td>
    <td class="font2"> <?php echo $physician["Specialization"] ?></ </td>
  </tr>

   <tr>
    <td class="font2"><strong> Subspecialty: </strong></td>
    <td class="font2"> Transplant Surgery 
    <br> 
    Vascular Medicine</td>
  </tr>
</table>

<hr class="third">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="font2"><strong> Birthdate </strong></td>
    <td class="font2"><?php echo date_create($physician["Bday"])->format("F d, Y") ?> </td>
  </tr>

  <tr>
    <td class="font2"><strong> Nationality </strong></td>
    <td class="font2"> Filipino </td>
  </tr>
  <tr>
    <td class="font2"><strong> Home Address </strong></td>
    <td class="font2"> Aguila St. Consolacion </td></tr>
  <tr>
    <td class="font2"><strong> Home Address </strong></td>
    <td class="font2"> Aguila St. Consolacion </td></tr>
  <tr>
    <td class="font2"><strong> Contact number </strong></td>
    <td class="font2"> 09175788342 </td></tr>
   <tr>
    <td class="font2"><strong> Email Address </strong></td>
    <td class="font2"> meridethgrey@gmail.com </td>
  </tr>
</table>

<hr class="third">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="font2"><strong> Medical School </strong></td>
    <td class="font2"> Cebu Institute of Medicine </td>
  </tr>
  <tr>
    <td class="font2"><strong> Residency </strong></td>
    <td class="font2"> Philippine General Hospital </td></tr>
  <tr>
    <td class="font2"><strong> PRC Number </strong></td>
    <td class="font2"> 38526 </td></tr>
  <tr>
    <td class="font2"><strong> PTR Number </strong></td>
    <td class="font2"> 1378 </td></tr>
</table>


</div>