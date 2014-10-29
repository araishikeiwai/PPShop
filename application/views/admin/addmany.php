<div class="container" id="addPP">
	<div class="row">
		<div class="col-md-10" id="addform">
			<?php 
  				$attributes = array('class' => 'form-horizontal','role' => 'form','onsubmit'=>"return confirmPost()");
  				echo form_open_multipart("admin/doAddPP",$attributes); ?>
				<h1>Tambah PP Banyak Sekaligus</h1><br>
		  	<div class="form-group">
		    	<label for="harga" class="col-sm-3 control-label">Upload data CSV disini</label>
	    		<div class="col-sm-9">
		      		<input type="file" name="fotoPP">
	    		</div>
		  	</div>
		  	<br>
		 	<div class="form-group">
		    	<div class="col-sm-offset-2 col-sm-10">
		      		<button type="submit" class="btn btn-default">Upload PP</button>
		   	 	</div>
		  	</div>
		<?php echo form_close();?>
		</div>
	</div>
</div>
<script type="text/javascript">
function confirmPost() {
	var agree=confirm("Apakah anda yakin ingin menambah barang ini?");
	if (agree)
	return true ;
	else
	return false ;
} 
</script>