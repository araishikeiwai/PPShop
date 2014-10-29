<div class="container">
	<div class="row">
		<div class="col-sm-12" id="tableppcontainer">
			<h1>Tabel Data PP</h1><br>
			<table id="managepp" class="table table-hover table-bordered">
				<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Group</th>
					<th>Team</th>
					<th>Harga</th>
					<th>Tipe</th>
					<th>Set</th>
					<th>Stock</th>
					<th>External URL</th>
					<th>Action</th>
				</tr>	
				</thead>
				<?php
					$i = 1;
					foreach ($pparray as $row){
						$id = $row['id'];
						echo "<tr>";
						echo "<td>".$i."</td>";
						echo "<td>".$row['name']."</td>";
						echo "<td>".$row['group']."</td>";
						echo "<td>".$row['team']."</td>";
						echo "<td>".$row['price']."</td>";
						echo "<td>".$row['type']."</td>";
						echo "<td>";
						if($row['set'] == 1){ echo "Ya </td>";}
						else echo "Tidak </td>";
						echo "<td>";
						if($row['stock'] == 1){ echo "Ada </td>";}
						else echo "Kosong </td>";
						echo "<td>";
						if($row['externalurl'] != null){ echo "Ya </td>";}
						else echo "Tidak </td>";
						echo "<td>";
						echo '<a href="'.base_url().'admin/editPP/'.$id.'" class="btn btn-small btn-success">Edit</a>';
						echo "</td>";
						echo "</tr>";
						$i++;
					}


				?>
		</table>
		</div>
	</div>
</div>