<div class="container" id="addPP">
	<div class="row">
		<div class="col-md-10" id="addform">
			<div class="success-message"><?php echo $message;?></div>
			<h1>Ubah Foto Slider</h1><br><br>
			<?php 
  				$attributes = array('class' => 'form-horizontal','role' => 'form','onsubmit'=>"return confirmPost()");
  				echo form_open_multipart("admin/uploadSlider/1",$attributes); ?>
	  		<div class="form-group">
		    	<label for="slider" class="col-sm-6 control-label">Upload foto pertama untuk slider disini<span class="detailupload">(max: 500kb, 2000x2000)</span></label>
	    		<div class="col-sm-4">
		      		<input type="file" name="slider">
	    		</div>
	    		<div class="col-sm-2">
	    			<button type="submit" class="btn btn-primary">Upload</button>
	    		</div>
		  	</div>
		  	<?php echo form_close();?>
		  	<hr/>
		  	<?php 
  				$attributes = array('class' => 'form-horizontal','role' => 'form','onsubmit'=>"return confirmPost()");
  				echo form_open_multipart("admin/uploadSlider/2",$attributes); ?>
		  	<div class="form-group">
		    	<label for="slider" class="col-sm-6 control-label">Upload foto kedua untuk slider disini<span class="detailupload">(max: 500kb, 2000x2000)</span></label>
	    		<div class="col-sm-4">
		      		<input type="file" name="slider">
	    		</div>
	    		<div class="col-sm-2">
	    			<button type="submit" class="btn btn-primary">Upload</button>
	    		</div>
		  	</div>
		  	<?php echo form_close();?>
		  	<hr/>
		  	<?php 
  				$attributes = array('class' => 'form-horizontal','role' => 'form','onsubmit'=>"return confirmPost()");
  				echo form_open_multipart("admin/uploadSlider/3",$attributes); ?>
		  	<div class="form-group">
		    	<label for="slider" class="col-sm-6 control-label">Upload foto ketiga untuk slider disini<span class="detailupload">(max: 500kb, 2000x2000)</span></label>
	    		<div class="col-sm-4">
		      		<input type="file" name="slider">
	    		</div>
	    		<div class="col-sm-2">
	    			<button type="submit" class="btn btn-primary">Upload</button>
	    		</div>
		  	</div>
		  	<div class="error-message"><?php echo validation_errors();?></div>
			<?php echo form_close();?>
		</div>
	</div>
</div>
<script>
function confirmPost() {
	var agree=confirm("Apakah anda yakin ingin menambah halaman ini?");
	if (agree)
	return true ;
	else
	return false ;
} 
</script>