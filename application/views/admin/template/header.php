<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
	    <meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <title><?php echo $title;?></title>
		
	    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>css/admin-dashboard.css" />
		
		<!-- Favicons and the like (avoid using transparent .png) -->		
		<script src="<?php echo base_url();?>js/jquery.js"></script>
		<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
 	
  	</head>
  	<body>
  		<header class="navbar navbar-fixed-top navbar-default" role="navigation">
  			<div class="container">
  				<div class="navbar-header">
		         	<a class="navbar-brand" href="<?php echo base_url();?>admin">PP Shop</a>
		        </div>
		        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
		        	<ul class="nav navbar-nav">
						<li><a href="<?php echo base_url();?>admin/choose">Tambah PP</a></li>
						<li><a href="<?php echo base_url();?>admin/manage">Manage PP</a></li>
						<li><a href="<?php echo base_url();?>admin/pages">Manage Halaman</a></li>
						<li><a href="<?php echo base_url();?>admin/slider">Atur Slider</a></li>
					</ul>
		          	<ul class="nav navbar-nav navbar-right">
		          		<li id="pojokan"><a href="<?php echo base_url();?>">Back to Main Page</a></li>
		          		<li><a class="btn btn-danger" href="<?php echo base_url();?>admin/logout">Logout</a></li>
		          	</ul>
		        </nav>	          	
  			</div>
  		</header>