<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
				<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="./index.php?page=new_wr"><i class="fa fa-plus"></i> Add New Result</a>
			</div>
			
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>wemail</th>
						<th>title</th>
						<th>submitted on</th>
						<th>result</th>
						<th>status</th>
						
						
						
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					
					$qry = $conn1->query("SELECT * FROM writer_stories ");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b><?php echo $row['wemail'] ?></b></td>
						<td><b><?php echo $row['name'] ?></b></td>
						<td><b><?php echo $row['submit'] ?></b></td>
						<td><b><?php echo $row['result'] ?></b></td>
						<td><b><?php echo $row['status'] ?></b></td>
						
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>
		                    <div class="dropdown-menu" style="">
		                     
		                   
		                       <a class="dropdown-item" href="./index.php?page=edit_wr&id=<?php echo $row['no'] ?>">Edit</a>
		                      <div class="dropdown-divider"></div>
		                      <a class="dropdown-item delete_user" href="./index.php?page=delete_wr&id=<?php echo $row['no'] ?>">Delete</a>
		                   
		                      
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