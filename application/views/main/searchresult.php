
<div class="container" id="pagecontainer">
	<div class="row">
		<div class="col-md-12">				
			<?php 
			$counter = 0;
			?>

				<?
				if($dataPP == null){
					echo '<h1 class="text-center">Tidak ada PP tersedia dengan kategori ini</h1>';
				}
				else {
					foreach ($dataPP as $row) {
				?>	
				<div class="row" id="searchresult">
					<div class="col-md-1">
					</div>
					<a href="<? echo base_url().'main/view/'.$row['id'];?>">
						<div class="col-md-4">
							<img src="<?php 
								if($row['externalurl']!=null) {
									echo $row['externalurl'];
								}
								else {
									echo base_url().'images/PP/'.$row['id'].'.jpg';
								}
							?>" alt="singleview" class="img-rounded" id="categorypp">
						</div>
						<div class="col-md-4">
							<br>
							<p><?php echo $row['name'].' '.$row['type'];?></p>
							<p><?php echo $row['detailtype'].' '.$row['type'];?></p>
							<?php if($row['stock'] == 0){
										echo '<p class="bg-danger" id="stock">Stok Kosong</p>';

									}
									else {echo '<p class="bg-info" id="stock">Stok ada</p>';}
								;?>
							
						</div>
					</a>
				</div>
				<hr>
					<?
						$counter++;
					}
				}
				?>
		</div>
	</div>
	<br>
	<div class="col-md-4"></div>
	</div>
</div>		