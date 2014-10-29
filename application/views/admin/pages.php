<div class="container">
	<div class="row">
		<div class="col-sm-12" id="tableppcontainer">
			<h1>Tabel Data Halaman</h1><br>
			<table id="managepp" class="table table-hover table-bordered">
				<thead>
				<tr>
					<th>No</th>
					<th>Page Title</th>
					<th>Action</th>
				</tr>	
				</thead>
				<?php
					$i = 1;
					foreach ($arraypage as $row){
						$id = $row['id'];
						echo "<tr>";
						echo "<td>".$i."</td>";
						echo "<td>".$row['title']."</td>";
						echo "<td>";
						echo '<a href="'.base_url().'admin/editPage/'.$id.'" class="btn btn-small btn-success">Edit</a>';
						echo "</td>";
						echo "</tr>";
						$i++;
					}
				?>
			</table>
		</div>
	</div>
</div>