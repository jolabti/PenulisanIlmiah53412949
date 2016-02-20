<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>LABORATORIUM TEKNIK INFORMATIKA -2015</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css"/>

<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
	 
</head>

<title><?php echo $title;?></title>
<body>


	<header>

		<img src="<?php echo base_url();?>img/headerpsd.png"></img>

	</header>

	<div id ="konten">
		<form class="pure-form pure-form-stacked" method="post" action="<?php echo base_url();?>index.php/lab_ctr/memberbaru">
	    <fieldset>
	        <legend>FORM PENDAFTARAN AT/STAFF</legend>

	        <label for="username">Username</label>
	        <input id="username" type="text" placeholder="username" name="username"/>

	        <label for="password">Password</label>
	        <input id="password" type="password" placeholder="Password" name="password"/>
   
            <label for="nama">Nama</label>
	        <input id="nama" type="text" placeholder="Nama" name="nama"/>

	        <label for="alamat">Alamat</label>
	        <input id="alamat" type="text" placeholder="Alamat" name="alamat"/>

	        <label for="email">Email</label>
	        <input id="email" type="email" placeholder="Email" name="email"/>

	        <label for="kontak">Kontak</label>
	        <input id="kontak" type="text" placeholder="Kontak" name="kontak"/>
   
             



	         
	         
	        <button type="submit" class="pure-button pure-button-primary">DAFTAR</button>
	        <a href="<?php echo base_url();?>index.php/lab_ctr" class="pure-button pure-button-secondary">BACK TO LOGIN</a>
	    </fieldset>
		</form> 
 	</div>

 	<div id="footer">
		

	</div>


 	 
 	 
</body>
</html>