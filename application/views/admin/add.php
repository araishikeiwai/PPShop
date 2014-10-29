<div class="container" id="addPP">
	<div class="row">
		<div class="col-md-10" id="addform">
			<?php 
  				$attributes = array('class' => 'form-horizontal','role' => 'form','onsubmit'=>"return confirmPost()");
  				echo form_open_multipart("admin/doAddPP",$attributes); ?>
			<h1>Tambah PP</h1><br>
	  		<div class="form-group">
		    	<label for="nama" class="col-sm-2 control-label">Nama</label>
	    		<div class="col-sm-10">
	      			<input type="text" class="form-control" id="nama" placeholder="Nama Lengkap Member" name="nama">
	    		</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="groupselect" class="col-sm-2 control-label">Group</label>
			    <div class="col-sm-10">
			      	<select class="form-control" id="groupselect" name="group" onchange="setType()">
			      		<option value='AKB'>AKB</option>
			      		<option value='JKT'>JKT</option>
			      		<option value='SKE'>SKE</option>
			      		<option value='NMB'>NMB</option>
			      		<option value='HKT'>HKT</option>
			      		<option value='SNH'>SNH</option>
			      		<option value='Others'>Others</option>
			      	</select>
			    </div>
		  	</div>
		  	<div class="form-group">
		    	<label for="teamselect" class="col-sm-2 control-label">Team</label>
			    <div class="col-sm-10">
			      	<select class="form-control" id="teamselect" name="team" id="akb">
			      		<option>--</option>
			      		<option value="A">A</option>
			      		<option value="K">K</option>
			      		<option value="B">B</option>
			      		<option value="4">4</option>
			      		<option value="8">8</option>
			      		<option value="Trainee">Trainee</option>
			      	</select>
			    </div>
		  	</div>
		  	<div class="form-group">
		    	<label for="harga" class="col-sm-2 control-label">Harga</label>
	    		<div class="col-sm-10">
	    			<div class="input-group">
		    			<div class="input-group-addon">Rp. </div>
		      			<input type="text" class="form-control" id="harga" placeholder="00000" name="harga">
		      		</div>
	    		</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="typeselect" class="col-sm-2 control-label">Type</label>
			    <div class="col-sm-10">
			      	<select class="form-control" id="typeselect" name="tipe">
			      		<option value="DVD Bonus">DVD Bonus</option>
			      		<option value="Theater Bonus">Theater Bonus</option>
			      		<option value="Concert PP">Concert PP</option>
			      		<option value="Monthly-Weekly PP Bonus">Monthly/Weekly PP</option>
			      		<option value="Others">Others</option>
			      	</select>
			    </div>
		  	</div>
		  	<div class="form-group">
		    	<label for="detail" class="col-sm-2 control-label">Detail Tipe</label>
	    		<div class="col-sm-10">
	      			<input type="text" class="form-control" id="detail" placeholder="Misalnya: Bonus DVD Kokoro no Placard, Teater Bonus CD..., Teater Bulan..." name="detail">
	    		</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="set" class="col-sm-2 control-label">Set</label>
			    <div class="col-sm-10">
			      	<select class="form-control" id="set" name="set">
			      		<option value="1">Ya </option>
			      		<option value="0">Tidak </option>
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
	      			<input type="text" class="form-control" id="externalurl" placeholder="Jika upload di tempat lain, ex: http://imgur.com/img" name="externalurl">
	    		</div>
		  	</div>
		  	<br>
		 	<div class="form-group">
		    	<div class="col-sm-offset-2 col-sm-10">
		      		<button type="submit" class="btn btn-info">Upload PP</button>
		   	 	</div>
		  	</div>
		  	<div class="error-message"><?php echo validation_errors();?></div>
		<?php echo form_close();?>
		</div>
	</div>
</div>

