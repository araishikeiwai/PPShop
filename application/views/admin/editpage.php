<script src="<?php echo base_url();?>components/ckeditor/ckeditor.js"></script>

<div class="container" id="addPP">
	<div class="row">
		<div class="col-md-10" id="addform">
			<?php 
  				$attributes = array('class' => 'form-horizontal','role' => 'form','onsubmit'=>"return confirmPost()");
  				echo form_open_multipart("admin/doEditPage/".$pagedetail['id'],$attributes); ?>
			<h1>Ubah Halaman</h1><br>
	  		<div class="form-group">
		    	<label for="judul" class="col-sm-2 control-label">Judul</label>
	    		<div class="col-sm-10">
	      			<input readonly="readonly" type="text" class="form-control" id="judul" placeholder="Judul Halaman" name="judul" value="<?php echo $pagedetail['judul'];?>">
	    		</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="konten" class="col-sm-2 control-label">Konten Halaman</label>
	    		<div class="col-sm-10">
	    			<textarea name="konten" id="konten" rows="10" cols="80">
	    				<?php echo $pagedetail['konten'];?>
	    			</textarea>
	    			<script>
		                CKEDITOR.replace('konten');
		            </script>
	    		</div>
		  	</div>
		  	<br>
		 	<div class="form-group">
		    	<div class="col-sm-offset-2 col-sm-10">
		      		<button type="submit" class="btn btn-info">Ubah Halaman</button>
		   	 	</div>
		  	</div>
		  	<div class="error-message"><?php echo validation_errors();?></div>
		<?php echo form_close();?>
		</div>
	</div>
</div>
<script>
function confirmPost() {
	var agree=confirm("Apakah anda yakin ingin mengubah halaman ini?");
	if (agree)
	return true ;
	else
	return false ;
} 
function confirmPostDelete() {
	var agree=confirm("Apakah anda yakin ingin menghapus halaman ini?");
	if (agree)
	return true ;
	else
	return false ;
} 
</script>