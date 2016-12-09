

<div class="col-xs-9">
	<div class="middlebar_order">
		<div class="row">
			<div id="box">
				<div class="box-top">Order Item
				</div>
				<div class="box-panel">
					<br><br>
					<div class="table-responsive">
					    <table id="table_reserve_view" class="table table-hover table table-striped">
					        <thead>
					            <tr>
					                <th>Name</th>
					                <th>Price</th>
					                <th>Color</th>
					                <th>Size</th>
					                <th>Status</th>
					            </tr>
					        </thead>
					        <tbody>
					        <div id="cancel_status"></div>
					        <?php
					        	$overall = 0;
					        	$over_deposit = 0;
					        	$transaction_delivery_date = '';
					        	foreach ($order_rent->result() as $row) {
					        		$transaction_delivery_date = $row->transaction_delivery_date;
					        		$transaction_date = $row->transaction_date;
					        		$transactionID = $row->transactionID;
					        		$rentID = $row->rentID;
									$name = $row->name;
									$order_price = $row->product_price;
									$color = $row->list_colorname;
									$size = $row->rent_size;
									if(strpos($size, '-') == TRUE){

	                                }else{
	                                   $size_convert = $size;
	                                }

		                            foreach($sizes as $object){
		                                if($size == $object->sizeID){
		                                	$size_convert = $object->size;
		                                }
		                            }
									echo'<tr>
							                <td>' . $name . '</td>
							                <td>&#8369;' . number_format($order_price, 2) . '</td>
							                <td>' . $color . '</td>
							                <td>' . $size_convert .'</td>
							                <td>Pending</td>
							            </tr>';

							        
								}

								
							?>
					        </tbody>
					    </table>
					    <div>Delivery Date: <?php echo $transaction_delivery_date;?></div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
