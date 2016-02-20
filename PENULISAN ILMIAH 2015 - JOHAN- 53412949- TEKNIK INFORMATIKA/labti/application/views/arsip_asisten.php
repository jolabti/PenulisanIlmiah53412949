<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <script language=JavaScript> var message="Function Disabled!"; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false") </script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
 



      <?php

      if($dispstat==1){

        $userIndicator="Praktikan";
		$readonlymarker="readonly";
      }

      else if($dispstat==2){

          $userIndicator="ASISTEN/STAFF";
		  $readonlymarker="";	
		  $dispnpm="";
		  $dispnama="";
	  }


      ?>




    <title><?php echo ucfirst($userIndicator);?> - LABTI DOCUMENTATION</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

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
      <a class="navbar-brand" href="#">LAB-TI <?php echo $username;?>  </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	<!-- tambahin class="active" disini jo -->	
            <li><a href="<?php echo base_url();?>index.php/lab_ctr/c_viewproyek">PROYEK <span class="sr-only">(current)</span></a></li>
          	<li><a href="<?php echo base_url();?>index.php/lab_ctr/c_viewasisten">ASISTEN<span class="sr-only">(current)</span></a></li>
            <li><a href="#">BAAK<span class="sr-only">(current)</span></a></li>
      
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url('lab_ctr/logout');?>">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron">
	<div class="container">
<h2 align="center">LABORATORIUM TEKNIK INFORMATIKA</h2>
	</div>
</div>

 <div class="jumbotron2"> 
 <div class="row">
   <div class="col-md-3"> </div>


   <div align="center" class="col-md-6" >
		  <?php echo $error; ?>
          <?php echo form_open_multipart('lab_ctr/asisten_upload'); ?>
        
        <div class="form-group">
        <label for="nid">ID ASISTEN</label>
        <input type="text" name="nid" class="form-control" id="nid" placeholder="no.id">
        </div>
		
		<div class="form-group">
        <label for="nama">NAMA ASISTEN</label>
        <input type="text" name="nama" class="form-control" id="nama" placeholder="Ketik nama lengkap">
        </div>
		
		<div class="form-group">
        <label for="alamat">ALAMAT</label>
        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat lengkap">
        </div>

        <div class="form-group">
        <label for="portofolio">PORTOFOLIO</label>
        <textarea class="form-control" rows="7" id="portofolio" name="portofolio" placeholder="Portofolio..."></textarea> 

        </div>

        <div class="form-group">
        <label for="email">E-MAIL</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="ex:xxx@xxx.com"  ><br>
   
        </div>

         
        <div class="form-group">
        <label for="linksocmed">LINK SOCIAL MEDIA</label>
        <input type="text" class="form-control" name="linksocmed"   placeholder="http://..." <?php $readonlymarker;?> ><br>
 
        </div>

        <div class="form-group">
        <label for="kontak">KONTAK</label>
        <input type="text" class="form-control" name="kontak"   placeholder="kontak"   ><br>
 
		  
 
        </div>
		
		
		<div class="form-group">
             JABATAN STRUKTURAN
			<select name="jabatanstruktural" class="form-control">
				
				<option>ASISTEN</option>
				<option>ASISTEN TETAP</option>
				<option>STAFF</option>
				
              
			
			</select>           
         
      
       </div>

         

        <div class="form-group">
        <label for="tahunmasuk">TAHUN MASUK</label>
        
		<select   name="tahunmasuk" class="form-control" id="tahunmasuk" >
		
		<?php for($i=1970;$i<=2100;$i++){?>
		
		<?php
		
			echo "<option>";
			echo $i;
			
			echo "</option>";
			
		
		?>
		
		
		<?php }?>
		</select>
		<br>
   
        </div>
      

        <div class="form-group">
         UPLOAD PHOTO 
            <input type="file" name="userfile" size="20" class="form-control"/>
        <br>
        <p class="help-block">max 2MB</p>
       </div>
       
     <button type="submit" class="btn btn-success">SAVE</button>
    </form>


   <div class="col-md-3"></div>

    
 
</div>
</div>
</div>

   <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
      <div class="container">
          <div class="navbar-text pull-left">

            <span><p>@LABORATORIUM TEKNIK INFORMATIKA-2015</p></span>
          </div>

      </div>
   </div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
