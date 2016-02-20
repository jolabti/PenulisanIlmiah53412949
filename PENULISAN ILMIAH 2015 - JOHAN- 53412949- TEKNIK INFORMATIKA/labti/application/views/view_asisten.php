<!DOCTYPE html>
<html lang="en" ng-app="app">
  <head>
    <meta charset="utf-8">
    <script language=JavaScript> var message="Function Disabled!"; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false") </script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <script src="<?php echo base_url();?>js/angular.min.js"></script>
    
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    
    




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
          	<li><a href="<?php echo base_url();?>/index.php/lab_ctr/c_viewasisten">ASISTEN<span class="sr-only">(current)</span></a></li>
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

 <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
            </div>
            

  
</div>

 <div class="jumbotron2"> 
 <div class="row">
   <div class="col-md-3"> </div>


   <div align="center"   >

	     
       <div ng-controller="decontroller">
          <table class="table table-border table-striped table-hover" >   
              <thead>
                  <tr>

                      <th>ID_ASISTEN</th>
                      <th>NAMA</th>
                      <th>ALAMAT</th>
                      <th>PORTOFOLIO</th>
                      <th>EMAIL</th>
                      <th>LINK SOCIAL MEDIA</th>
                      <th>KONTAK</th>
                      <th>JABATAN TERAKHIR</th>
                      <th>TAHUN MASUK</th>
					  <th>GAMBAR</th>
                      

                  </tr> 

              </thead>


           <tbody>
                  <tr ng-repeat="a in list_asisten | filter: q as results">

                      <th>{{ a.id_asisten }}</th>
                      <th>{{ a.nama_asisten}}</th>
                      <th>{{ a.alamat}}</th>
                      <th>{{ a.portofolio}}</th>
                      <th>{{ a.email}}</th>
                      <th>{{ a.linksocmed}}</th>
                      <th>{{ a.kontak}}</th>
                      <th>{{ a.jabatan_struktural}}</th>
                      <th >{{ a.tahun_masuk }}</th>
					  <th> <img class="img-circle img-thumbnail"    ng-src="<?php echo base_url();?>kumpulanAsisten/{{ a.filename_photo}}"> </th>

                      

                  </tr> 

              </tbody>
                







          </table>


       </div>        

    <script type="text/javascript">

      var app=angular.module('app',[]);

        app.controller('decontroller',function($scope,$http){

          $scope.list_asisten=[];
          $http.get("<?php echo site_url('lab_ctr/ajax_data_asisten');?>").success(function(result){

                  $scope.list_asisten=result;

            });


        });

    </script>




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
