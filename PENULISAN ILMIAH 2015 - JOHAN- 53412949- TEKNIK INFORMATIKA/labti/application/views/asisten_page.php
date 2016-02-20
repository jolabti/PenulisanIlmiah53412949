<!DOCTYPE html>
<html lang="en" ng-app="app">
  <head>
    <meta charset="utf-8">
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">



      <?php

      if($dispstat==1){

        $userIndicator="Praktikan";
      }

      else if($dispstat==2){

          $userIndicator="ASISTEN/STAFF";
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
            <li><a href="<?php echo base_url();?>index.php/lab_ctr/c_viewproyek"> PROYEK <span class="sr-only">(current)</span></a></li>
          	<li><a href="<?php echo base_url();?>index.php/lab_ctr/c_viewasisten">ASISTEN<span class="sr-only">(current)</span></a></li>
            <li><a href="#">BAAK<span class="sr-only">(current)</span></a></li>
      
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
 <div class="jumbotron2"> 
 <div class="row">
   <div class="col-md-3"> </div>


   <div align="center" class="col-md-6" >
		<?php echo $error; ?>
		
          <?php echo form_open_multipart('lab_ctr/do_upload2'); ?>
        
        <div class="form-group">
        <label for="nid">Nomor Induk Asisten/STAFF</label>
        <input type="text" name="nid" class="form-control" id="nid" placeholder="Judul Tugas">
        </div>

        <div class="form-group">
        <label for="npm">NAMA LENGKAP</label>
        <input type="text" class="form-control" id="nama" name="nama"  placeholder="NAMA LENGKAP" ><br>
   
        </div>

        <div class="form-group">
        <label for="alamat">ALAMAT</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Isi Alamat Lengkap ..."  ><br>
   
        </div>

         
        <div class="form-group">
        </div>
        <label for="portofolio">PORTOFOLIO</label>
        <textarea class="form-control" rows="7" id="portofolio" name="portofolio" placeholder="Portofolio..."></textarea> 

        <div class="form-group">
        <label for="exampleInputPassword1">EMAIL</label>
        <input type="text" class="form-control" name="deskripsi" placeholder="Email..."  ><br>
 
        </div>

         

        <div class="form-group">
        <label for="linksocmed">LINK SOCIAL MEDIA</label>
        <input type="text" name="linksocmed" class="form-control" id="linksocmed" placeholder="http://......."><br>
   
        </div>

		<div class="form-group">
        <label for="kontak">KONTAK</label>
        <input type="text" name="kontak" class="form-control" id="kontak"  placeholder="021-xxxxx or 081xxxxxx"><br>
   
        </div>
		
		
		<div class="form-group">
        <label for="kontak">JABATAN STRUKTURAL</label>
        <select name="jabatanstruktural" id="jabatanstruktural" class="form-control">
		
			<option>ASISTEN</option>
			<option>ASISTEN TETAP</option>
			<option>STAFF</option>
     	
		</select>
		<br>
   
        </div> 
		
		

        <div class="form-group">
        <label for="tahunmasuk">TAHUN MASUK</label>
        <select name="tahunmasuk" id="tahunmasuk" class="form-control">
		
		<?php for ($i=1970;$i<=2100;$i++){ ?>
		
		<?php
			echo "<option>";
			echo $i;
			echo "</option>";
				
		}?>
		
		</select>
        </div>


        

        <div class="form-group">
         UPLOAD PHOTO 
            <input type="file" name="asistenphoto" size="20" />
        <br>
        <span class="help-block">MAX 2MB</span>
        </div>
      
		<input type="submit" class="btn btn-primary" value="UPLOAD"  ></input>
    
	
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
