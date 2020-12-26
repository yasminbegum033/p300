<!--Events --> 
		<div class="events-agileits-w3layouts">
			<div class="container">
				<h2 class="heading-agileinfo">Services<span></span></h2>
					<form action="" method="post" class="form-group">
						<div class="col-md-10">
							<select name="events" class="form-control input-lg"  >
								<option value="">-Select Event-</option>
								<option  <?php  if(set_value('events')=='Birthday') { echo 'selected'; } ?>  value="Birthday">Birthday</option>
								<option <?php  if(set_value('events')=='Aqiqa') { echo 'selected'; } ?> value="Aqiqa">Aqiqa</option>
								<option <?php  if(set_value('events')=='Engagement') { echo 'selected'; } ?> value="Engagement">Engagement</option>
								<option <?php  if(set_value('events')=='Bachelor Party') { echo 'selected'; } ?> value="Bachelor Party">Bachelor Party</option>
								<option  <?php  if(set_value('events')=='Haldi') { echo 'selected'; } ?>  value="Haldi">Haldi</option>
								<option  <?php  if(set_value('events')=='Mehendi') { echo 'selected'; } ?>  value="Mehendi">Mehendi</option>
								<option  <?php  if(set_value('events')=='Sangeet') { echo 'selected'; } ?>  value="Sangeet">Sangeet</option>
								<option  <?php  if(set_value('events')=='Wedding') { echo 'selected'; } ?>  value="Wedding">Wedding</option>
								<option  <?php  if(set_value('events')=='Reception') { echo 'selected'; } ?>  value="Reception">Reception</option>
							</select>
						</div>
						
						<div class="col-md-2">
							<button class="btn btn-danger my-2 my-sm-0" type="submit">Search</button>
						</div>
					</form>
				
					<div class="popular-grids">
					<div class="clearfix"></div>
					
					<?php if($companies) {foreach($companies as $row){ 
				
				
					?>
					<div class="col-md-4 popular-grid">
						<img src="<?=base_url()?>images/<?=$row['Service_Image']?>" class="img-responsive" alt=""/>
						<div class="popular-text">
							<h5><a href="<?=base_url()?>welcome/events/<?=$row['ID']?>">View Details</a></h5>
							<div class="detail-bottom">
								<h3 class="new_h3">Service: <?=$row['Event_Type']?></h3>
								</br>
								<h4 class="new_h4">Company: <?=$row['Company_Name']?></h4>
								</br>
								<h5 class="new_h5">Charge: Tk.<?=$row['Service_Charge']?></h5>
								<p>We can help you create a fun and successful event, so the only thing you need to worry about is what event to celebrate! </p>	
							</div>
						</div>
					</div>
					
					<?php  
					} }
				
					?>
					<div class="clearfix"></div>				
				</div>
			</div>
		</div>
		
		
		
<style type="text/css">

	.new_h3{
		
	color:#FF1493;
	
	}
	.new_h4{
		
		color:#FF1493;
			
	}
	
	.new_h5{
		
	color:#FF1493;	
		
	}
</style>
		
		
		
<!-- //Events --> 
<!-- //events -->

