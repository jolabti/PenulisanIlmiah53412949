<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title><?php echo $username;?>-Laboratorium Teknik Informatika</title>
 <meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/stylehomeproject.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css">
    <link rel="shortcut icon" type="text/css" href="<?php echo base_url();?>img/logolabTI.ico"/>


<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
 
</head>
<body>
 
    <!-- menu -->
     
     <header>

        <h1>LABORATORIUM TEKNIK INFORMATIKA</h1>
         <a href="<?php echo site_url('lab_ctr/logout');?>" class="pure-menu-link">LOGOUT</a> 

     </header>
      

    <!-- main article -->

 <div class="content">   
        
          
              <div class="row">

                    <div class="col-sm-6"  >
                       <center >     
                
                       <a href="<?php echo site_url('lab_ctr/dataproyek');?>"><img class="img-rounded" src="<?php echo base_url();?>img/logolabTI.ico">
                       Upload Data Proyek
                       </a>
                       </center>

                    </div>
                   
                    <div class="col-sm-6"> 
                       
                       <center>
                       <a href="#"><img class="img-rounded" src="<?php echo base_url();?>img/logolabTI.ico">
                        Upload Data Asisten

                       </center>

                       </a>
     


                    </div>
                   
                   <a href="<?php echo base_url();?>index.php/lab_ctr/lihatsemua">LIHAT SEMUA</a>
        </div>     
</div>
            <br>

     




 
        

<div class="footer">

<center>
<section><p id="fooug">UNIVERSITAS GUNADARMA</p></section>
<section><p>@ 2015 by GolanDev</p></section>

</center>
 

</div>
 
</body>
</html>