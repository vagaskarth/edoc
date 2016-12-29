<link rel="stylesheet" href="<?php base_url(); ?>../../css/bootstrap_breadcrumbs.css" type="text/css" />
<link rel="stylesheet" href="<?php base_url(); ?>../../css/bootstrap_min.css" type="text/css" />
<link rel="stylesheet" href="<?php base_url(); ?>../../css/main_menu.css" type="text/css" />
<style type="text/css">
  
  td{
    vertical-align: middle!important;
  }
</style>

<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>


<title>Search Patient</title>

<hr class="first" style="width:101.5%;">
<div class="breadcrumb_container">
    <div class="row">
        <div class="btn-group btn-breadcrumb">
            <a href="<?php echo site_url('welcome/main_menu'); ?>" class="btn btn-default"><img src="<?php echo base_url('images/png/home-icon-silhouette.png'); ?>" style="width:20px;height:20px;" /></a>
            <a href="#" class="btn btn-default">Search Patient Record</a>
        </div>
    </div>
</div>

<hr class="first" style="margin-bottom: 60px; width:101.5%;">

<div class="col-sm-6 col-sm-offset-3"> 
  <form method="get" action="<?= $_SERVER['PHP_SELF']?>">
    <div class="form-group">
    <label>Search patient</label>
    <input type="text" class="form-control" name="q" />
  </div>
  </form>
      <table class="table">
        
          <thead>
            
            <tr class="info">
              <td>Last name</td>
              <td>First name</td>
              <td>Gender</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
            <?php if(empty($patients)):?>
                <tr> <td colspan="4" class="text-center">Search for a patient</td></tr>
            <?php endif;?>
            <?php foreach($patients As $row):?>
                <tr>
                  
                  <td><?= $row['lname']?></td>
                  <td><?= $row['fname']?></td>
                  <td><?= $row['gender']?></td>
                  <td><a href="<?= site_url("welcome/view_patient_profile?id={$row['id']}")?>" class="btn btn-info btn-sm">View</button></a>
            <?php endforeach;?>
          </tbody>
      </table>
</div>

