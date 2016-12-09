

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
					                <th>Penalty</th>
					                <th>Action</th>
					            </tr>
					        </thead>
					        <tbody>
					        <div id="cancel_status"></div>
					        <?php
					        	$overall = 0;
					        	$over_deposit = 0;
					        	foreach ($order->result() as $row) {
					        		$transaction_delivery_date = $row->transaction_delivery_date;
					        		$transaction_date = $row->transaction_date;
					        		$transactionID = $row->transactionID;
					        		$reserveID = $row->reserveID;
									$name = $row->name;
									$order_price = $row->product_price;
									$price = $row->price;
									$color = $row->list_colorname;
									$datetime = explode(" ",$transaction_date);
									$date = date_create($datetime[0]);
									$date_now = date_create(date("Y-m-d"));
									
									$over_deposit = $over_deposit + $order_price;

									$diff=date_diff($date,$date_now);
									$penalty = $diff->format("%a");
									if($penalty >=0 && $penalty < 15 ){
										$penalty_percent = 25;
									}else if($penalty > 14 && $penalty < 23){
										$penalty_percent = 50;
									}else if($penalty > 22){
										$penalty_percent = 75;
									}

									$penalty_amount = ($penalty_percent/100)*$order_price;
									
									$remaining = $order_price-$penalty_amount;
								
									$deduction = $price - $remaining;
									$overall = $overall + $deduction;

									echo'<tr id ="' . $reserveID . '">
							                <td>' . $name . '</td>
							                <td>&#8369;' . number_format($price, 2) . '</td>
							                <td>' . $color . '</td>
							                <td>' . $penalty_percent .'%</td>
							                <td><a data-toggle="modal" data-target="#' . $reserveID . '_modal" class="btn btn-danger btn-xs">Cancel Order</a></td>
							            </tr>';

							        echo 	'<div id="' . $reserveID . '_modal" class="modal fade" role="dialog">
											<div class="modal-dialog">

										    <!-- Modal content-->
											    <div class="modal-content">
											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal">&times;</button>
											        <h4 class="modal-title">Cancel Product</h4>
											      </div>
											      <div class="modal-body">
											      	<form enctype="multipart/form-data" id="regcat" method="POST" class="form-vertical">
														<div id="wew">
															<div id="cancel_message">
																<div class="redirect_info">You want to cancel your reservation? You will deducted '. $penalty_percent .' percent or worth &#8369;'. number_format($deduction, 2) .' </div>
																<div id="redirect_btn"><a href="' .base_url() .'view/cancel_order/'. $reserveID .'" id="redirect_color" class="btn btn-success btn-sm cancel_btn">Yes</a><a id="redirect_cancel" type="button" class="btn btn-default btn-sm" data-dismiss="modal">No</a></div>
															</div>
														</div>
													</form>
											      </div>
											    </div>
											</div>
										</div>';
								}

								
							?>
					        </tbody>
					    </table>
					    <div>Delivery Date: <?php echo $transaction_delivery_date;?></div>
					   	<div>Balance to pay: &#8369;<?php echo number_format($over_deposit, 2);?></div>

					    <a data-toggle="modal" data-target="#<?php echo $transactionID;?>_modal" class="cancel_all btn btn-danger btn-xs">Cancel all</a><a data-toggle="modal" data-target="#continue_modal" class="btn btn-success btn-xs">Continue Rent</a>
						<?php
							
							echo 	'<div id="' . $transactionID . '_modal" class="modal fade" role="dialog">
											<div class="modal-dialog">

										    <!-- Modal content-->
											    <div class="modal-content">
											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal">&times;</button>
											        
											        <h4 class="modal-title">Cancel All Product</h4>
											      </div>
											      <div class="modal-body">
											      	<div id="cancel_all_status"></div>
											      	<form enctype="multipart/form-data" id="regcat" method="POST" class="form-vertical">
														<div id="wew">
															<div id="cancel_message">
																<div class="redirect_info">You want to cancel all your reservation? You will deducted '. $penalty_percent .' percent or worth &#8369;'. number_format($overall) .' </div>
																<div id="redirect_btn"><a href="' .base_url() .'view/cancel_all_order/'. $transactionID .'" class="btn btn-success btn-sm cancel_all_btn">Yes</a><a id="redirect_cancel" type="button" class="btn btn-default btn-sm" data-dismiss="modal">No</a></div>
															</div>
														</div>
													</form>
											      </div>
											    </div>
											</div>
										</div>';

							 echo 	'<div id="continue_modal" class="modal fade" role="dialog">
										<div class="modal-dialog">

									    
										    <div class="modal-content">
										    	<div class="modal-header">
										    		<button type="button" class="close" data-dismiss="modal">&times;</button>
										    		<h4 class="modal-title">Continue Rent</h4>
										    	</div>
										      	<div class="modal-body">
										      		<form id="continue_form" action="'. base_url() .'view/full_payment/' . $transactionID . '" method="POST">

										      			<input type="hidden" name="total"  id="total" value="'.$over_deposit.'.00">
											            <input type="hidden" name="client_orderid" id="client_orderid" value="order-00001">
											            <input type="hidden" name="order_desc" id="order_desc" value="Test Order Description">
											            <input type="hidden" name="first_name" id="first_name" value="'.$first_name.'">
											            <input type="hidden" name="last_name" id="lastname" value="'.$last_name.'">
											            
											            <input type="hidden" name="address1" id="address1" value="'. $address1 .'">
											            <input type="hidden" name="city" id="city" value="'.$city.'">
											            <input type="hidden" name="zip_code" id="zip_code" value="'.$zip_code.'">
											            <input type="hidden" name="country" id="country" value="PH">
											            <input type="hidden" name="phone" id="phone" value="'.$phone.'">

											            
											            <input type="hidden" name="amount" id="amount" value="'.$over_deposit.'.00">
											            <input type="hidden" name="email" id="email" value="'.$email.'">
											            <input type="hidden" name="currency" id="currency" value="PHP">
											            <input type="hidden" name="ipaddress" id="ipaddress" value="65.153.12.232">
											            <input type="hidden" name="redirect_url" id="redirect_url" value="http://reneesaludfashion.esy.es/success.php">
											            <input type="hidden" name="server_callback_url" id="server_callback_url" value="http://reneesaludfashion.esy.es/callback.php">
											            <input type="hidden" name="date" id="date" value="' . $transaction_delivery_date . '">
											            
														<div class="redirect_info">You want to continue your reservation? You need you pay deposit worth '. number_format($over_deposit) .' </div>

														<div id="submit_btn"><input type="submit" id="redirect_payment_rent" class="btn btn-success" value="Yes"><a id="redirect_cancel" type="button" class="btn btn-default btn-sm" data-dismiss="modal">No</a></div>

													</form>
										      	</div>
										    </div>
										</div>
									</div>';
							
						?>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

