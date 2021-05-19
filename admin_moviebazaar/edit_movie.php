<?php
?>
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<form  method="POST" action="./index.php?page=set_movie&id=<?php echo $_GET['id'] ?>.php" enctype="multipart/form-data" >
				<?php
					$i = 1;
					
					$qry = $conn1->query("SELECT * FROM mov where mid='".$_GET['id']."' ");
					while($row= $qry->fetch_assoc()):
					?>
				<input type="hidden" name="id" value="">
				<div class="row">
					
					<div class="col-md-6 border-right">
						<div class="form-group">
							<label for="" class="control-label">Id</label>
							<input type="text" name="id" class="form-control form-control-sm" required value="<?php echo $row['mid'] ?>">
						</div>
						<div class="form-group">
					<label for="">Category</label>
	      				<select name="category" id="status" class="custom-select custom-select-sm"><?php $category =$row['category'] ?>
						<option value="Action" <?php echo isset($category) && $category == 'Action' ? 'selected' : '' ?> >Action</option>

						<option value="Sci-fi" <?php echo isset($category) && $category == 'Sci-fi' ? 'selected' : '' ?>>Sci-fi</option>
						<option value="Thriller" <?php echo isset($category) && $category == 'Thriller' ? 'selected' : '' ?>>Thriller</option>
						<option value="Comedy" <?php echo isset($category) && $category == 'Drama' ? 'selected' : '' ?>>Drama</option>
					</select>
				</div>
						<div class="form-group">
							<label for="" class="control-label">Released Date</label>
							<input type="date" name="date" class="form-control form-control-sm" required value="<?php echo $row['date'] ?>">
						</div>
						</div>
						<div class="col-md-6 border-right">
						<div class="form-group">
							<label class="control-label">Name</label>
							<input type="text " class="form-control form-control-sm" name="name" required value="<?php echo ucwords($row['name']) ?>">
							<small id="#msg"></small>
						</div>
						<div class="form-group">
							<label class="control-label">Written By</label>
							<input type="text " class="form-control form-control-sm" name="write" required value="<?php echo ucwords($row['wname']) ?>">
							<small id="#msg"></small>
						</div>
						<div class="form-group">
							<label for="">Rate</label>
					<select name="rate" id="status" class="custom-select custom-select-sm"><?php $rate =$row['rate'] ?>
						<option value="5" <?php echo isset($rate) && $rate == 5 ? 'selected' : '' ?> >5</option>
						<option value="4" <?php echo isset($rate) && $rate == 4 ? 'selected' : '' ?> >4</option>
						<option value="3" <?php echo isset($rate) && $rate == 3 ? 'selected' : '' ?> >3</option>
						<option value="2" <?php echo isset($rate) && $rate == 2 ? 'selected' : '' ?> >2</option>
						<option value="1" <?php echo isset($rate) && $rate == 1 ? 'selected' : '' ?> >1</option>
						</select>

						</div>
					<div class="form-group">
							<label for="" class="control-label">Image</label>
							<div class="custom-file">
		                      <input type="file" class="custom-file-input" id="customFile" name="uploadfile" required value="<?php echo $row['img'] ?>">
		                      <label class="custom-file-label" for="customFile"><?php echo $row['img'] ?></label>
		                    </div>
						</div>	
						
					
				</div>
				<div class="row">
			<div class="col-md-10">
				<div class="form-group">
					<label for="" class="control-label">Description</label>
					<textarea name="about" id="" cols="30" rows="10" class="summernote form-control" value="<?php echo $row['about'] ?>">
						<?php echo $row['about'] ?>
						<?php echo isset($description) ? $description : '' ?>
					</textarea>
				</div>
			</div>
		</div>
				<hr>
				<div class="col-lg-12 text-right justify-content-center d-flex">
					<button class="btn btn-primary mr-2">Save</button>
					<button class="btn btn-secondary" type="button" onclick="location.href = 'index.php?page=site'">Cancel</button>
				</div>
			</form>
				<?php endwhile; ?>
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