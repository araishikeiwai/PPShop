<div class="container" id="addPP">
	<div class="row">
		<div class="col-md-10" id="addform">
			<?php 
  				$attributes = array('class' => 'form-horizontal','role' => 'form','onsubmit'=>"return confirmPost()");
  				echo form_open_multipart("admin/doEditPP",$attributes); ?>
			<h1>Edit PP</h1><br>
			<div class="form-group">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<img src="<?php echo base_url()."images/PP/".$dataPP['id'].".jpg";?>" style="max-width:300px;">
				</div>
				<div class="col-md-4"></div>			
			</div>
			<br>
	  		<div class="form-group">
		    	<label for="nama" class="col-sm-2 control-label">Nama</label>
	    		<div class="col-sm-10">
	      			<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $dataPP['name'];?>">
	    		</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="groupselect" class="col-sm-2 control-label">Group</label>
			    <div class="col-sm-10">
			      	<select class="form-control" id="groupselect" name="group" onchange="setType()">
			      		<option value='AKB' <?php if($dataPP['group'] == 'AKB') {echo 'selected';}?> >AKB</option>
			      		<option value='JKT' <?php if($dataPP['group'] == 'JKT') {echo 'selected';}?>>JKT</option>
			      		<option value='SKE' <?php if($dataPP['group'] == 'SKE') {echo 'selected';}?>>SKE</option>
			      		<option value='NMB' <?php if($dataPP['group'] == 'NMB') {echo 'selected';}?>>NMB</option>
			      		<option value='HKT' <?php if($dataPP['group'] == 'HKT') {echo 'selected';}?>>HKT</option>
			      		<option value='SNH' <?php if($dataPP['group'] == 'SNH') {echo 'selected';}?>>SNH</option>
			      		<option value='Others' <?php if($dataPP['group'] == 'Others') {echo 'selected';}?>>Others</option>
			      	</select>
			    </div>
		  	</div>
		  	<div class="form-group">
		    	<label for="teamselect" class="col-sm-2 control-label">Team</label>
			    <div class="col-sm-10">
			      	<select class="form-control" id="teamselect" name="team" id="akb">
			      		<option>--</option>
			      		<option value="A" <?php if($dataPP['team'] == 'A') {echo 'selected';}?> >A</option>
			      		<option value="K" <?php if($dataPP['team'] == 'K') {echo 'selected';}?> >K</option>
			      		<option value="B" <?php if($dataPP['team'] == 'B') {echo 'selected';}?> >B</option>
			      		<option value="4" <?php if($dataPP['team'] == '4') {echo 'selected';}?> >4</option>
			      		<option value="8" <?php if($dataPP['team'] == '8') {echo 'selected';}?> >8</option>
			      		<option>--</option>
			      		<option value="J" <?php if($dataPP['team'] == 'J') {echo 'selected';}?> >J</option>
			      		<option value="KIII" <?php if($dataPP['team'] == 'KIII') {echo 'selected';}?> >KIII</option>
			      		<option>--</option>
						<option value="S" <?php if($dataPP['team'] == 'S') {echo 'selected';}?> >S</option>
			      		<option value="KII" <?php if($dataPP['team'] == 'KII') {echo 'selected';}?> >KII</option>
			      		<option value="E" <?php if($dataPP['team'] == 'E') {echo 'selected';}?> >E</option>	
			      		<option>--</option>
			      		<option value="N" <?php if($dataPP['team'] == 'N') {echo 'selected';}?> >N</option>
			      		<option value="M" <?php if($dataPP['team'] == 'M') {echo 'selected';}?> >M</option>
			      		<option value="BII" <?php if($dataPP['team'] == 'BII') {echo 'selected';}?> >BII</option>	   
			      		<option>--</option>   		
						<option value="H" <?php if($dataPP['team'] == 'H') {echo 'selected';}?> >H</option>
			      		<option value="KIV" <?php if($dataPP['team'] == 'KIV') {echo 'selected';}?> >KIV</option>
			      		<option>--</option>
			      		<option value="SII" <?php if($dataPP['team'] == 'SII') {echo 'selected';}?> >SII</option>
			      		<option value="NII" <?php if($dataPP['team'] == 'NII') {echo 'selected';}?> >NII</option>
			      		<option>--</option>		      		
			      		<option value="Trainee" <?php if($dataPP['team'] == 'Trainee') {echo 'selected';}?> >Trainee</option>
			      	</select>
			    </div>
		  	</div>
		  	<div class="form-group">
		    	<label for="harga" class="col-sm-2 control-label">Harga</label>
	    		<div class="col-sm-10">
	    			<div class="input-group">
		    			<div class="input-group-addon">Rp. </div>
		      			<input type="text" class="form-control" id="harga" placeholder="00000" name="harga" value="<?php echo $dataPP['price'];?>">
		      		</div>
	    		</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="typeselect" class="col-sm-2 control-label">Type</label>
			    <div class="col-sm-10">
			      	<select class="form-control" id="typeselect" name="tipe">
			      		<option value="DVD Bonus" <?php if($dataPP['type'] == 'DVD Bonus') {echo 'selected';}?> >DVD Bonus</option>
			      		<option value="Theater Bonus" <?php if($dataPP['type'] == 'Theater Bonus') {echo 'selected';}?> >Theater Bonus</option>
			      		<option value="Monthly/Weekly PP Bonus" <?php if($dataPP['type'] == 'Monthly/Weekly PP Bonus') {echo 'selected';}?> >Monthly/Weekly PP</option>
			      		<option value="Concert PP" <?php if($dataPP['type'] == 'Concert PP') {echo 'selected';}?> >Concert PP</option>
			      		<option value="Others" <?php if($dataPP['type'] == 'A') {echo 'selected';}?> >Others</option>
			      	</select>
			    </div>
		  	</div>
		  	<div class="form-group">
		    	<label for="detail" class="col-sm-2 control-label">Detail Tipe</label>
	    		<div class="col-sm-10">
	      			<input type="text" class="form-control" id="detail" name="detail" value="<?php echo $dataPP['detailtype'];?>">
	    		</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="set" class="col-sm-2 control-label">Set</label>
			    <div class="col-sm-10">
			      	<select class="form-control" id="set" name="set">
			      		<option value="1" <?php if($dataPP['set'] == '1') {echo 'selected';}?> >Ya </option>
			      		<option value="0" <?php if($dataPP['set'] == '0') {echo 'selected';}?> >Tidak </option>
			      	</select>
			    </div>
		  	</div>
		  	<div class="form-group">
		    	<label for="stock" class="col-sm-2 control-label">Stock</label>
			    <div class="col-sm-10">
			      	<select class="form-control" id="stock" name="stock">
			      		<option value="1" <?php if($dataPP['stock'] == '1') {echo 'selected';}?> >Ada </option>
			      		<option value="0" <?php if($dataPP['stock'] == '0') {echo 'selected';}?> >Kosong </option>
			      	</select>
			    </div>
		  	</div>
		  	<div class="form-group">
		    	<label for="fotoPP" class="col-sm-4 control-label">Upload PP disini<span class="detailupload">(max: 500kb, 2000x2000)</span></label>
	    		<div class="col-sm-8">
		      		<input type="file" name="fotoPP">
	    		</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="externalurl" class="col-sm-2 control-label">External URL</label>
	    		<div class="col-sm-10">
	      			<input type="text" class="form-control" id="externalurl" value="<?php echo $dataPP['externalurl'];?>" name="externalurl">
	    		</div>
		  	</div>
		  	<br>
		  	<input type="hidden" name="id" value="<?php echo $dataPP['id'];?>">
		 	<div class="form-group">
		    	<div class="col-sm-offset-2 col-sm-4">
		      		<button type="submit" class="btn btn-info">Edit PP</button>
		   	 	</div>
		  	</div>
		  	<div class="error-message"><?php echo validation_errors();?></div>
		<?php echo form_close();?>
		<?php 
  				$attributes = array('class' => 'form-horizontal','role' => 'form','onsubmit'=>"return confirmPostDelete()");
  				echo form_open_multipart("admin/doDeletePP/".$dataPP['id'],$attributes); ?>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-4">
	      		<button type="submit" class="btn btn-danger">Delete PP</button>
	   	 	</div>
	   	</div>
	   	 <?php echo form_close();?>
		</div>
	</div>
</div>

<script type ='text/javascript'>
function confirmPost() {
	var agree=confirm("Apakah anda yakin ingin mengubah barang ini?");
	if (agree)
	return true ;
	else
	return false ;
} 
function confirmPostDelete() {
	var agree=confirm("Apakah anda yakin ingin menghapus barang ini?");
	if (agree)
	return true ;
	else
	return false ;
} 
</script>