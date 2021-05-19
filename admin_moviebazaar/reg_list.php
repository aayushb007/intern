<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
			
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<thead>
					<tr>
		                <th class="text-center">#</th>
						<th>id</th>
						
						<th>email</th>
						<th>name</th>
						<th>Password</th>
						<th>Contact</th>
						
						
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					
					$qry = $conn1->query("SELECT * FROM registration ");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b><?php echo $row['id'] ?></b></td>
						<td><b><?php echo $row['email'] ?></b></td>
						<td><b><?php echo $row['name'] ?></b></td>
						<td><b><?php echo $row['pass'] ?></b></td>
						
						<td><b><?php echo $row['phone'] ?></b></td>
						
						
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>
		                    <div class="dropdown-menu" style="">
		                     
		                      <div class="dropdown-divider"></div>
		                     <a class="dropdown-item delete_reg" href="./index.php?page=delete_reg&id=<?php echo strval($row['email']) ?>">Delete</a>
		                   
		                      <div class="dropdown-divider"></div>
		                      
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
	$('.delete_reg').click(function(){
	_conf("Are you sure to delete this Subscriber?","delete_reg",[$(this).attr('data-id')])
	})
	})
	function delete_reg($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_reg',
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