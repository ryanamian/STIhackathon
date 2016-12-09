<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>



<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/admin_css/admin_style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/admin_css/admin_member_style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/admin_css/add_product.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrapValidator.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/admin_css/product_info.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/registration_style.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker3.css">


<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrapValidator.min.js"></script>
<script src="<?php echo base_url();?>assets/js/admin_js/admin_sidebar_script.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/editor.js"></script>

<!-- <script type="text/javascript" src="https://www.google.com/jsapi"></script> -->

<style type="text/css">



.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}

#signup {
	margin-left: 70%;
}

#reg input{



}

#pic {
	padding-bottom: 125px;
}

#name{
padding-top: 25px;
padding-bottom: 125px;
}

#cat {
padding-bottom: 125px;

}

#front {
padding-bottom: 125px;
}

	
#addproduct {
	margin-left: 85%;
	margin-top : 50px;
	margin-bottom: 125px;
}

#info {
font-size: 1.8em;
text-shadow: 0px 2px gray;
}


</style>
</head>

<body>

<div id="admin_main_wrapper">
	<div id="sidebar" class="col-xs-2">
		<a id="sidebar_header" class="selected" href="#"> Admin Dashboard</a>
		<ul id="nav">	
			<li><a href="<?php echo base_url();?>admin/member"><img src="<?php echo base_url()?>images/admin_images/member.png">Member/Staff</a></li>
			<li><a href="<?php echo base_url();?>admin/product"><img src="<?php echo base_url()?>images/admin_images/dressicon.png">Product<span class="glyphicon glyphicon-chevron-right"></a>
		

			</li>
			<li><a href="<?php echo base_url();?>admin/product_movement">Product Movement</a></li>
			<li><a href="<?php echo base_url();?>transaction/reserve"><img src="<?php echo base_url()?>images/admin_images/reserved.png">Reserved</a></li>
			<li><a href="<?php echo base_url();?>transaction/rent"><img src="<?php echo base_url()?>images/admin_images/rent.png">Rent</a></li>
			<li><a href="<?php echo base_url();?>transaction/delivery"><img src="<?php echo base_url()?>images/admin_images/delivery.png">Delivery</a></li>
			<li><a href="<?php echo base_url();?>transaction/returned"><img src="<?php echo base_url()?>images/admin_images/rent.png">Return</a></li>
			<li><a href="<?php echo base_url();?>transaction/cancel"><img src="<?php echo base_url()?>images/admin_images/rent.png">Cancelled</a></li>
			<li><a href="<?php echo base_url();?>sales/monthly"><img src="<?php echo base_url()?>images/admin_images/sale.png">Sales</a></li>
			
			<li><a href="<?php echo base_url();?>admin/events">Events</a></li>
			<li><a href="#"><img src="<?php echo base_url()?>images/admin_images/customercare.png">Customer care</a></li>
			<li><a href="<?php echo base_url();?>admin/logout"><img src="<?php echo base_url()?>images/admin_images/logout.png">Logout</a></li>
		</ul>
	</div>

	<div id="receipt" class="col-xs-10">