<!DOCTYPE HTML>
<html>
<head>
	<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Login :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Login Ulala" />
	<link type="text/css" rel="stylesheet" href="<?php echo URL_ASSETS;?>admin/css/stylelogin.css" />
	<div class = "container">
		<div class="wrapper">
		<div>
        	<p style="color:red;"><?php echo $this->session->flashdata('messages'); ?></p>
        </div>
			<form action="<?php echo base_url();?>admin_con/adminnyaLogin" method="post" name="Login_Form" class="form-signin">       
		    	<h3 class="form-signin-heading">Welcome Back Honey! Please Sign In</h3>
			  	<hr class="colorgraph"><br>
			  
			  	<input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
			  	<input type="password" class="form-control" name="password" placeholder="Password" required=""/>     		  
			 
			  	<button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  			
			</form>			
		</div>
	</div>
	<!--js -->
	<script src="<?php echo URL_ASSETS;?>admin/js/jquery.nicescroll.js"></script>
	<script src="<?php echo URL_ASSETS;?>admin/js/scripts.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo URL_ASSETS;?>admin/js/bootstrap.min.js"></script>
</body>
</html>