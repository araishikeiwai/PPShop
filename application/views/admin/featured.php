<div class="container">
	<div class="row">
		<div class="col-sm-12" id="tableppcontainer">
			<h1>Featured PP</h1><br>
			<table id="managepp" class="table table-hover table-bordered">
				<thead>
				<tr>
					<th>No</th>
					<th>PP</th>
					<th>Actions</th>
				</tr>	
				</thead>
				<?php
					$i = 1;
					foreach ($featured as $row){
						echo "<tr>";
						echo "<td>".$row['sequence']."</td>";
						echo "<td>".$row['id_pp']."</td>";

						echo "<td>";
						echo '<a href="'.base_url().'admin/editFeatured/'.$row['sequence'].'" class="btn btn-small btn-success">Edit</a>';
						echo "</td>";
						echo "</tr>";
						$i++;
					}


				?>
		</table>
		</div>
	</div>
</div>