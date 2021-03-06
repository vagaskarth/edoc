<link rel="stylesheet" href="<?php base_url(); ?>css/messaging.css" type="text/css" />  
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<title>Messages</title>

<hr class="first" style="width:101.5%;">
<div class="breadcrumb_container">
    <div class="row">
        <div class="btn-group btn-breadcrumb">
            <a href="<?php echo site_url('welcome/main_menu'); ?>" class="btn btn-default"><img src="<?php echo base_url('images/png/home-icon-silhouette.png'); ?>" style="width:20px;height:20px;" /></a>
            <a href="<?php echo site_url('welcome/contact'); ?>" class="btn btn-default">Contact</a>
            <a href="#" class="btn btn-default">Messages</a>
        </div>
    </div>
</div>

<hr class="first" style="width:101.5%; margin-bottom: 60px;">


<div class="container">
<div class="row inbox">
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-body inbox-menu">                     
                <a href="<?php echo site_url('welcome/messaging'); ?>" class="btn btn-primary btn-block">New Message</a>
                <br>
                <ul style="list-style:none;">
                    <li>
                        <a href="<?php echo site_url('welcome/inbox'); ?>"><i class="fa fa-inbox"></i> Inbox</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('welcome/sent'); ?>"><i class="fa fa-rocket"></i> Sent</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('welcome/trash'); ?>"><i class="fa fa-trash-o"></i> Trash</a>
                    </li>

                </ul>
            </div>  
        </div>
                 
        
    </div><!--/.col-->
    
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-body message">
                <p class="text-center"><strong>New Message</strong></p>
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="to" class="col-sm-1 control-label">To:</label>
                        <div class="col-sm-11">
                              <input type="email" class="form-control select2-offscreen" id="to" placeholder="Recipient" tabindex="-1">
                        </div>
                    </div>
                  
                </form>
                
                    <br>    
                    
                    <div class="form-group">
                        <textarea class="form-control" id="message" name="body" rows="12" placeholder="Click here to compose a message"></textarea>
                    </div>
                    
                    <div class="form-group">    
                        <button type="submit" class="btn btn-success">Send</button>
                        <button type="submit" class="btn btn-danger">Discard</button>
                    </div>
                </div>  
            </div>  
        </div>  
    </div><!--/.col-->      
</div>
</div>