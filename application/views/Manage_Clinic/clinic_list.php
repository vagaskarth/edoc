<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clinic List</title>

        <link rel="stylesheet" href="<?php base_url(); ?>../../css/bootstrap_breadcrumbs.css" type="text/css" />
        <link rel="stylesheet" href="<?php base_url(); ?>../../css/bootstrap_min.css" type="text/css" />
        <link rel="stylesheet" href="<?php base_url(); ?>../../css/main_menu.css" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>


    <style type="text/css">
        th {text-align: center}
        h3 {font-size: 15px; 
            font-weight: bold}
    </style>


<hr class="first" style="width:101.5%;">
<div class="breadcrumb_container">
    <div class="row">
        <div class="btn-group btn-breadcrumb">
            <a href="<?php echo site_url('welcome/main_menu'); ?>" class="btn btn-default"><img src="<?php echo base_url('images/png/home-icon-silhouette.png'); ?>" style="width:20px;height:20px;" /></a>
            <a href="<?php echo site_url('welcome/manage_clinic'); ?>" class="btn btn-default">Manage Clinic</a>
            <a href="<?php echo site_url('welcome/clinic_list'); ?>" class="btn btn-default">Clinic List</a>
        </div>
    </div>
</div>
<hr class="first" style="margin-bottom: 60px; width:101.5%;">
<br>

<div class="container" style="width: auto">
    <div class="row">
    

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Clinic List</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="<?php echo site_url('welcome/add_clinic'); ?>"><button type="button" class="btn btn-sm btn-primary btn-create">Add Clinic</button></a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th class="hidden-xs">Clinic ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th style="width: 200px">Contact Number</th>
                        <th style="width: 150px"><em class="fa fa-cog"></em></th>
                    </tr> 
                  </thead>
                  <tbody>
                          <tr>
                            <td class="hidden-xs"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td align="center">
                              <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                          </tr>

                          <tr>
                            <td class="hidden-xs"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td align="center">
                              <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                          </tr>

                          <tr>
                            <td class="hidden-xs"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td align="center">
                              <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                          </tr>

                          <tr>
                            <td class="hidden-xs"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td align="center">
                              <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                          </tr>

                          <tr>
                            <td class="hidden-xs"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td align="center">
                              <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                          </tr>
                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4">Page 1 of 5
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div></div></div>