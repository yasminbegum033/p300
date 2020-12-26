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
<link href="<?=base_url()?>asset/css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->
<!-- //Custom Theme files --> 
<!-- js -->
<script src="<?=base_url()?>asset/js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->  
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!-- //web-fonts -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">  
	<!-- banner -->
	<div id="home" class="w3ls-banner"> 

		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
									<h3>Let's celebrate  <span>Your Events</span></h3>
										<p>The way you want it to be celebrated.</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="<?=base_url()?>welcome/about" class="menu__link" >Learn More</a>
									</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
									<h3>Let's celebrate  <span>Your Events</span></h3>
										<p>The way you desire it to be celebrated.</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="<?=base_url()?>welcome/about" class="menu__link" >Learn More</a>
									</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								<h3>Let's celebrate  <span>Your Events</span></h3>
										<p>The way you desire it to be celebrated.</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="<?=base_url()?>welcome/about" class="menu__link">Learn More</a>
									</div>
								</div>
								
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			
			<!--banner Slider starts Here-->
		</div>
		 
 
	</div>	
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
						<h1><a class="navbar-brand" href="index.html">Event Planner</a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							
							<li class="active"><a href="<?=base_url()?>" class="hvr-sweep-to-right">Home</a></li>
							<li><a href="<?=base_url()?>welcome/about" class="hvr-sweep-to-right">About</a></li>
							<li><a href="<?=base_url()?>welcome/companies" class="hvr-sweep-to-right">Services</a></li>
							<li><a href="<?=base_url()?>welcome/gallery" class="hvr-sweep-to-right">Gallery</a></li>
							<li><a href="<?=base_url()?>welcome/contact" class="hvr-sweep-to-right">Contact</a></li>
							<?php if($this->session->userdata('ID')) { ?>
							
							
							    <li <?php if($this->uri->segment(2)=='Bookings'){ echo 'class="active"'; } ?> ><a class="hvr-sweep-to-right" href="<?=base_url()?>welcome/Bookings">My Bookings</a></li>
							
								<li <?php if($this->uri->segment(1)=='logout'){ echo 'class="active"'; } ?> ><a class="hvr-sweep-to-right" href="<?=base_url()?>logout">Logout</a></li>
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