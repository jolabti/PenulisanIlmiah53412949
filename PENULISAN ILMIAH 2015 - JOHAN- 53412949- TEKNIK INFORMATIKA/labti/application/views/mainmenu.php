<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <script language=JavaScript> var message="Function Disabled!"; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false") </script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">



      <?php

     if($dispstat==1){

        $userIndicator="Praktikan";
        $varenable="###";

      }

      else if($dispstat==2){

          $userIndicator="ASISTEN/STAFF";
          $varenable="goAsistenPage";
          
      }


      ?>




    <title><?php echo ucfirst($userIndicator);?> - LABTI DOCUMENTATION</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url();?>js/easyResponsiveTabs.js"></script>
    <script src="<?php echo base_url();?>js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 
  <body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>index.php/lab_ctr/gotoMainMenu">LAB-TI <?php echo $username;?>  </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	<!-- tambahin class="active" disini jo -->	
        <li><a href="<?php echo base_url();?>index.php/lab_ctr/c_viewproyek"> PROYEK <span class="sr-only">(current)</span></a></li>
	<!--<li><a href="<?php echo base_url();?>index.php/lab_ctr/c_viewasisten">ASISTEN<span class="sr-only">(current)</span></a></li>-->
  
      
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url('lab_ctr/logout')?>">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron">
	<div class="container">
<h2 align="center">LABORATORIUM TEKNIK INFORMATIKA</h2>
	</div>
</div>


<div class="row">
   <div class="col-md-3"> </div>
  <!-- <div align="center" class="col-md-3">
	<a href="<?php //echo base_url();?>index.php/lab_ctr/<?php //echo $varenable;?>"><img width="250" src="<?php echo base_url();?>img/asisten.png" alt="INPUT DATA ASISTEN" class="img-circle img-thumbnail"></a></img><br>
	<h2>ASISTEN</h2>
   </div>
   -->
   <div align="center" class="col-md-6">
	<a href="<?php echo base_url();?>index.php/lab_ctr/gotoTugasPage"><img width="250" src="<?php echo base_url();?>img/tugas.png" alt="" class="img-circle img-thumbnail"></a></img><br>
	<h2>PROYEK</h2>
   </div>
   <div class="col-md-3"></div>

</div>

<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
      <div class="container">
          <div class="navbar-text pull-left">

            <span><p>@LABORATORIUM TEKNIK INFORMATIKA-2015</p></span>
             <span><p>Created by :JOHAN</p></span>
          </div>

      </div>
   </div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
