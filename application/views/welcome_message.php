<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head><title>eDoc</title>   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
 

 <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" type="text/css" />
 <link rel="stylesheet" href="<?php echo base_url(); ?>css/signin.css" type="text/css" />
 

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./Signin Template for Bootstrap_files/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>


    <background img src="<?php echo base_url('images/logo1.png'); ?>" />
    <div class="container"><br><br><br>
    <div class="contain" style="margin:0 auto;">
    <center>  <h2><b><img src="<?php echo base_url('images/logo1.png'); ?>" style="width:220px;height:125px;" /><b><br>
                        </h2> </center> <br>
     <?php if(isset($errors)):  ?>
          <div class="alert alert-danger"> 
              <ul class="list-unstyled">  
                  <li><?= implode($errors, '</li><li>')?> </li>
              </ul>
          </div>
     <?php endif; ?>
   <?php echo form_open('Welcome'); ?>
      <!-- <h2 class="form-signin-heading">Log In</h2> -->
        <label for="inputEmail" class="sr-only">Username</label>
        <input  type="text" id="username" class="form-control" placeholder="username" autofocus="" name = "username" /><br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="password" name = "password" />
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
            <!-- <p><?php if(isset($flag)) echo $flag = "<br><span class= 'text text-error'>Invalid Login! Please Try Again! </span>"; ?></p> -->
          </label>
        </div>
        <input  type="submit"  class="btn btn-lg btn-primary btn-block"name="submit" value = "Log In" /><br>
      <a href="<?php echo site_url('welcome/sign_up'); ?>">Sign Up</a>
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <a href="#">Need Help?</a><br><br>

      </form>
  </div>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Signin Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
  

</body></html>