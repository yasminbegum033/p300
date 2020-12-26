<!DOCTYPE html>
<html lang="en">
<head>
	<title>Event Planner</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Events Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Custom Theme files -->
	<link href="<?=base_url()?>asset/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?=base_url()?>asset/css/style.css" type="text/css" rel="stylesheet" media="all">  
	<link href="<?=base_url()?>asset3/css/style.css" rel='stylesheet' type='text/css' />
	<link href="<?=base_url()?>asset/css/font-awesome.css" rel="stylesheet">	<!-- font-awesome icons -->
	<link rel="stylesheet" href="<?=base_url()?>asset/css/lightbox.css">
	<!-- //Custom Theme files --> 
	<!-- js -->
	<script src="<?=base_url()?>asset/js/jquery-2.2.3.min.js"></script>  
	<!-- //js -->
	<!-- web-fonts -->  
	<link href="<?=base_url()?>asset///fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
	<link href="<?=base_url()?>asset///fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">  
	<!-- banner -->
		<div class=""> 
		<!-- banner-text --> 
	
	<!-- //banner --> 
			<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Event Planner</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="<?=base_url()?>">Event Planner</a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li><a href="<?=base_url()?>" class="hvr-sweep-to-right">Home</a></li>
							<li <?php if($this->uri->segment(2)=='about'){ echo 'class="active"'; } ?> ><a class="hvr-sweep-to-right" href="<?=base_url()?>welcome/about">About</a></li>
							<li <?php if($this->uri->segment(2)=='events'){ echo 'class="active"'; } ?> ><a class="hvr-sweep-to-right" href="<?=base_url()?>welcome/companies">Services</a></li>
							<li <?php if($this->uri->segment(2)=='gallery'){ echo 'class="active"'; } ?> ><a class="hvr-sweep-to-right" href="<?=base_url()?>welcome/gallery">Gallery</a></li>
							<li <?php if($this->uri->segment(2)=='contact'){ echo 'class="active"'; } ?> ><a class="hvr-sweep-to-right" href="<?=base_url()?>welcome/contact">Contact</a></li>
							<?php if($this->session->userdata('ID')) { ?>
							
								<li <?php if($this->uri->segment(1)=='logout'){ echo 'class="active"'; } ?> ><a class="hvr-sweep-to-right" href="<?=base_url()?>logout">Logout</a></li>
								<li <?php if($this->uri->segment(2)=='Bookings'){ echo 'class="active"'; } ?> ><a class="hvr-sweep-to-right" href="<?=base_url()?>welcome/Bookings">My Bookings</a></li>
							<?php } else{ ?>	
								
							
							<li <?php if($this->uri->segment(1)=='login'){ echo 'class="active"'; } ?> ><a class="hvr-sweep-to-right" href="<?=base_url()?>login">Login</a></li>
							<li <?php if($this->uri->segment(1)=='signup'){ echo 'class="active"'; } ?> ><a class="hvr-sweep-to-right" href="<?=base_url()?>signup">Signup</a></li>
							
							<?php } ?>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>  
		</div>	
		<!-- //header -->
	
	<!-- events -->

	</div>	
	
	
	
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>