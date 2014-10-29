<div class="container" id="addPP">
	<div class="row">
		<div class="col-md-10" id="addform">
		<div class="success-message"><?php echo $message;?></div>
			<?php 
  				$attributes = array('class' => 'form-horizontal','role' => 'form','onsubmit'=>"return confirmPost()");
  				echo form_open("admin/changePassword",$attributes); ?>
  				<div class="form-group">
		    		<label for="password" class="col-sm-2 control-label">Password Lama</label>
		    		<div class="col-sm-10">
		      			<input type="password" class="form-control" id="password" name="old">
		    		</div>
			  	</div>
  				<div class="form-group">
		    		<label for="password" class="col-sm-2 control-label">Password baru</label>
		    		<div class="col-sm-10">
		      			<input type="password" class="form-control" id="password" name="new">
		    		</div>
			  	</div>
			  	<div class="form-group">
		    		<label for="password" class="col-sm-2 control-label">Konfirmasi Password baru</label>
		    		<div class="col-sm-10">
		      			<input type="password" class="form-control" id="password" name="confirmnew">
		    		</div>
			  	</div>
			  	<div class="form-group">
			    	<div class="col-sm-offset-2 col-sm-10">
			      		<button type="submit" class="btn btn-info">Ganti Password</button>
			   	 	</div>
			  	</div
  			<?php echo form_close();?>
	</div>
</div>
<script>
function confirmPost() {
	var agree=confirm("Apakah anda yakin ingin mengganti password?");
	if (agree)
	return true ;
	else
	return false ;
} 
</script>