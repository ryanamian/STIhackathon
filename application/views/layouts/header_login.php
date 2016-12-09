<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Renee Salud Fashion Clothes</title>


	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/filter.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/topsales.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/view_style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/registration_style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/signin_style.css">

	
	<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">-->
	<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	
	<script src="<?php echo base_url();?>assets/js/jquery.elevatezoom.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/dropdown.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/js/functions/filter_script.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrapValidator.min.js"></script>
		
	
		
	<script>
		
	</script>
	<style type="text/css">



	#male #wew, #female #wew, #accessories #wew{
	opacity: 0;
	transform: translateX(20px);
	transition: all 0.7s ease-in-out;
}	
	#male #wew.is-showing, #female #wew.is-showing, #accessories #wew.is-showing{
	opacity: 1;
	transform: translateX(0px);
}	
	.homecontainer{
		padding: 0;
		margin: 0;
	}
	i{
		margin-left: 30px;
	}

	.glyphicon {
	margin: 0px;
	padding: 0px;
	}

	.container-fluid {
		width: 100%;
	}

	#signin {
		margin-left: 2000px;
		border: 2px solid white;
		height: 47px;
		line-height: 40px;
		width: 112px;

	}


	#signin a:hover{
		background-color: white;
		font-color: red;

	}

	.menu{
		width: 100%;
		background: #252525;
		color: white;
		font-size: 13pt;
		display: none;
		box-sizing: border-box;
		cursor: pointer;
	}

	@media screen and (max-width: 845px){
		#nav ul{
			display: none;
		}
		#nav ul li a {
			height: 45px;
			width: 110px;
			color:#fff;
			font-size: 0.9em;
			text-decoration: none;

		}

		#nav ul li {
			display: block;
			text-align: center;
			margin-left: 30px;
			font-size: 13pt;
		}



		.menu{

			height: 50px;
			display: block;
		}
		.showing{
			max-height: 20em;
		}
	}

	i{
	margin-left: 30px;
	}

	.glyphicon {
	margin: 0px;
	padding: 0px;
	}

	.container-fluid {
		width: 100%;
	}

	#account{
		color: #8F7F32;
		border: 5px white;
	}


	</style>
</head>
<body>

<div id="slide">
	<div class="container homecontainer">
		<div id="nav" class="col-md-8">
			<div class="container-fluid">
				<div id="main_logo">
					<a href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>images/logo2.png" width="30%" height="30%"></a>
				</div>
				<div id="menu_list">
					<ul id="navmenu">
						
						<li><a href="<?php echo base_url();?>">HOME</a></li>
						<li><a href="#">CATEGORY<span class="glyphicon glyphicon-chevron-down"></span></a>
							<ul id="category_list">
								<li><a href="<?php $category = base64_encode('All' . SALT); echo base_url().'view/category?name='.$category;?>">ALL</a></li>
								
								<?php

									foreach($product_category as $object) {
										$category = $object->category;
										$categoryID = $object->categoryID;

										$encode = base64_encode($category. SALT);
										echo '<li><a href="' . base_url() . 'view/category?name=' . $encode . '">' . strtoupper($category) . '</a></li>';
									}


								?>
								
							</ul>
						</li>
						
						<li><a href="<?php echo base_url();?>view/events">EVENTS</a></li>
						<li><a href="<?php echo base_url();?>view/about_us">ABOUT US</a></li>
						<li><a href="<?php echo base_url();?>view/contact_us">CONTACT US</a></li>

						<li>
							<div id="account">
								<?php echo strtoupper($name);?><span class="caret"></span>
							</div>

							<ul>
								<li><a href="<?php echo base_url();?>view/account">My Account</a></li>
								<li><a href="<?php echo base_url();?>view/rent">Rented Item</a></li>
								<li><a href="<?php echo base_url();?>view/reserve">Reserved Item</a></li>
								<li><a href="<?php echo base_url();?>view/cancel">Canceled Item</a></li>
								<li><a href="<?php echo base_url();?>user/logout">Logout</a></li>
							</ul>
						</li>
							<?php
								$num = 0;
								if ($cart = $this->cart->contents()){
									
									foreach ($cart as $item){
										$num++;
									}
								}
							?>
						<li><a href="<?php echo base_url();?>cart/display_cart">Cart &nbsp<span class="glyphicon glyphicon-shopping-cart"><b id="cart_num"><?php echo $num;?></b></span></a></li>
					</ul>
				</div>
			</div>	
		</div>
	</div>
</div>