<script>



	$(".cancel_btn").click(function(evt){
   		evt.preventDefault();
   		var url = $(this).attr('href');
   		$.get(url, function(o){	
			if(o.result == '1'){
				var id = o.reserveID;
				$("#" + id + "_modal").modal('hide');
				$("#"+id).fadeOut(2000, function(){$(this).remove();});
				var html = '<div id="status1" class="alert alert-success"><strong>'+o.message+'</strong></div>';
				
				$("#cancel_status").append(html);
				setTimeout(function(){
					$("#status1").fadeOut();
				}, 3000);
				
				setTimeout(function(){
					$("#message1").fadeOut();
				}, 3000);
			}else{
				
			}
   		},'json');
	});

	$(".cancel_all_btn").click(function(evt){
   		evt.preventDefault();
   		var url = $(this).attr('href');
   		$.get(url, function(o){	
			if(o.result == '1'){
				var id = o.transactionID;
				var html = '<div id="status1" class="alert alert-success"><strong>'+o.message+'</strong></div>';
				$("#cancel_all_status").append(html);
				setTimeout(function(){
					$("#status1").fadeOut();
				}, 3000);
				setTimeout(function(){
					window.location.href= ' ' + '<?php echo base_url();?>' + 'view/reserve';
				}, 4000);
				
			}else{
				
			}
   		},'json');
	});

	$("#continue_form").submit(function(evt){
        evt.preventDefault();
        var url = $(this).attr('action');
        var postData = $(this).serialize();

        $.post(url, postData, function(o){
            var redirect = o["redirect-url"];
            window.location.href = redirect;
        }, 'json');
    });

</script>