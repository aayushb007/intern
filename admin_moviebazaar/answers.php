<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
			<div class="card-tools">
				</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Answer1</th>
						<th>Answer2</th>
						<th>Answer3</th>
						<th>Answer4</th>
						<th>Answer5</th>
						<th>Answer6</th>
						<th>Answer7</th>
						<th>Answer8</th>
						<th>Answer9</th>
						<th>Answer10</th>
						<th>Answer11</th>
						
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$qry = $conn1->query("SELECT * from ans");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b><?php echo $row['ans1']?></b></td>
						<td><b><?php echo $row['ans2'] ?></b></td>
						<td><b><?php echo  $row['ans3'] ?></b></td>
						<td><b><?php echo  $row['ans4'] ?></b></td>
						<td><b><?php echo  $row['ans5'] ?></b></td>
						<td><b><?php echo  $row['ans6'] ?></b></td>
						<td><b><?php echo  $row['ans7'] ?></b></td>
						<td><b><?php echo  $row['ans8'] ?></b></td>
						<td><b><?php echo  $row['ans9'] ?></b></td>
						<td><b><?php echo  $row['ans10'] ?></b></td>
						<td><b><?php echo  $row['ans11'] ?></b></td>
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>
		                    <div class="dropdown-menu" style="">
		                     
		                      <div class="dropdown-divider"></div>
		                           <a class="dropdown-item delete_user" href="./index.php?page=delete_ans&id=<?php echo $row['no'] ?>">Delete</a>
		                
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