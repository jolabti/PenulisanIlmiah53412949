<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta charset="utf-8">
	<title>LABORATORIUM TEKNIK INFORMATIKA -2015</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/slider.css"/>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap-theme.css"/> 
	 <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	 <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
 
	<link rel="shortcut icon" type="text/css" href="<?php echo base_url();?>img/logolabTI.ico"/>
 
 <script language=JavaScript> var message="Right Click is Not Allowed!"; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false") </script>
</head>

<body>

 

	<header>

		<img src="<?php echo base_url();?>img/headerpsd.png"></img>

	</header>

	<div id="konten">
	 
	    <fieldset>
	        <legend>LOGIN ASISTEN
	        		 <br>	
	        		 Sistem Dokumentasi Laboratorium Teknik Informatika

	        </legend> 



         
 	 			
 	 				<center><fieldset><p><?php echo validation_errors(); ?></p> </fieldset></center>  
 	 			
 	 		 

 	 			<?php $attributes = array('class' => 'pure-form pure-form-stacked');?>

	   <?php echo form_open('verifylogin2', $attributes); ?>

	     <label for="username">Username:</label>

	     <input type="text" size="20" id="username" name="username"/>
 
	     <br>
	     <label for="password">Password:</label>

	     <input type="password" size="20" id="password" name="password"/>

	     

	     <input class="pure-button pure-button-primary" type="submit" value="Login"/>
		 

		 <a id="signupbutton" href="<?php echo site_url('lab_ctr/signupform')?>">SIGNUP ?</a>
	     

	      

	   </form>
	   
        
	         
	        

	         
	    </fieldset>
	    <br>
		<div class="container-fluid">
		  
		  <div class="row">
		    <div class="col-sm-4" style="background-color:#aa1111;"><center><a id="dasar" href="http://ti-dasar.lab.gunadarma.ac.id/">LABTI-DASAR</a></center></div>
		    <div class="col-sm-4" style="background-color:#bcdea1;"><center><a id="tengah" href="http://ti-menengah.lab.gunadarma.ac.id/">LABTI-MENENGAH</a> </center></div>
		    <div class="col-sm-4" style="background-color:#aaa612;"><center><a id="lanjut" href="http://ti-lanjut.lab.gunadarma.ac.id/"> LABTI-LANJUT</a></center></div>
		  </div>

		  
		   
		 
		</div>

		 		    <div ><center><a class="btn btn-primary" id="dasar" href="<?php echo base_url();?>index.php/lab_ctr/goToLoginPraktikan">LOGIN PRAKTIKAN</a></center></div>
	    <marquee>STAFF LABORATORIUM TEKNIK INFORMATIKA Gd E.544</marquee>
	    	 
 	</div>
 

 	 
 	 
</body>
</html>