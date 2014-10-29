<div class="container" id="addPP">
	<div class="row">
		<div class="col-md-10" id="addform">
			<?php 
  				$attributes = array('class' => 'form-horizontal','role' => 'form','onsubmit'=>"return confirmPost()");
  				echo form_open("admin/doEditFeatured/".$sequence,$attributes); ?>
  				<div class="form-group">
  				<h2 class="text-center">Ganti Featured PP</h2><br>
			    	<label for="pp" class="col-sm-2 control-label">PP</label>
				    <div class="col-sm-10">
				      	<select class="form-control" id="pp" name="pp">
				      		<?php 
				      			foreach($pparray as $row){
				      				echo "<option value='".$row['id']."'>".$row['name'].' '.$row['type'].' '.$row['detailtype']."</option>";
				      			}

				      		?>
				      	</select>
				    </div>
			  	</div>

			  	<div class="form-group">
			    	<div class="col-sm-offset-2 col-sm-10">
			      		<button type="submit" class="btn btn-info">Ganti Featured PP</button>
			   	 	</div>
			  	</div
  			<?php echo form_close();?>
	</div>
</div>
<script>
function confirmPost() {
	var agree=confirm("Apakah anda yakin ingin mengganti featured PP?");
	if (agree)
	return true ;
	else
	return false ;
} 
</script>