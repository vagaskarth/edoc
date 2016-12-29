<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Manage Appointments</title>

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
            <a href="<?php echo site_url('welcome/schedule_n_appointments'); ?>" class="btn btn-default">Schedule and Appointments</a>
            <a href="#" class="btn btn-default">Manage Appointments</a>
        </div>
    </div>
</div>
<hr class="first" style="width:101.5%; margin-bottom: 60px;"> 
<br>


<div style="margin-left: 100px">

  <div class="col-md-12">
    <div class="col-md-2">
    <div class="form-group">
         <label class="control-label">Date</label>
            <input  maxlength="100" type="date" required="required" class="form-control"/>
    </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
          <label for="status">Status</label>
            <select id="subject" name="gender" class="form-control" required="required" style="width: 225px">
                <option value="na" selected="" selected disabled hidden></option>
                 <option name="status">Scheduled</option>
                 <option name="status">Completed</option>
                 <option name="status">Canceled</option>
              </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group" style="margin-left: 50px">
          <label for="status">Location</label>
            <select id="subject" name="gender" class="form-control" required="required" style="width: 250px">
                <option value="na" selected="" selected disabled hidden></option>
              </select>
        </div>
    </div>

    
  </div>
</div>

<div class="container" style="width: auto">
    <div class="row">
    

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Manage Appointments</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <button type="button" class="btn btn-sm btn-primary btn-create">Add Appointment</button>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th class="hidden-xs">Patient ID</th>
                        <th>Name</th>
                        <th>Time</th>
                        <th>Location</th>
                        <th>Status</th>
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