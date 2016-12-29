<link rel="stylesheet" href="<?php base_url(); ?>../../css/bootstrap_breadcrumbs.css" type="text/css" />
<link rel="stylesheet" href="<?php base_url(); ?>../../css/bootstrap_min.css" type="text/css" />
<link rel="stylesheet" href="<?php base_url(); ?>../../css/main_menu.css" type="text/css" />

<title>Search Physician</title>

<hr class="first" style="width:101.5%;">
<div class="breadcrumb_container">
    <div class="row">
        <div class="btn-group btn-breadcrumb">
            <a href="<?php echo site_url('welcome/patient_menu'); ?>" class="btn btn-default"><img src="<?php echo base_url('images/png/home-icon-silhouette.png'); ?>" style="width:20px;height:20px;" /></a>
            <a href="#" class="btn btn-default">Search Physician</a>
        </div>
    </div>
</div>

<hr class="first" style="margin-bottom: 60px; width:101.5%;">

<div class="col-sm-6 col-sm-offset-3"> 
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search Physician" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <img src="<?php echo base_url('images/png/musica-searcher.png'); ?>" style="width:12px;height:12px; margin: 3px 30px 3px;" />
                        </button>  
                    </span>
            	</div>
</div>

