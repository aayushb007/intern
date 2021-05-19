<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="./index.php?page=new_result"><i class="fa fa-plus"></i> Add New Result</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<thead>
					<tr>
						<th>#</th>
						<th>Id</th>
									<th>Title</th>
									<th>Amount</th>
									<th>Status</th>
									<th>Investment date</th>
									<th></th>
						
						
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					
					$qry = $conn1->query("SELECT * FROM invest_result ");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
									<td><?php echo $i++ ?></td>
									<td><?php echo $row['id'] ?></td>
									<td><?php echo $row['title'] ?></td>
									<td><?php echo $row['amount'] ?></td>
									<td>
                                    <?php if($row['status']=='complete'){
									echo'<span class="dot">
											<i class="bg-success"></i>
											complete
										</span>';
                                    }?>
                                     <?php if($row['status']=='progress'){
									echo'<span class="dot">
											<i class="bg-warning"></i>
											progress
										</span>';
                                    }?>
									</td>
									<td><?php echo $row['date'] ?></td>
															<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>
		                    <div class="dropdown-menu" style="">
		                     
		                     <a class="dropdown-item" href="./index.php?page=edit_movie&id=<?php echo $row['mid'] ?>">Edit</a>
		                      <div class="dropdown-divider"></div>
		                      <a class="dropdown-item delete_user" href="./index.php?page=delete_movie&id=<?php echo $row['mid'] ?>">Delete</a>
		                        
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