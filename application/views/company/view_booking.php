	
	
	<div class="container">
	<div class="col-md-11">
	<br>
	<br>
	<h3>View Booking</h3>
	<?php echo $this->session->flashdata('message'); ?>

	<table class="table table-responsive">
		<tr>
			
			<th>ID</th>
			<th>Company Name</th>
			<th>User Name</th>
			<th>User Email</th>
			<th>User Mobile</th>
			<th>Event Type</th>
			<th>Service Charge</th>
			<th>Delete</th>
		</tr>


		<?php foreach ($booking as $book) { ?> 
		<tr>
			
			<td><?=$book['ID']?></td>
			<td><?=$book['Company_Name']?></td>
			<td><?=$book['Name']?></td>
			<td><?=$book['Email']?></td>
			<td><?=$book['Mobile']?></td>
			<td><?=$book['Event_Type']?></td>
			<td><?=$book['Service_Charge']?></td>
			<td><a href="<?=base_url()?>company/delete_booking/<?=$book['Booking_ID']?>"><button class="btn btn-danger">Delete</button></a></td>
			 
		</tr>


			 
		<?php } ?>


	</table>

	 
	</div>

	</div>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	 
</body>
</html>
