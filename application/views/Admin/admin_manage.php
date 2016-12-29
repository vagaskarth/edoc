<link rel="stylesheet" href="<?php base_url(); ?>../../css/bootstrap_breadcrumbs.css" type="text/css" />
<link rel="stylesheet" href="<?php base_url(); ?>../../css/bootstrap_min.css" type="text/css" />
<link rel="stylesheet" href="<?php base_url(); ?>../../css/main_menu.css" type="text/css" />


<title>Manage Accounts</title>

<hr class="first" style="width:101.5%;">
<div class="breadcrumb_container">
    <div class="row">
        <div class="btn-group btn-breadcrumb">
            <a href="<?php echo site_url('welcome/admin_menu'); ?>" class="btn btn-default"><img src="<?php echo base_url('images/png/home-icon-silhouette.png'); ?>" style="width:20px;height:20px;" /></a>
            <a href="#" class="btn btn-default">Manage Accounts</a>
        </div>
    </div>
</div>

<hr class="second" style="width:101.5%;">

<div class="contain" style="width: 900px;">

<center><h2><strong>Admin Panel</strong></h2></center>
<br>

<div class="col-sm-5 col-sm-offset-4"> 
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search Record" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <img src="<?php echo base_url('images/png/musica-searcher.png'); ?>" style="width:12px;height:12px; margin: 3px 30px 3px;" />
                        </button>  
                    </span>
            	</div>
</div>

<br>
<br>

   <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Username</th>
        <th>Email Address</th>
        <th>User Type</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>David R</td>
        <td class="center">david@gmail.com</td>
        <td class="center">Physician</td>
        <td class="center">
            <a class="btn btn-success" href="#">
                View
            </a>
            <a class="btn btn-info" href="#">
                Edit
            </a>
            <a class="btn btn-danger" href="#">
                Delete
            </a>
        </td>
    </tr>
    <tr>
        <td>Chris Jack</td>
        <td class="center">chris@yahoo.com</td>
        <td class="center">Patient</td>
        <td class="center">
            <a class="btn btn-success" href="#">
                View
            </a>
            <a class="btn btn-info" href="#">
                Edit
            </a>
            <a class="btn btn-danger" href="#">
                Delete
            </a>
        </td>
    </tr>
    <tr>
        <td>Jack Chris</td>
        <td class="center">jack_notblack@gmail.com</td>
        <td class="center">Patient</td>
        <td class="center">
            <a class="btn btn-success" href="#">
                View
            </a>
            <a class="btn btn-info" href="#">
                Edit
            </a>
            <a class="btn btn-danger" href="#">
                Delete
            </a>
        </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->

</div>