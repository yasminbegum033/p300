	<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<h2 class="heading-agileinfo">Gallery<span></span></h2>
			<div class="gallery-grids">
			<div class="clearfix"></div>
			
			<?php
				foreach($gallery as $row){ 
			?>
				<div class="col-md-4 gallery-grid">
					<div class="grid">
						<figure class="effect-apollo">
							<a class="example-image-link" href="<?=base_url()?>images/<?=$row['Service_Image']?>" data-lightbox="example-set">
								<img src="<?=base_url()?>images/<?=$row['Service_Image']?>" alt="" />
								<figcaption>
									<p><?=$row['Company_Name']?> <?=$row['Event_Type']?></p>
								</figcaption>	
							</a>
						</figure>
					</div>
				</div>
					
					
			<?php  
				}		
			?>
			
			<div class="clearfix"> </div>
				<script src="<?=base_url()?>asset/js/lightbox-plus-jquery.min.js"> </script>
			</div>
		</div>
	</div>
	<!-- //gallery -->