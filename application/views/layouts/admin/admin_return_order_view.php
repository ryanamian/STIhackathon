		<div id="return_order_view">
			<div id="box">
				<div class="box-top"><img src="<?php echo base_url();?>images/admin_images/delivery.png">Return List</div>
				<div class="box-panel">	
					<div id="return_order_table" class="row">
					    <table id="table_return_order_view" class="table table-bordered">
					        <thead>
					            <tr>
					            	<th>Product id</th>
					                <th>Product name</th>
					                <th>Color</th>
					                <th>Size</th>
					                <th>Date Return</th>
					                <th>Deposit</th>
					                <th>Penalty</th>
					                <th>Remaining</th>
					                <th>Action</th>
					            </tr>
					        </thead>
					        <tbody>
					        	<div id="cancel_status"></div>
					        	<?php 
					        		$total = 0;
					        		$transactionID = "";
					        		foreach ($return_order as $object) {
					        			$rentID = $object->rentID;
					        			$transactionID = $object->transactionID;
					        			$prodID = $object->prodID;
					        			$name = $object->name;
					        			$color = $object->list_colorname;
					        			$size = $object->rent_size;
					        			$return_date = $object->transaction_returned_date;
					        			$product_price = $object->product_price;
					        			$date = date_create($return_date);
										$date_now = date_create(date("Y-m-d"));

										
										if($date_now > $date){
											$diff=date_diff($date,$date_now);
											$penalty = $diff->format("%a");
											$penalty_amount = $penalty*500;
											$remaining = $product_price - $penalty_amount;
										}else{
											$penalty_amount = 0;
											$remaining = $product_price;
										}

										if(strpos($size, '-') == TRUE){

		                                }else{
		                                   $size_convert = $size;
		                                }

			                            foreach($sizes as $object){
			                                if($size == $object->sizeID){
			                                	$size_convert = $object->size;
			                                }
			                            }

										
										//echo $penalty;

					        			echo '<tr id="' . $rentID . '">
					        					<td>' . $prodID . '</td>
								                <td>' . $name . '</td>
								                <td>' . $color . '</td>
								                <td>' . $size_convert . '</td>
								                <td>' . $return_date . '</td>
								                <td> &#8369; '. number_format($product_price, 2) .'</td>
								                <td> &#8369; '. number_format($penalty_amount, 2) .'</td>
								                
								                <td> &#8369; '. number_format($remaining, 2) .'</td>
								                <td><a data-toggle="modal" data-target="#' . $rentID . '_modallost" class="btn btn-danger btn-xs">Lost</a>
								                	<a data-toggle="modal" data-target="#' . $rentID . '_modaldamage" class="btn btn-danger btn-xs">Damage</a>
								                	<a data-toggle="modal" data-target="#' . $rentID . '_modalok" class="btn btn-success btn-xs">Ok</a></td>
						        			</tr>';

						        		echo 	'<div id="' . $rentID . '_modallost" class="modal fade" role="dialog">
											<div class="modal-dialog">

										    <!-- Modal content-->
											    <div class="modal-content">
											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal">&times;</button>
											        <h4 class="modal-title">Lost Product</h4>
											      </div>
											      <div class="modal-body">
											      	<form enctype="multipart/form-data" id="regcat" method="POST" class="form-vertical">
														<div id="wew">
															<div id="cancel_message">
																<div class="redirect_info">Are you sure the product is OK?</div>
																<div id="redirect_btn"><a href="' .base_url() .'transaction/rent_status_lost/'. $rentID .'" id="lost" class="lost_btn btn btn-success btn-sm">Yes</a><a id="lost" type="button" class="btn btn-default btn-sm" data-dismiss="modal">No</a></div>
															</div>
														</div>
													</form>
											      </div>
											    </div>
											</div>
										</div>';

										echo 	'<div id="' . $rentID . '_modaldamage" class="modal fade" role="dialog">
											<div class="modal-dialog">

										    <!-- Modal content-->
											    <div class="modal-content">
											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal">&times;</button>
											        <h4 class="modal-title">Damage Product</h4>
											      </div>
											      <div class="modal-body">
											      	<form enctype="multipart/form-data" id="regcat" method="POST" class="form-vertical">
														<div id="wew">
															<div id="cancel_message">
																<div class="redirect_info">Are you sure?</div>
																<div id="redirect_btn"><a href="' .base_url() .'transaction/rent_status_damage/'. $rentID .'" id="damage" class="damage_btn btn btn-success btn-sm">Yes</a><a id="lost" type="button" class="btn btn-default btn-sm" data-dismiss="modal">No</a></div>
															</div>
														</div>
													</form>
											      </div>
											    </div>
											</div>
										</div>';


										echo 	'<div id="' . $rentID . '_modalok" class="modal fade" role="dialog">
											<div class="modal-dialog">

										    <!-- Modal content-->
											    <div class="modal-content">
											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal">&times;</button>
											        <h4 class="modal-title">Return Product</h4>
											      </div>
											      <div class="modal-body">
											      	<form enctype="multipart/form-data" id="regcat" method="POST" class="form-vertical">
														<div id="wew">
															<div id="cancel_message">
																<div class="redirect_info">Are you sure?</div>
																<div id="redirect_btn"><a href="' .base_url() .'transaction/rent_status_ok/'. $rentID .'" id="return" class="ok_btn btn btn-success btn-sm">Yes</a><a id="lost" type="button" class="btn btn-default btn-sm" data-dismiss="modal">No</a></div>
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
					</div>
				</div>
			</div>
		</div>
	</div><!--Closing-->
</div><!--Closing-->


<script>



	$(".lost_btn").click(function(evt){
   		evt.preventDefault();
   		var url = $(this).attr('href');

   		$.get(url, function(o){	
			if(o.result == '1'){
				var id = o.rentID;
				$("#" + id + "_modallost").modal('hide');
				$("#"+id).fadeOut(2000, function(){$(this).remove();});
				var html = '<div id="status1" class="alert alert-success"><strong>'+o.message+'</strong></div>';
				
				$("#cancel_status").append(html);
				setTimeout(function(){
					$("#status1").fadeOut();
				}, 3000);
			}else{
				var id = o.rentID;
				$("#" + id + "_modallost").modal('hide');
				var html = '<div id="status1" class="alert alert-danger"><strong>'+o.message+'</strong></div>';
				
				$("#cancel_status").append(html);
				setTimeout(function(){
					$("#status1").fadeOut();
				}, 3000);
			}
   		},'json');
	});

	$(".damage_btn").click(function(evt){
   		evt.preventDefault();
   		var url = $(this).attr('href');

   		$.get(url, function(o){	
			if(o.result == '1'){
				var id = o.rentID;
				$("#" + id + "_modaldamage").modal('hide');
				$("#"+id).fadeOut(2000, function(){$(this).remove();});
				var html = '<div id="status1" class="alert alert-success"><strong>'+o.message+'</strong></div>';
				
				$("#cancel_status").append(html);
				setTimeout(function(){
					$("#status1").fadeOut();
				}, 3000);
			}else{
				var id = o.rentID;
				$("#" + id + "_modaldamage").modal('hide');
				var html = '<div id="status1" class="alert alert-danger"><strong>'+o.message+'</strong></div>';
				
				$("#cancel_status").append(html);
				setTimeout(function(){
					$("#status1").fadeOut();
				}, 3000);
			}
   		},'json');
	});

	$(".ok_btn").click(function(evt){
   		evt.preventDefault();
   		var url = $(this).attr('href');
   		
   		$.get(url, function(o){	
			if(o.result == '1'){
				var id = o.rentID;
				$("#" + id + "_modalok").modal('hide');
				$("#"+id).fadeOut(2000, function(){$(this).remove();});
				var html = '<div id="status1" class="alert alert-success"><strong>'+o.message+'</strong></div>';
				
				$("#cancel_status").append(html);
				setTimeout(function(){
					$("#status1").fadeOut();
				}, 3000);
			}else{
				var id = o.rentID;
				$("#" + id + "_modalok").modal('hide');
				var html = '<div id="status1" class="alert alert-danger"><strong>'+o.message+'</strong></div>';
				
				$("#cancel_status").append(html);
				setTimeout(function(){
					$("#status1").fadeOut();
				}, 3000);
			}
   		},'json');
	});

</script>