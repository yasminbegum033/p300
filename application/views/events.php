 
		<div class="events-agileits-w3layouts">
			<div class="about">
				<div class="container">
				
				<?php echo $this->session->flashdata('message'); ?>
		
				
				<?php
				foreach($events as $row){ 
				?>	
					<h2 class="heading-agileinfo"><?=$row['Company_Name']?><span><?=$row['Event_Type']?> Celebration</span></h2>
					
					<div class="col-md-12">
						<div class="about-grids-1">
							<div class="col-md-5 wthree-about-left">
								<div class="wthree-about-left-info">
									<img src="<?=base_url()?>images/<?=$row['Service_Image']?>" alt="" />
								</div>
							</div>				
							<p>
								<?=$row['Service_Details']?>
							</p>
							
							</br>
							</br>
							
						</div>					
					</div>
			<?php  
				}		
			?>
	 					
				</div>
				
				</br>
				</br>

				<div class="new_b form-end">
					<button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Book Now</button>
				</div>
			
			</div>
		</div>
<style type="text/css">
	.new_b{
		
		text-align:center;
			
	}
	
	.new_c{
		font-size: 17px;
		background-color: #ffe6f3;
	}
</style>

	<?php if(($this->session->userdata('ID')) && ($this->session->userdata('Type')=='User')) { ?>
	
				<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								Book Now
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<div class="modal-body">
								<form action="" method="post">
									<?php echo $this->session->flashdata('message'); ?>
									<div class="form-group"> 
										<label for="">Book Date</label>
										<input type="hidden" name="Company_id" value="<?=$row['User_id']?>">
										<input type="hidden" name="User_id" value="<?=$this->session->userdata('ID')?>">
										<input type="hidden" name="Service_id" value="<?=$row['ID']?>">

										<input type="date" class="form-control" value="<?=set_value('Booking_Date')?>" placeholder="Book Date" name="Booking_Date">
										<div class="error"><?=form_error('Booking_Date')?></div>
									</div>
		
									<div class="form-group">
    		
										<button type="submit" class="btn btn-success">Book</button>

									</div>
		
								</form>
							</div>
						</div>
					</div>
				</div>
		

    <?php } else{ ?>
				<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								Event Planner
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<div class="new_c modal-body">
								<p>If you are alreday a registered user then please <a href="<?=base_url()?>login">login </a>first to book any service.</p>
								
								<p>OR</p>
								
								<p>If you don't have an account, nothing to worry! You can  <a href="<?=base_url()?>signup">signup </a>here.</p>

							</div>
						</div>
					</div>
				</div>

	
	<?php } ?>
