
<?php echo $this->session->flashdata('message'); ?>
	<h1 class="heading-agileinfo">Signup</h1>	
	<div class="col-md-4 col-md-offset-4" style="border:2px solid white; padding:20px  50px;border-radius: 30px;">
		<form action="" method="post">
		
			<div class="form-group"> 
				<label for="" class="label">Name</label>
				<input type="text" class="form-control input-lg" value="<?=set_value('user_name')?>" placeholder="Enter your Name" name="user_name">

				<div class="error"><?=form_error('user_name')?></div>

			</div>

			<div class="form-group"> 
				<label for="" class="label">Email</label>
				<input type="email" class="form-control input-lg" value="<?=set_value('user_email')?>" placeholder="Enter your Email Address" name="user_email">
				<div class="error"><?=form_error('user_email')?></div>
			</div>


			<div class="form-group"> 
				<label for="" class="label">Mobile</label>
				<input type="text" class="form-control input-lg" value="<?=set_value('user_mobile')?>" placeholder="Enter your Mobile Number" name="user_mobile">
				<div class="error"><?=form_error('user_mobile')?></div>
			</div>
		
			<div class="form-group"> 
				<label for="" class="label">Password</label>
				<input type="password" class="form-control input-lg" value="<?=set_value('user_password')?>" placeholder="Enter your Password" name="user_password">
				<div class="error"><?=form_error('user_password')?></div>
			</div>
			
			
			<div class="form-group"> 
				<label for="" class="label">Confirm Password</label>
				<input type="password" class="form-control input-lg" value="<?=set_value('c_password')?>" placeholder="Enter the Password again" name="c_password">
				<div class="error"><?=form_error('c_password')?></div>
			</div>
			
			</br>
			
			
			<div class="new_r form-group"> 
			
		 	

			<input type="radio"  name="type"  <?php  if(set_value('type')=='User') { echo 'checked'; } ?>  value="User"> User
			<input type="radio"  name="type" <?php  if(set_value('type')=='Company') { echo 'checked'; } ?>   value="Company"> Company
			
			<div class="error"><?=form_error('type')?></div>
		  </div>
			
			
			
			
			</br>
			
			<div class="w3ls-bot">
				<div class="form-end">
					<input type="submit" class="btn btn-danger form-control input-lg" value="SIGNUP">
				</div>
				</br>
				<div class="new">
					<p>Already have an account?</p>
					<a href="login">Login?</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</form>
	</div>
	
	<div class="" style="min-height: 700px;"></div>
	<!-- //form ends here -->
</body>



</br>
</br>
</br>

</br>
</br>
</br>
</br>
</br>
</br>


</br>
</br>
</br>
</br>
</br>
</br>

<style type="text/css">

	.error{
		
		color:white;
	}



	.new{

		color:white;
	}
	
	.label{
		
	font-size: 18px;
	float:left;
	padding:20px 0px;
	
	}
	
	
	.new_r{
		
		font-size: 17px;
	color:white;
	
	}
	
</style>


</html>