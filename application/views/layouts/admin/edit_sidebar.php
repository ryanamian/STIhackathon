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


<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrapValidator.min.js"></script>
<script src="<?php echo base_url();?>assets/js/admin_js/admin_sidebar_script.js"></script>
<meta name="viewport" content="width=device-width, initial-scale: 1.0, user-scalabe=0" />


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

	<div id="sidebar" class="col-md-2">
		
		<ul id="nav">
			<li><a class="selected" href="#"> Admin Dashboard</a></li>
			<li><a href="<?php echo base_url();?>admin/member"><img src="<?php echo base_url()?>images/admin_images/member.png">Member</a></li>
			<li><a href="<?php echo base_url();?>admin/product"><img src="<?php echo base_url()?>images/admin_images/dressicon.png">Product<span class="glyphicon glyphicon-chevron-right"></a>
		

			</li>
			<li><a href="productmovement.php">Product Movement</a></li>
			<li><a href="#"><img src="<?php echo base_url()?>images/admin_images/reserved.png">Reserved</a></li>
			<li><a href="<?php echo base_url();?>transaction/rent"><img src="<?php echo base_url()?>images/admin_images/rent.png">Rent</a></li>
			<li><a href="#"><img src="<?php echo base_url()?>images/admin_images/sale.png">Sales</a></li>
			
			<li><a href="statistic.php"><span class="glyphicon glyphicon-stats"></span>Statistics</a></li>
			<li><a href="<?php echo base_url();?>transaction/delivery"><img src="<?php echo base_url()?>images/admin_images/delivery.png">Delivery</a></li>
			<li><a href="#"><img src="<?php echo base_url()?>images/admin_images/customercare.png">Customer care</a></li>
			<li><a href="<?php echo base_url();?>admin/logout"><img src="<?php echo base_url()?>images/admin_images/logout.png">Logout</a></li>

		</ul>
	</div>

	<div id="receipt" class="col-md-10">
		<div id="transaction_header" class="row">
			<div class="col-xs-12">
				<div class="col-xs-2">
					<img src="<?php echo base_url();?>images/logo.png" width="130px" height="130px">
					
				</div>
				<div class="col-xs-4">
					<br />
					<label>Renee Salud Couturier</label>
					<label>65 Balete Drive, New Manila</label>
					<label>Quezon City, Metro Manila 1100</label>
					
				</div>
				
			</div>
		</div>
		<div class="row">
			
				<div id="line_divider" class="col-md-12">

				</div>
		</div>

		<div id="transaction_info" class="row">
				<?php
					foreach ($customer_info as $object) {
						$customer_name = $object->fname . ' ' . $object->lname;
						$address = $object->address . ' ' . $object->city . ' ' . $object->zip_code;
						$transactionID = $object->transactionID; 
						$date = $object->transaction_delivery_date;
						$total = $object->transaction_total_price;
					}
				?>
			
				<div class="col-md-12">
					<label>Transaction ID:  </label><?php echo $transactionID;?><br>
					<label>Bill to:  </label><?php echo $customer_name;?><br>
					<label>Adrress:  </label> <?php echo $address;?><br>
					<label>Date:  </label> <?php echo $date;?>
				</div>
		</div>

		<div id="transaction_table" class="row">
		    <table class="table table-bordered">
		        <thead>
		            <tr>
		                <th>Product name</th> 
		                <th>Color</th>
		                <th>Amount</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php 

		        		foreach ($order as $object) {
		        			$name = $object->name;
		        			$price = $object->product_price;
		        			$total_price = $object->product_price;
		        			$color = $object->list_colorname;
		        			echo '<tr>
					                <td>' . $name . '</td>
					                <td>' . $color .'</td>
					                <td>&#8369;' . $total_price . '</td>
			        			</tr>';
		        		}

						$rent_price = $total/2;		        		
		        	?>
		        </tbody>
		    </table>
		</div>


		<div id="transaction_total_price" class="row">
			<div class="col-md-3 col-md-offset-9">
			    <div><label>Total:</label>&#8369;<?php echo $rent_price; ?></div>
			    <div><label>Deposit:</label>&#8369;<?php echo $rent_price; ?></div>
			    <div><label>Over all:</label>&#8369;<?php echo $total; ?></div>
			</div>
		</div>

		<div id="transaction_total_price" class="row">
			<div class="col-md-12">
			    <a class="btn btn-success" href="<?php echo base_url(). 'pdfexample/create_pdf/' .$transactionID;?>">Download receipt</a>
			</div>
		</div>
	</div>
</div>

