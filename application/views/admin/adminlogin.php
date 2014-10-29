<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
	    <meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <title><?php echo $title; ?></title>
		
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/admin-login.css" />
		
		<script src="<?php echo base_url(); ?>js/jquery.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
 	
  	</head>
  	<body>
	  	<div class="container">
	  		<div class="row">
  				<?php 
  				$attributes = array('class' => 'loginadmin');
  				echo form_open("admin/login",$attributes); ?>
  					<h1>Admin Sign-In</h1><br>
  					<div class="form-group">
  						<label for="adminusername">Username</label>
  						<input name="username" type="text" class="form-control" id="adminusername" placeholder="Username">
  					</div>
  					<div class="form-group">
  						<label for="password">Password</label>
  						<input name="password" type="password" class="form-control" id="password" placeholder="Password">
  					</div>
  					<div class="error-message"><?php echo validation_errors(); ?></div>
  					<button class="btn btn-lg btn-default btn-block" type="submit">Sign in</button>
  				<?php echo form_close(); ?>
	  		</div>
	  	</div>
	</body>
</html>