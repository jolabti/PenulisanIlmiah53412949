<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>REGISTRASI AKUN BARU - LABORATORIUM TEKNIK INFORMATIKA</title>
<link href="<?php echo base_url();?>css/style_elegant.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegent Tab Forms,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="<?php echo base_url();?>js/jquery.min.js"></script>
<script src="<?php echo base_url()?>js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion           
							width: 'auto', //auto or any width like 600px
							fit: true   // 100% fit in a container
						});
					});
				   </script>

<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700,200italic,300italic,400italic,600italic|Lora:400,700,400italic,700italic|Raleway:400,500,300,600,700,200,100' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
<div class="main">
		<h1>NEW REGISTER</h1>
	 <div class="sap_tabs">	
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			  <ul class="resp-tabs-list">
			  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab" style="width:50%"><div class="top-img"><img src="<?php echo base_url();?>img/top-note.png" alt=""/></div><span>ASISTEN</span>
			  	  	
				</li>
				 
				  <li class="resp-tab-item lost" aria-controls="tab_item-2" role="tab" style="width:50%"><div class="top-img"><img src="<?php echo base_url();?>img/top-key.png" alt=""/></div><span>INFORMASI</span></li>
				  <div class="clear"></div>
			  </ul>		
			  <!---->		  	 
			<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
					<div class="facts">
							<!--login1-->
							<p>Masukkan Token Registrasi :</p>
						    <input type="text" name="inputToken" class="text"   >
							<div class="register">
							<form>
								
							 	<p>NIP</p>
								<input type="text" name="nipAsisten" class="text"   >
								<p>Username</p>
								<input type="text" name="usernameAsisten" class="text"   >
								<p>Password</p>
								<input type="password" name="passwordAsisten" class="text"   >
								
								<p>Nama </p>
								<input type="text" name="namaAsisten" class="text"   >	
								<p>Email </p>
								<input type="text" name="emailAsisten" class="text"  >
								<p>Jabatan </p>
								<input type="text" name="jabatanAsisten" class="text"  >
								  
								
								<p>Tahun Masuk </p>
								<input type="text" name="tahunAsisten" class="text"   >
								 
								 
								 
								<div class="sign-up">
									<input type="reset" value="Reset">
									<input type="submit" onclick="myFunction()" value="Sign In" >
									<div class="clear"> </div>
								</div>
							</form>

						</div>
					</div>
				</div>		
			         					 
				 <div class="tab-3 resp-tab-content" aria-labelledby="tab_item-2 item3">
				     	<div class="facts">
									<form class="sub">
										<p>Current Password </p>
										<input type="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
										<p>New Password </p>
										<input type="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
										<p>Re-Type-Password </p>
										<input type="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
										<div class="submit three">
											<input type="submit" onclick="myFunction()" value="Update Password" >
										</div>
									</form>
									</div>
				         	</div>           	      
				        </div>	
				     </div>	
		        </div>
	        </div>
	     </div>

	<!--start-copyright-->
   		<div class="copy-right">
   			<div class="wrap">
				<p>Copyright &copy; 2015  All rights  Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
	<!--//end-copyright-->
</body>
</html>