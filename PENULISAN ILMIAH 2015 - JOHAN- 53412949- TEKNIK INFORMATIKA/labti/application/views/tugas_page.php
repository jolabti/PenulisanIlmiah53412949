<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <script language=JavaScript> //var message="Function Disabled!"; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false") </script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <script src="<?php echo base_url();?>js/jquery.js"></script> 
     <script src="<?php echo base_url();?>js/aksi.js"></script> 



    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
 



      <?php

      if($dispstat==1){

        $userIndicator="Praktikan";
		$readonlymarker="readonly";

  //  $dispid=$dispnpm;  


      }

      else if($dispstat==2){

          $userIndicator="ASISTEN/STAFF";
		  $readonlymarker="";	
		 // $dispnpm="";
		//  $dispnama="";

      $dispid=$dispnip;
	  }


      ?>




    <title><?php echo    $username;?> - LABTI DOCUMENTATION</title>

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
		  <?php echo $error;

      $attribut=array('id'=>'uploadForm');

       ?>
          <?php echo form_open_multipart('lab_ctr/do_upload', $attribut); ?>
        
        <div class="form-group">
        <label for="judulTugas">Judul</label>
        <input type="text" name="judul" class="form-control" id="judulTugas" placeholder="Judul Tugas">
        </div>

        <div class="form-group">
        <label for="npm">ID PRAKTIKUM</label>
        <input type="text" class="form-control" id="npm" name="id_praktikum"  placeholder="sesuai data krs" ><br>
   
        </div>

        <div class="form-group">
        <label for="npm">PRAKTIKUM</label>
		<select name="nama_praktikum" class="form-control">
		
			<option> ALGORITMA DAN PEMROGRAMAN 2  </option>
			<option> SISTEM INFORMASI AKUNTANSI  </option>
			<option> SISTEM BASIS DATA 1  </option>
			<option> SISTEM BASIS DATA 2  </option>
			<option> PENGANTAR KECERDASAN BUATAN  </option>
			<option> PERANCANGAN ANALISIS ALGORITMA  </option>
			<option> SISTEM INFORMASI  </option>
			<option> JARINGAN KOMPUTER  </option>
			<option> GRAFKOM 1  </option>
			<option> GRAFKOM 2  </option>
			<option> JARINGAN KOMPUTER LANJUT </option>
			<option> PEMROGRAMAN JARINGAN  </option>
			<option> PEMROGRAMAN WEB </option>
			<option> REKAYASA PERANGKAT LUNAK 2  </option>
			<option> SISTEM MULTIMEDIA  </option>
		
		</select>
		
         
        </div>

         
        <div class="form-group">
        <label for="exampleInputPassword1">NAMA PRAKTIKAN</label>
        <input type="text" class="form-control" name="nama_praktikan"   value="<?php  echo $namaprak;?>"  ><br>
 
        </div>

        <div class="form-group">
        <label for="exampleInputPassword1">DESKRIPSI :min 100 kata</label>
         <textarea class="form-control" rows="7" id="portofolio" name="deskripsi" placeholder="Portofolio..."></textarea> 

		 <br>
 
        </div>

         

        <div class="form-group">
        <label for="exampleInputPassword1">NPM </label>
        <input type="text" name="npm" class="form-control" id="exampleInputPassword1"> <br>
   
        </div>

        <div class="form-group">
        <label for="exampleDate">TANGGAL</label>
        <input type="text" name="datethis" class="form-control" id="exampleDate" value="<?php echo date("Y/m/d");?>" readonly><br>
   
        </div>
 
 

        <div class="form-group">
        <label for="exampleInputPassword1">KELAS</label>
        <select name="kelas" class="form-control" id="exampleInputPassword1" placeholder="Masukkan kelas">

          <option>1IA01</option>
          <option>1IA02</option>
          <option>1IA03</option>
          <option>1IA04</option>
          <option>1IA05</option>
          <option>1IA06</option>
          <option>1IA07</option>
          <option>1IA08</option>
          <option>1IA09</option>
          <option>1IA10</option>
          <option>1IA11</option>
          <option>1IA12</option>
          <option>1IA13</option>
          <option>1IA14</option>
          <option>1IA15</option>
          <option>1IA16</option>
          <option>1IA17</option>

              <option>2IA01</option>
              <option>2IA02</option>
              <option>2IA03</option>
              <option>2IA04</option>
              <option>2IA05</option>
              <option>2IA06</option>
              <option>2IA07</option>
              <option>2IA08</option>
              <option>2IA09</option>
              <option>2IA10</option>
              <option>2IA11</option>
              <option>2IA12</option>
              <option>2IA13</option>
              <option>2IA14</option>
              <option>2IA15</option>
              <option>2IA16</option>
              <option>2IA17</option>


          <option>3IA01</option>
          <option>3IA02</option>
          <option>3IA03</option>
          <option>3IA04</option>
          <option>3IA05</option>
          <option>3IA06</option>
          <option>3IA07</option>
          <option>3IA08</option>
          <option>3IA09</option>
          <option>3IA10</option>
          <option>3IA11</option>
          <option>3IA12</option>
          <option>3IA13</option>
          <option>3IA14</option>
          <option>3IA15</option>
          <option>3IA16</option>
          <option>3IA17</option>




                      <option>4IA01</option>
                      <option>4IA02</option>
                      <option>4IA03</option>
                      <option>4IA04</option>
                      <option>4IA05</option>
                      <option>4IA06</option>
                      <option>4IA07</option>
                      <option>4IA08</option>
                      <option>4IA09</option>
                      <option>4IA10</option>
                      <option>4IA11</option>
                      <option>4IA12</option>
                      <option>4IA13</option>
                      <option>4IA14</option>
                      <option>4IA15</option>
                      <option>4IA16</option>
                      <option>4IA17</option>      
        </select>  
        </div>


        

        <div class="form-group">
         UPLOAD TUGAS 
            <input type="file" name="userfile" size="20" />
        <br>
        <p class="help-block">#Dijadikan rar</p>
       </div>

        






        <div class="form-group">
             PENANGGUNG JAWAB 
 


        <select name="listAsisten" class="form-control">
                  <?php 
         if(is_array($query)){ 
                   
            foreach($query as $qshow){

              echo "<option>";

              echo $qshow->nama;

              echo "</option>";





            }

}
                   ?>
              
        </select>           

          
     
          
      
       </div>

          

        
      
      <input type="submit" class="btn btn-success btn-large"> </input>
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
