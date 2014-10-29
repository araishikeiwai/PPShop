<div class="container" id="pagecontainer">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="col-md-6">
				<img src="<?php 
						if($detailpp['externalurl']!=null) {
							echo $detailpp['externalurl'];
						}
						else {
							echo base_url().'images/PP/'.$detailpp['id'].'.jpg';
						}
				?>" alt="singleview" class="img-rounded" id="ppsingle">
			</div>
			<div class="col-md-6">
				<h3>Detail PP</h3>
				<table class="table table-bordered table-hover">
					<tr>
						<td>Nama </td>
						<td> <?php echo $detailpp['name']; ?></td>
					</tr>
					<tr>
						<td>Group </td>
						<td> <?php echo $detailpp['group']; ?></td>
					</tr>
					<tr>
						<td>Team </td>
						<td> <?php echo $detailpp['team']; ?></td>
					</tr>
					<tr>
						<td>Harga </td>
						<td> <?php echo $detailpp['price']; ?></td>
					</tr>
					<tr>
						<td>Tipe </td>
						<td> <?php echo $detailpp['type']; ?></td>
					</tr>
					<tr>
						<td>Detail Tipe </td>
						<td> <?php echo $detailpp['detailtype']; ?></td>
					</tr>
					<tr>
						<td>Set </td>
						<td> <?php if($detailpp['set'] == 1) {echo 'Ya';} else echo 'Tidak'; ?></td>
					</tr>
					<tr>
						<td>Stok </td>
						<td> <?php if($detailpp['stock'] == 1) {echo 'Ada';} else echo 'Kosong'; ?></td>
					</tr>
				</table>
				<a class="btn btn-success" href="<?php echo base_url();?>">
					Kembali ke halaman utama
				</a>
			</div>	  							
		</div>
	</div>
</div>