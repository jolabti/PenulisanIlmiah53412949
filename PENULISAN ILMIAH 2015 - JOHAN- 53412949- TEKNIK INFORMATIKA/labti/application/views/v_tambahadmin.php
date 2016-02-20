<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>LABTI-Tambah Admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/navbar.css"/>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css"/>
 <title><?php echo $title;?></title>	 
</head>


<body>



 <header>
		<img src="<?php echo base_url();?>img/headerpsd.png "></img>
		<section>HI, <?php echo $username;?></section>
					<div class="pure-menu pure-menu-horizontal">
				    <ul class="pure-menu-list">
				        <li class="pure-menu-item pure-menu-selected"><a href="<?php echo base_url();?>index.php/lab_ctr/index" class="pure-menu-link">HOME</a></li>
			        <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
			            <a href="#" id="menuLink1" class="pure-menu-link">CONFIG</a>
			            <ul class="pure-menu-children">
			                <li class="pure-menu-item"><a href="<?php echo site_url('lab_ctr/logout');?>" class="pure-menu-link">LOGOUT</a></li>
			                 
			            </ul>
			        </li>
			    </ul>
			</div>


	<ul>
		<li><a class="glidebutton" href="<?php echo base_url();?>index.php/lab_ctr/index"><span data-text="HOME">HOME</span></a></li>
		<li><a class="glidebutton" href="<?php echo base_url();?>index.php/lab_ctr/ctrprofilmu"><span data-text="PROFILMU">PROFILMU</span></a></li>
		<li><a class="glidebutton" href="#"><span data-text="TAMBAH ADMIN">TAMBAH ADMIN</span></a></li>
		<li><a class="glidebutton" href="URL Tujuan"><span data-text="PRAKTIKUM">PRAKTIKUM</span></a></li>
		<li><a class="glidebutton" href="<?php echo base_url();?>index.php/lab_ctr/ctrpenilaian"><span data-text="PENILAIAN">PENILAIAN</span></a></li>
		<li><a class="glidebutton" href="URL Tujuan"><span data-text="PELAYANAN">PELAYANAN</span></a></li>
		<li><a class="glidebutton" href="URL Tujuan"><span data-text="HIGHLIGHT">HIGHLIGHT</span></a></li>
		<li><a class="glidebutton" href="<?php echo site_url('lab_ctr/logout');?>"><span data-text="LOGOUT">LOGOUT</span></a></li>
   </ul> 
 </header> 
	
	<div id="konten">
		<fieldset>

		<form class="pure-form-stacked" method="post" action="">
		<div class="pure-control-group">
		<input type="text" placeholder="NPM" name="npm" >
		<br>

		</div>
		<div class="pure-control-group">
		
		<input type="text" placeholder="NAMA" name="nama" >
		<br>
		
		</div>
		<div class="pure-control-group">
		
		<input type="text" placeholder="KELAS" name="kelas" >
		<br>
		</div>
		
		<div class="pure-control-group">
		
		<input type="text" placeholder="CATATAN" name="catatan" >
		<br>
		</div>

		<div class="pure-control-group">
		

		<input type="date" placeholder="CATATAN" name="tanggal" >
		<br>
		<input type="checkbox" value="ada" name="ada" >Surat Keterangan</input>

		</div> 
		<br>


		<div class="pure-control-group">
			Praktikum : 
			<select name="praktikum">

			<option>AP2</option>
			<option>MYOB</option>
			<option>GRAFKOM 1</option>
			<option>GRAFKOM 2</option>
			<option>JARKOM</option>
			<option>PEMROGRAMAN JARINGAN</option>
			<option active>IMK</option>
			<option>SISMUL</option>
			<option>PAA</option>
			<option>PKB</option>
			 </select>

		</div>
		<input type="submit" value="SUBMIT" class="pure-button pure-button-primary">
		
	
	
		<a href="#" class="pure-button pure-button-secondary">BACK TO HOME</a>
		
	 
		</form>		
		 
		</fieldset>
	</div>

	 
 	 
 	<div id="footer">
	
	 

	</div>


 	 
 	 
</body>
</html>