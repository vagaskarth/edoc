<link rel="stylesheet" href="<?php base_url(); ?>css/bootstrap_breadcrumbs.css" type="text/css" />
<link rel="stylesheet" href="<?php base_url(); ?>css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="<?php base_url(); ?>css/main_menu.css" type="text/css" />
<meta http-equiv="pragma" content="no-cache" />

<title>Dashboard</title>

<hr class="first" style="width:101.5%;">

<div class="breadcrumb_container">
    <div class="row">
        <div class="btn-group btn-breadcrumb">
            <a href="<?php echo site_url('welcome/main_menu'); ?>" class="btn btn-default"><img src="<?php echo base_url('images/png/home-icon-silhouette.png'); ?>" style="width:20px;height:20px;" /></a>
            <a href="<?php echo site_url('welcome/contact'); ?>" class="btn btn-default">Contact</a>
            <a href="<?php echo site_url('welcome/contact/composemsg'); ?>" class="btn btn-default">Dashboard</a>
        </div>
    </div>
</div>

<hr class="first" style="width:101.5%; margin-bottom: 50px;">

<div class="container">
<div class="row inbox">

    <div class="col-md-2">
    </div><!--/.col-->
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-body message">
                <p class="text-center"><strong>Dashboard</strong></p>
                
                    <br>    
                    
                    <div class="form-group">
                        <textarea class="form-control" id="message" name="body" rows="12" placeholder="Input message here"></textarea>
                    </div>
                      <div class="alert alert-danger">
                        <strong>Caution!</strong> The message you are about to post will be visible to your patients.
                      </div>
                    <div class="form-group">    
                        <button type="submit" class="btn btn-success">Post</button>
                        <button type="submit" class="btn btn-danger">Discard</button>
                    </div>
                </div>  
            </div>  
        </div>  
    </div><!--/.col-->  
 </div>