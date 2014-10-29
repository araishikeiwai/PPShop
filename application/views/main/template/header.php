<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
	    <meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <title><?php echo $title;?></title>
		
	    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>css/main.css" />
		
		<!-- Favicons and the like (avoid using transparent .png) -->		
		<script src="<?php echo base_url();?>js/jquery.js"></script>
		<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
 	
  	</head>
  	<body>
  		<header class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_urL();?>">PP Shop</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo base_urL();?>">Home</a></li>
						<li><a href="<?php echo base_urL()."main/about";?>">About</a></li>
						<li><a href="<?php echo base_urL()."main/contact";?>">Contact</a></li>
						<li class="dropdown">
					  		<a href="" class="dropdown-toggle" data-toggle="dropdown">Cari PP berdasarkan Grup <span class="caret"></span></a>
			  				<ul class="dropdown-menu" role="menu">
							    <li><a href="<?php echo base_urL()."main/AKB";?>">AKB</a></li>
							    <li><a href="<?php echo base_urL()."main/JKT";?>">JKT</a></li>
							    <li><a href="<?php echo base_urL()."main/SKE";?>">SKE</a></li>
							    <li><a href="<?php echo base_urL()."main/NMB";?>">NMB</a></li>
							    <li><a href="<?php echo base_urL()."main/HKT";?>">HKT</a></li>
							    <li><a href="<?php echo base_urL()."main/Others";?>">Others</a></li>
						 	 </ul>
						</li>
					</ul>
					
		          	<?php 
	  				$attributes = array('class' => 'navbar-form navbar-right','role' => 'search');
	  				echo form_open("main/search",$attributes); ?>
						<div class="form-group">
		          				<div class="input-group">
					    			<div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
					      			<input type="text" class="form-control" placeholder="Cari PP disini" name="searchquery">
					      		</div>
		          			</div>
						<button type="submit" class="btn btn-default">Submit</button>
					<?php echo form_close();?>
				</div>
			</div>
        </header>