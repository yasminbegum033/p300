	
	
	<div class="container">
	<div class="col-md-11">
	<br>
	<br>
	<h3>View Details</h3>
	<?php echo $this->session->flashdata('message'); ?>

	<table class="table table-responsive">
		<tr>
			
			<th>ID</th>
			<th>Compay Name</th>
			<th>Service Image</th>
			<th>Service Details</th>
			<th>Service Type</th>
			<th>Service Charge</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>


		<?php foreach ($users as $user) { ?> 
		<tr>
			
			<td><?=$user['ID']?></td>
			<td><?=$user['Company_Name']?></td>
			<td><img style="width:50px ; height:50px;" src="<?=base_url()?>images/<?=$user['Service_Image']?>" alt="" /></td>
			<td><?=$user['Service_Details']?></td>
			<td><?=$user['Event_Type']?></td>
			<td><?=$user['Service_Charge']?></td>
			<td><a href="<?=base_url()?>company/delete_service/<?=$user['ID']?>"><button class="btn btn-danger">Delete</button></a></td>
				<td><a href="<?=base_url()?>company/edit_service/<?=$user['ID']?>"><button class="btn btn-primary">Edit</button></a></td>
			
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
