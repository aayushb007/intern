<?php
?>
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<form action="./edit_system.php">
				<input type="hidden" name="id" value="">
				<div class="row">
					<?php
					$i = 1;
					
					$qry = $conn1->query("SELECT * FROM system_settings ");
					while($row= $qry->fetch_assoc()):
					?>
					<div class="col-md-6 border-right">
						<div class="form-group">
							<label for="" class="control-label">Name</label>
							<input type="text" name="name" class="form-control form-control-sm" required value="<?php echo ucwords($row['name']) ?>">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Email</label>
							<input type="text" name="email" class="form-control form-control-sm" required value="<?php echo $row['email'] ?>">
						</div>
						</div>
						<div class="col-md-6 border-right">
						<div class="form-group">
							<label class="control-label">Contact</label>
							<input type="text " class="form-control form-control-sm" name="contact" required required value="<?php echo $row['contact'] ?>">
							<small id="#msg"></small>
						</div>
						<div class="form-group">
							<label class="control-label">Address</label>
							<input type="text" class="form-control form-control-sm" name="address" required value="<?php echo $row['address'] ?>" >
							</div>
						</div>
							<?php endwhile; ?>
					
				</div>
				<hr>
				<div class="col-lg-12 text-right justify-content-center d-flex">
					<button class="btn btn-primary mr-2">Save</button>
					<button class="btn btn-secondary" type="button" onclick="location.href = 'index.php?page=site'">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>
<style>
	img#cimg{
		height: 15vh;
		width: 15vh;
		object-fit: cover;
		border-radius: 100% 100%;
	}
</style>
<script>
	$('[name="password"],[name="cpass"]').keyup(function(){
		var pass = $('[name="password"]').val()
		var cpass = $('[name="cpass"]').val()
		if(cpass == '' ||pass == ''){
			$('#pass_match').attr('data-status','')
		}else{
			if(cpass == pass){
				$('#pass_match').attr('data-status','1').html('<i class="text-success">Password Matched.</i>')
			}else{
				$('#pass_match').attr('data-status','2').html('<i class="text-danger">Password does not match.</i>')
			}
		}
	})
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
	$('#manage_user').submit(function(e){
		e.preventDefault()
		$('input').removeClass("border-danger")
		start_load()
		$('#msg').html('')
		if($('[name="password"]').val() != '' && $('[name="cpass"]').val() != ''){
			if($('#pass_match').attr('data-status') != 1){
				if($("[name='password']").val() !=''){
					$('[name="password"],[name="cpass"]').addClass("border-danger")
					end_load()
					return false;
				}
			}
		}
		$.ajax({
			url:'ajax.php?action=save_user',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp == 1){
					alert_toast('Data successfully saved.',"success");
					setTimeout(function(){
						location.replace('index.php?page=user_list')
					},750)
				}else if(resp == 2){
					$('#msg').html("<div class='alert alert-danger'>Email already exist.</div>");
					$('[name="email"]').addClass("border-danger")
					end_load()
				}
			}
		})
	})
</script>