<div class="container" id="pagecontainer">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<label id="categorylabel" for="categoryselector" class="col-sm-2 control-label">Category:</label>
				<div class="col-sm-4">
					<select class="form-control" id="categoryselector" onChange="if(this.selectedIndex!=0)self.location=this.options[this.selectedIndex].value">
						<option>--</option>
						<option value="<?php echo base_url().'main/AKB';?>">AKB</option>
						<option value="<?php echo base_url().'main/JKT';?>">JKT</option>
						<option value="<?php echo base_url().'main/SKE';?>">SKE</option>
						<option value="<?php echo base_url().'main/NMB';?>">NMB</option>
						<option value="<?php echo base_url().'main/HKT';?>">HKT</option>
						<option value="<?php echo base_url().'main/Others';?>">Others</option>
					</select>
				</div>
			</div>  				
			<hr>
			<?php 
			$counter = 0;
			?>

			<div class="row">
				<div class="col-md-1">
				</div>
				<?
				if($dataPP == null){
					echo '<h1 class="text-center">Tidak ada PP tersedia dengan kategori ini</h1>';
				}
				else{
					foreach ($dataPP as $row) {
				?>
					<a href="<? echo base_url().'main/view/'.$row['id'];?>">
					<div class="col-md-2">
						<img src="<?php 
							if($row['externalurl']!=null) {
								echo $row['externalurl'];
							}
							else {
								echo base_url().'images/PP/'.$row['id'].'.jpg';
							}
						?>" alt="singleview" class="img-rounded" id="categorypp">
						<p class="ppdesc"><?php echo $row['name'].' '.$row['type'];?></p>
					</div>
					</a>
					<?
						$counter++;
					}
				}
				?>
				<div class="col-md-1">
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4"><center><?php echo $halaman;?></center></div>
		<div class="col-md-4"></div>
	</div>
	<div class="col-md-4"></div>
	</div>
</div>		