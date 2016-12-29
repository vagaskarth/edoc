<!DOCTYPE html>
<html>
<link rel="stylesheet" href="<?php base_url(); ?>../../css/bootstrap_breadcrumbs.css" type="text/css" />
<link rel="stylesheet" href="<?php base_url(); ?>../../css/bootstrap_min.css" type="text/css" />
<link rel="stylesheet" href="<?php base_url(); ?>../../css/main_menu.css" type="text/css" />
<link rel="stylesheet" href="<?php base_url(); ?> https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="<?php base_url(); ?> https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="<?php base_url(); ?> https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta http-equiv="pragma" content="no-cache" />

<style>

body {
  padding-top: 5px;
  padding-bottom: 40px;
  background-color: #EFEFEF;
  opacity: 5;
}

.menuicon {
  height: 125px;
  border-radius: 6px;
  margin: 20px;
}

.menuicon:hover{
  opacity: 0.6;
}
</style>

<body>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="margin-top: 300px">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign Out</h4>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to proceed?</p>
        </div>
        <div class="modal-footer">
          <button onClick="location.href='<?php echo site_url('welcome/logout');?>'" type="button" class="btn btn-primary">Yes</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
<header>  
  <img src="<?php echo base_url('images/logo.png'); ?>" style="width:115px;height:67px; margin: 7px 30px 7px;" />
</header>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <div class="dropdown">
  <button class="dropbtn"><img src="<?php echo base_url('images/png/menu.png'); ?>" style="width:20px;height:20px;" /></button>
  <div class="dropdown-content">
    <a href="<?php echo site_url('welcome/profile'); ?>">View Profile</a>
    <a data-toggle="modal" data-target="#myModal">Sign Out</a>
  </div>
  </div> 
    </ul>
  </div>
</nav>
</body>
</html>
