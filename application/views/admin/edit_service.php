	<div class="container">
	<div class="offset-md-3 col-md-6">
	<br>
	<br>
	<h3>Edit Service</h3>
	<form action="" method="post" enctype="multipart/form-data">

		<?php echo $this->session->flashdata('message'); ?>
		
		<div class="form-group"> 
			<label for="" class="label input-lg">Service Image</label>
			</br>
			</br>
	
			<input type="file" name="Service_Image">
 
		</div>
		
		<div class="form-group"> 
			<label for="" class="label">Event Type</label>
			<input type="text" class="form-control input-lg" value="<?php if(set_value('event_type')){ echo set_value('event_type'); }else{ echo $user[0]['Event_Type']; }  ?>" placeholder="Event Type" name="event_type">
			<div class="error"><?=form_error('event_type')?></div>
		</div>
		
		<div class="form-group"> 
			<label for="" class="label">Service Details</label>
			<input type="text" class="form-control input-lg" value="<?php if(set_value('company_details')){ echo set_value('company_details'); }else{ echo $user[0]['Service_Details']; }  ?>" placeholder="Service Details" name="company_details">
			<div class="error"><?=form_error('company_details')?></div>
		</div>
			
			
		<div class="form-group"> 
			<label for="" class="label">Service Charge</label>
			<input type="text" class="form-control input-lg" value="<?php if(set_value('service_charge')){ echo set_value('service_charge'); }else{ echo $user[0]['Service_Charge']; }  ?>" placeholder="Service Charge" name="service_charge">
			<div class="error"><?=form_error('service_charge')?></div>
		</div>

		<div class="form-group"> 
			
			<button type="submit" class="btn btn-success">Update</button>

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
