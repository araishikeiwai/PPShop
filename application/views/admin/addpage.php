<script src="<?php echo base_url();?>components/ckeditor/ckeditor.js"></script>

<div class="container" id="addPP">
	<div class="row">
		<div class="col-md-10" id="addform">
			<?php 
  				$attributes = array('class' => 'form-horizontal','role' => 'form','onsubmit'=>"return confirmPost()");
  				echo form_open_multipart("admin/doAddPage",$attributes); ?>
			<h1>Tambah Halaman</h1><br>
	  		<div class="form-group">
		    	<label for="judul" class="col-sm-2 control-label">Judul</label>
	    		<div class="col-sm-10">
	      			<input type="text" class="form-control" id="judul" placeholder="Judul Halaman" name="judul">
	    		</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="konten" class="col-sm-2 control-label">Konten Halaman</label>
	    		<div class="col-sm-10">
	    			<textarea name="konten" id="konten" rows="10" cols="80">
	    				
	    			</textarea>
	    			<script>
		                CKEDITOR.replace( 'konten' );
		            </script>
	    		</div>
		  	</div>
		  	<br>
		 	<div class="form-group">
		    	<div class="col-sm-offset-2 col-sm-10">
		      		<button type="submit" class="btn btn-info">Tambah Halaman</button>
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