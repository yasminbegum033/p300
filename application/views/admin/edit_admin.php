
	
	<div class="container">
	<div class="offset-md-3 col-md-6">
	<br>
	<br>
	<h3>Edit User</h3>
	
	
	

	<form action="" method="post" enctype="multipart/form-data">

		<?php echo $this->session->flashdata('message'); ?>
		
		<div class="form-group"> 
			<label for="">Name</label>
			<input type="text" class="form-control input-lg" value="<?php if(set_value('user_name')){ echo set_value('user_name'); }else{ echo $user[0]['Name']; }  ?>" placeholder="User Name" name="user_name">

			<div class="error"><?=form_error('user_name')?></div>

		</div>

		<div class="form-group"> 
			<label for="">Email</label>
			<input type="text" class="form-control input-lg" value="<?php if(set_value('user_email')){ echo set_value('user_email'); }else{ echo $user[0]['Email']; }  ?>" placeholder="User Email" name="user_email">
			<div class="error"><?=form_error('user_email')?></div>
		</div>
		
		
		
		


		<div class="form-group"> 
			<label for="">Mobile</label>
			<input type="text" class="form-control input-lg" value="<?php if(set_value('user_mobile')){ echo set_value('user_mobile'); }else{ echo $user[0]['Mobile']; }  ?>" placeholder="User Mobile" name="user_mobile">
			<div class="error"><?=form_error('user_mobile')?></div>
		</div>
		
		
		<div class="form-group"> 
			<label for="">Type</label>
			<input type="text" class="form-control input-lg" value="<?php if(set_value('user_type')){ echo set_value('user_type'); }else{ echo $user[0]['Type']; }  ?>" placeholder="User Type" name="user_type">
			<div class="error"><?=form_error('user_type')?></div>
		</div>
		
		


		<div class="form-group"> 
			
			<button type="submit" class="btn btn-success">Edit</button>

		</div>




		
		
	 
	</form>

	</div>

	</div>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	 
</body>



<style type="text/css">
	
	.label{
	color:green;
	font-size: 18px;
	float:left;
	padding:20px 0px;
	}
</style>


</html>
