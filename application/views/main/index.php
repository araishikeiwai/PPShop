<div class="container" id="pagecontainer">
	<!-- Carousel ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
	    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
	  </ol>
		<div class="carousel-inner">
			<div class="item active">
			  	<img src="<?php echo base_url();?>images/slider/slider_1.jpg" alt="First slide">
			  	<div class="container">
			    <div class="carousel-caption">
			      	<h1>Example headline.</h1>
			      	<p>Note: If you're viewing this page via a URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
			      	<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
			    	</div>
			  	</div>
			</div>
			<div class="item">
			  	<img src="<?php echo base_url();?>images/slider/slider_2.jpg" alt="Second slide">
			  	<div class="container">
		    		<div class="carousel-caption">
			      		<h1>Another example headline.</h1>
			      		<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			      		<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
			    	</div>
			  	</div>
			</div>
			<div class="item">
			  	<img src="<?php echo base_url();?>images/slider/slider_3.jpg" alt="Third slide">
			  	<div class="container">
			    	<div class="carousel-caption">
				      	<h1>One more for good measure.</h1>
				      	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				     	<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
			    	</div>
			  	</div>
			</div>
		</div>
	 	<a class="left carousel-control" href="#" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div><!-- /.carousel -->
	<div class="row">
		<div class="col-md-4">
			<p class="bg-danger" id="headerrecently">Featured</p>
			<div class="row">
				<div class="col-md-1"></div>
				<a href="<?php echo base_url().'main/view/'.$featured[0]['id_pp']?>">
				<div class="col-md-10">
					<div class="img-container">
						<img src="<?php	echo base_url().'images/PP/'.$featured[0]['id_pp'].'.jpg';?>" class="mainpagepp">
					</div>

				</div>
				</a>
				<div class="col-md-1"></div>
			</div>
			<br><br>
			<div class="row">
				<div class="col-md-1"></div>
				<a href="<?php echo base_url().'main/view/'.$featured[1]['id_pp']?>">
				<div class="col-md-10">
					<div class="img-container">
						<img src="<?php	echo base_url().'images/PP/'.$featured[1]['id_pp'].'.jpg';?>" class="mainpagepp">
					</div>
				</div>
				</a>
				<div class="col-md-1"></div>
			</div>
		</div>
		<div class="col-md-8">
			<p class="bg-warning" id="headerrecently">Recently Added</p>
			<div class="row">
				<a href="<?php echo base_url().'main/view/'.$recent[0]['id']?>">
				<div class="col-md-4">
					<div class="img-container">
						<img src="<?php 
							if($recent[0]['externalurl']!=null) {
								echo $recent[0]['externalurl'];
							}
							else {
								echo base_url().'images/PP/'.$recent[0]['id'].'.jpg';
							}
						?>" class="mainpagepp">
					</div>
					
					<p class="ppdesc"><?php echo $recent[0]['name'].' '.$recent[0]['type']; ?></p>
				</div>
				</a>
				<a href="<?php echo base_url().'main/view/'.$recent[1]['id']?>">
				<div class="col-md-4">
					<div class="img-container">
						<img src="<?php 
							if($recent[1]['externalurl']!=null) {
								echo $recent[1]['externalurl'];
							}
							else {
								echo base_url().'images/PP/'.$recent[1]['id'].'.jpg';
							}
						?>" class="mainpagepp">
					</div>
					<p class="ppdesc"><?php echo $recent[1]['name'].' '.$recent[1]['type']; ?></p>
				</div>
				</a>
				<a href="<?php echo base_url().'main/view/'.$recent[2]['id']?>">
				<div class="col-md-4">
					<div class="img-container">
						<img src="<?php 
							if($recent[2]['externalurl']!=null) {
								echo $recent[2]['externalurl'];
							}
							else {
								echo base_url().'images/PP/'.$recent[2]['id'].'.jpg';
							}
						?>" class="mainpagepp">
					</div>
					<p class="ppdesc"><?php echo $recent[2]['name'].' '.$recent[2]['type']; ?></p>
				</div>
				</a>
			</div>
			<hr>
			<div class="row">
				<a href="<?php echo base_url().'main/view/'.$recent[3]['id']?>">
				<div class="col-md-4">
					<img src="<?php 
						if($recent[3]['externalurl']!=null) {
							echo $recent[3]['externalurl'];
						}
						else {
							echo base_url().'images/PP/'.$recent[3]['id'].'.jpg';
						}
					?>" class="mainpagepp">
					<p><?php echo $recent[3]['name'].' '.$recent[3]['type']; ?></p>
				</div>
				</a>
				<a href="<?php echo base_url().'main/view/'.$recent[4]['id']?>">
				<div class="col-md-4">
					<img src="<?php 
						if($recent[4]['externalurl']!=null) {
							echo $recent[4]['externalurl'];
						}
						else {
							echo base_url().'images/PP/'.$recent[4]['id'].'.jpg';
						}
					?>" class="mainpagepp">
					<p><?php echo $recent[4]['name'].' '.$recent[4]['type']; ?></p>
				</div>
				</a>
				<a href="<?php echo base_url().'main/view/'.$recent[5]['id']?>">
				<div class="col-md-4">
					<img src="<?php 
						if($recent[5]['externalurl']!=null) {
							echo $recent[5]['externalurl'];
						}
						else {
							echo base_url().'images/PP/'.$recent[5]['id'].'.jpg';
						}
					?>" class="mainpagepp">
					<p><?php echo $recent[5]['name'].' '.$recent[5]['type']; ?></p>
				</div>
				</a>
			</div>
		</div>
	</div>
</div>