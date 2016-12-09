<div id="receipt" class="col-md-10">
		<div id="transaction_header" class="row">
			<div class="col-xs-12">
				<div class="col-xs-2">
					<img src="<?php echo base_url();?>images/logo2.png" width="130px" height="130px">
					
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
						$secret_code = $object->secret_code;
						
					}
				?>
			
				<div class="col-md-12">
					<label>Transaction ID:  </label><?php echo $transactionID;?><br>
					<label>Bill to:  </label><?php echo $customer_name;?><br>
					<label>Adrress:  </label> <?php echo $address;?><br>
					<label>Secret Code:  </label> <?php echo $secret_code;?><br>
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
		        			$total = $object->payment_amount;
		        			echo '<tr>
					                <td>' . $name . '</td>
					                <td>' . $color .'</td>
					                <td>&#8369;' . number_format($total_price, 2) . '</td>
			        			</tr>';
		        		}

						$rent_price = $total/2;		        		
		        	?>
		        </tbody>
		    </table>
		</div>


		<div id="transaction_total_price" class="row">
			<div class="col-md-3 col-md-offset-9">
			    <div><label>Total:</label>&#8369;<?php echo number_format($rent_price, 2); ?></div>
			    <div><label>Deposit:</label>&#8369;<?php echo number_format($rent_price, 2); ?></div>
			    <div><label>Over all:</label>&#8369;<?php echo number_format($total, 2); ?></div>
			</div>
		</div>

		<div id="transaction_total_price" class="row">
			<div class="col-md-12">
			    <a class="btn btn-success" href="<?php echo base_url(). 'pdfexample/create_pdf/' .$transactionID;?>">Download receipt</a>
			</div>
		</div>
	</div>
</div>