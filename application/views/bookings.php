
		<div class="events-agileits-w3layouts">
			<div class="about">
				<div class="container">
					<div class="col-md-12">
						<h2 class="heading-agileinfo">My Bookings<span></span></h2>
						<table class="table table-responsive">
							<tr class="new_t">
								<td>Company Name</td>
								<td>Booking Date</td>
								<td>Event Type</td>
								<td>Service Charge</td>
							</tr>
							<?php
								foreach($bookings as $row){ 
							?>	
								<div class="about-grids-1">
									<tr>
										<td><?=$row['Name']?></td>
										<td><?=$row['Booking_Date']?></td>
										<td><?=$row['Event_Type']?></td>
										<td><?=$row['Service_Charge']?></td>
									</tr>
								</div>	
							<?php  
								}		
							?>			
						</table>	
					</div>
				</div>
			</div>
		</div>
<style type="text/css">
	.new_t{
		
		
		font-size: 19px;
		background-color: #ffcce7;
		
	}
	
</style>