<script type ='text/javascript'>
function setType() {
    var x = document.getElementById("groupselect").value;
    var team = document.getElementById("teamselect");
    for (var i=1; i< team.length;i){
		team.remove(i);
	}

	if(x=='AKB'){
		var AKBOption1 = document.createElement("option");
		AKBOption1.text = "A";
		AKBOption1.value = "A";
		team.appendChild(AKBOption1);
		var AKBOption2 = document.createElement("option");
		AKBOption2.text = "K";
		AKBOption2.value = "K";
		team.appendChild(AKBOption2);
		var AKBOption3 = document.createElement("option");
		AKBOption3.text = "B";
		AKBOption3.value = "B";
		team.appendChild(AKBOption3);
		var AKBOption4 = document.createElement("option");
		AKBOption4.text = "4";
		AKBOption4.value = "4";
		team.appendChild(AKBOption4);
		var AKBOption5 = document.createElement("option");
		AKBOption5.text = "8";
		AKBOption5.value = "8";
		team.appendChild(AKBOption5);
		var AKBOption6 = document.createElement("option");
		AKBOption6.text = "Trainee";
		AKBOption6.value = "Trainee";
		team.appendChild(AKBOption6);
	}

	if(x=='JKT'){
		var JKTOption1 = document.createElement("option");
		JKTOption1.text = "J";
		JKTOption1.value = "J";
		team.appendChild(JKTOption1);
		var JKTOption2 = document.createElement("option");
		JKTOption2.text = "KIII";
		JKTOption2.value = "KIII";
		team.appendChild(JKTOption2);
		var JKTOption3 = document.createElement("option");
		JKTOption3.text = "Trainee";
		JKTOption3.value = "Trainee";
		team.appendChild(JKTOption3);
	}

	if(x=="SKE"){
		var SKEoption1 = document.createElement("option");
		SKEoption1.text = "S";
		SKEoption1.value = "S";
		team.appendChild(SKEoption1);
		var SKEoption2 = document.createElement("option");
		SKEoption2.text = "KII";
		SKEoption2.value = "KII";
		team.appendChild(SKEoption2);
		var SKEoption3 = document.createElement("option");
		SKEoption3.text = "E";
		SKEoption3.value = "E";
		team.appendChild(SKEoption3);
		var SKEoption4 = document.createElement("option");
		SKEoption4.text = "Trainee";
		SKEoption4.value = "Trainee";
		team.appendChild(SKEoption4);
	}

	if(x=="NMB"){
		var NMBoption1 = document.createElement("option");
		NMBoption1.text = "N";
		NMBoption1.value = "N";
		team.appendChild(NMBoption1);
		var NMBoption2= document.createElement("option");
		NMBoption2.text = "M";
		NMBoption2.value = "M";
		team.appendChild(NMBoption2);
		var NMBoption3 = document.createElement("option");
		NMBoption3.text = "BII";
		NMBoption3.value = "BII";
		team.appendChild(NMBoption3);
		var NMBoption4 = document.createElement("option");
		NMBoption4.text = "Trainee";
		NMBoption4.value = "Trainee";
		team.appendChild(NMBoption4);
	}

	if(x=="HKT"){
		var HKToption1 = document.createElement("option");
		HKToption1.text = "H";
		HKToption1.value = "H";
		team.appendChild(HKToption1);
		var HKToption2 = document.createElement("option");
		HKToption2.text = "KIV";
		HKToption2.value = "KIV";
		team.appendChild(HKToption2);
		var HKToption3 = document.createElement("option");
		HKToption3.text = "Trainee";
		HKToption3.value = "Trainee";
		team.appendChild(HKToption3);
	}

	if(x=="SNH"){
		var SNHoption1 = document.createElement("option");
		SNHoption1.text = "SII";
		SNHoption1.value = "SII";
		team.appendChild(SNHoption1);
		var SNHoption2 = document.createElement("option");
		SNHoption2.text = "NII";
		SNHoption2.value = "NII";
		team.appendChild(SNHoption2);
		var SNHoption3 = document.createElement("option");
		SNHoption3.text = "Trainee";
		SNHoption3.value = "Trainee";
		team.appendChild(SNHoption3);
	}
}

function confirmPost() {
	var agree=confirm("Apakah anda yakin ingin menambah barang ini?");
	if (agree)
	return true ;
	else
	return false ;
} 
</script>