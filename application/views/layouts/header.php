<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hackathon</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	
	<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrapValidator.min.js"></script>
	
	<script>
		
	</script>
	<style type="text/css">

		#slide{
			border: 1px solid black;
			height: 500px;
			background-image: url("<?php echo base_url();?>images/slide2.jpg");
			background-size: cover;
			background-attachment: fixed;
			z-index: -2;
		}

		#nav{
			position: fixed;
			background-color: #2ecc71;
			width: 100%;
			height: 50px;
			opacity: 0.6;
			z-index: 1;
		}

		#nav ul{
			list-style: none;
		}
		
		#nav li {
			font-size: 20px;
			display: inline;

		}

		#nav ul li a{
			text-decoration: none;
			color: white;
			margin-left: 35px;
			line-height: 50px;
		}

		#nav ul li a:hover{
			padding-top: 20px;
			padding-bottom: 15px;
			padding-left: 2px;
			padding-right: 2px;
			background-color: white; 
			color: #2ecc71;
			transition: all 0.2s ease-in-out 0.1s;
			border-radius: 3px;
		}

		#middle_content{
			margin-top: 30px;
		}

		#middle_content #announcement{

			height: 400px;
			
		 }

		#middle_content #content1{
			margin-left: -10px;
			height: 200px;
			border: 1px solid #2ecc71;
		}
		#middle_content #content2{
			height: 200px;
			border: 1px solid #2ecc71;
		}
		#middle_content #content3{
			height: 200px;
			border: 1px solid #2ecc71;
		}

		#sayings{
			width: 20%;
			height: 60px;
			margin-top: 20%;
			background-color: #fff;
			opacity: 0.7;
			filter: alpha(opacity=70);
			-webkit-filter: alpha(opacity=20);
			border-radius: 5px;
		}
		
	</style>
</head>
<body>

<div id="main_container">
	<div id="nav" class="col-md-12">
		<div class="col-md-6"></div>
		<div class="col-md-6">
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">About us</a></li>
				<li><a href="">User Guide</a></li>
				<li><a href="">Registration</a></li>
			</ul>
		</div>
	</div>

	
	<div id="slide" class="col-md-12">
		<div id="sayings">"weaweaweaea"</div>

	</div>

	
	<div id="middle_content" class ="col-md-12">
		<div id="" class="col-md-9">
			<div id="content1" class = "col-md-4">
		 		<label>
		 			Different Type of Farm
		 		</label>	
		 	</div>

		 	<div id="content2" class = "col-md-4">
		 		<label>
		 			Different Type of Farm
		 		</label>	
		 	</div>

		 	<div id="content3" class = "col-md-4">
		 		<label>
		 			Different Type of Farm
		 		</label>	
		 	</div>
		</div>

		<div id="announcement" class="col-md-3">
			<!-- <div class="list-group-item success">
				<h4 class="list-group-item-heading" align="center">
					Announcements
				</h4>
			</div> -->
			<div class="list-group">
				<div id="announcement-heading">
					<a href="#" class="list-group-item info" >
					Announcements
				</a>
				</div>
				<a href="#" class="list-group-item">
					The Quick Brown Fox Jump Over The Lazy Dog
				</a>
				<a href="#" class="list-group-item">
					The Quick Brown Fox Jump Over The Lazy Dog
				</a>
				<a href="#" class="list-group-item">
					The Quick Brown Fox Jump Over The Lazy Dog
				</a>
				<a href="#" class="list-group-item">
					The Quick Brown Fox Jump Over The Lazy Dog
				</a>
				<a href="#" class="list-group-item">
					The Quick Brown Fox Jump Over The Lazy Dog
				</a>
				<a href="#" class="list-group-item">
					The Quick Brown Fox Jump Over The Lazy Dog
				</a>
			</div>
		</div>
	</div>
</div>