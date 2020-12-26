
<?php echo $this->session->flashdata('message'); ?>
	<h1 class="heading-agileinfo">Login</h1>
	<div class="col-md-4 col-md-offset-4" style="border:2px solid white; padding:20px  50px;border-radius: 30px;">
		<!-- form starts here -->
		<form action="" method="post">
			<div id="e_message"></div>
		 

			<div class="form-group"> 
				<label for="email" class="label">Email</label>
				<input type="email" id="user_email" class="form-control input-lg" value="" placeholder="Enter your Email Address" name="user_email">
			 
			</div>


			<div class="form-group"> 
				<label for="password" class="label">Password</label>
				<input type="password" id="user_password"  class="form-control input-lg" value="" placeholder="Enter your Password" name="password" data-type="password">
			 
			</div>
			<div class="w3ls-bot">
				 <br>
				<div class="form-end">
					<input type="button" class="btn btn-danger form-control input-lg" onclick="check_login()" value="LOGIN">
				</div>
				</br>
				<div class="new">
					<p>Don't have an account?</p>
					<a href="signup">Register?</a>
				</div>
			</div>
		</form>
	
	
	</div>
	<div class="" style="min-height: 460px;"></div>
	
	</br>
	</br>
	</br>
	 
	<!-- //form ends here -->
</body>

<style type="text/css">

	.new{
	
		color:white;
	
	}

	.label{
		font-size: 20px;
		float:left;
		padding:20px 0px;
	}
</style>


</html>