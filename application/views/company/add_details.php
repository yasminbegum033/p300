

    	<div class="col-md-8 col-md-offset-2" style="border:2px solid white; padding:20px  50px;border-radius: 30px;">
			<h2>Add Details</h2>
		
			<form action="" method="post" enctype="multipart/form-data">
		
		
				<?php echo $this->session->flashdata('message'); ?>
				
				
				
				<div class="form-group"> 
				<label for="" class="label">Service Image</label>
				</br>
				</br>
	
				<input type="file" name="Service_Image">
 
				</div>
				
				
				
				
				
				
				
				
				<div class="form-group"> 
				<label for="" class="label">Service Details</label>
				<input type="text" class="form-control" value="<?=set_value('company_details')?>" placeholder="Service Details" name="company_details">

			

			</div>
			
			
			<div class="form-group"> 
				<label for="" class="label">Service Type</label>
				
               <select name="event_type" class="form-control input-lg"  >
								<option value="">-Select Event-</option>
								<option  <?php  if(set_value('event_type')=='Birthday') { echo 'selected'; } ?>  value="Birthday">Birthday</option>
								<option <?php  if(set_value('event_type')=='Aqiqa') { echo 'selected'; } ?> value="Aqiqa">Aqiqa</option>
								<option <?php  if(set_value('event_type')=='Engagement') { echo 'selected'; } ?> value="Engagement">Engagement</option>
								<option <?php  if(set_value('event_type')=='Bachelor Party') { echo 'selected'; } ?> value="Bachelor Party">Bachelor Party</option>
								<option  <?php  if(set_value('event_type')=='Haldi') { echo 'selected'; } ?>  value="Haldi">Haldi</option>
								<option  <?php  if(set_value('event_type')=='Mehendi') { echo 'selected'; } ?>  value="Mehendi">Mehendi</option>
								<option  <?php  if(set_value('event_type')=='Sangeet') { echo 'selected'; } ?>  value="Sangeet">Sangeet</option>
								<option  <?php  if(set_value('event_type')=='Wedding') { echo 'selected'; } ?>  value="Wedding">Wedding</option>
								<option  <?php  if(set_value('event_type')=='Reception') { echo 'selected'; } ?>  value="Reception">Reception</option>
							</select>
			

			</div>
			
			
			<div class="form-group"> 
				<label for="" class="label">Service Charge</label>
				<input type="text" class="form-control" value="<?=set_value('service_charge')?>" placeholder="Service Charge" name="service_charge">

			

			</div>
				
				
				

				<div class="form-group">
    		
					<button type="submit" class="btn btn-success">Add Now</button>

				</div>
		
			</form>

    	</div>

    	<div class="clearfix"></div>
		</br>
		
		
		<style type="text/css">
	
	.label{
		color:green;
	font-size: 18px;
	float:left;
	padding:10px 0px;
	}
</style>

    	
      
