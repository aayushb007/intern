<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="./index.php?page=new_cast"><i class="fa fa-plus"></i> Add New Cast</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list" width="100%">
				<thead>
					<tr>
						<th class="text-center" >#</th>
							<th>Mid</th>
						<th>Name</th>
						<th>Cast</th>
						<th>Image</th>
						<th>Name</th>
						<th>Cast</th>
						<th>Image</th>
						<th>Name</th>
						<th>Cast</th>
						<th>Image</th>
						<th>Name</th>
						<th>Cast</th>
						<th>Image</th>
						<th>Budget</th>
						<th>Production</th>
						
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$type = array('',"Admin","Project Manager","Employee");
					$qry = $conn1->query("SELECT * FROM more ");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<th class="text-center"><?php echo $row['mid'] ?></th>
						<td><b><?php echo ucwords($row['cast1']) ?></b></td>
						<td><b><?php echo $row['name1'] ?></b></td>
						<td><b><?php echo $row['image1'] ?></b></td>
						<td><b><?php echo ucwords($row['cast2']) ?></b></td>
						<td><b><?php echo $row['name2'] ?></b></td>
						<td><b><?php echo $row['image2'] ?></b></td>
						<td><b><?php echo ucwords($row['cast3']) ?></b></td>
						<td><b><?php echo $row['name3'] ?></b></td>
						<td><b><?php echo $row['image3'] ?></b></td>
						<td><b><?php echo ucwords($row['cast4']) ?></b></td>
						<td><b><?php echo $row['name4'] ?></b></td>
						<td><b><?php echo $row['image4'] ?></b></td>
						<td><b><?php echo $row["budget"] ?></b></td>
						<td><b><?php echo $row["production"] ?></b></td>
						
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>
		                    <div class="dropdown-menu" style="">
		                      <a class="dropdown-item delete_user" href="./index.php?page=delete_cast&id=<?php echo $row['mid'] ?>">Delete</a>
		                    </div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('#list').dataTable()
	$('.view_user').click(function(){
		uni_modal("<i class='fa fa-id-card'></i> User Details","view_user.php?id="+$(this).attr('data-id'))
	})
	$('.delete_user').click(function(){
	_conf("Are you sure to delete this user?","delete_user",[$(this).attr('data-id')])
	})
	})
	function delete_user($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_user',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>