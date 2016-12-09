		<div id="cancel_view">
			<div id="box">
				<div class="box-top">Cancelled List
				</div>
				<div class="row">
					<div id="search">
						<form method="POST" action="<?php echo base_url();?>transaction/cancel_search" class="form-vertical">
								<div class="form-group">
									<div class="col-md-3 col-md-offset-7">
										<br><input type="text" placeholder="Search" id="txtsearch" name="txtsearch" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-1">
										<br><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-1">
										<a href="<?php echo base_url();?>transaction/cancel" id="clear_btn" class="btn btn-danger btn-sm">Clear</a>
									</div>
								</div>
						</form>
					</div>
				</div>

				<div class="box-panel">


					<div id="message"></div>
					<div class="table-responsive">
						    <table id="table_cancel_view" class="table table-hover table table-striped">
						        <thead>
						            <tr>
						                <th>Customer name</th>
						                <th>Product name</th>
						                <th>Price</th>
						                <th>Refund</th>
						                <th>Action</th>
						            </tr>
						        </thead>
						       
						        <tbody>
						        <div id="message_cancel">
						        	
						        </div>
						        <?php
									foreach($cancel as $object){
										$cancelID = $object->cancelID;
						        		$full_name = $object->fname . ' ' .$object->lname;
						        		$name = $object->name;
						        		$order_price = $object->product_price;
										$remaining = $object->remaining;

										echo'<tr id="' . $cancelID . '">
								                <td>' . $full_name . '</td>
								                <td>' . $name . '</td>
								                <td>&#8369;' . number_format($order_price, 2) . '</td>
								                <td>&#8369;' . number_format($remaining, 2) . '</td>
								                <td><a data-toggle="modal" data-target="#' . $cancelID . '_modal"  class="btn btn-success btn-xs refund_btn">Done</a></td>
								            </tr>';
								        echo 	'<div id="' . $cancelID . '_modal" class="modal fade" role="dialog">
											<div class="modal-dialog">

										    <!-- Modal content-->
											    <div class="modal-content">
											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal">&times;</button>
											        <h4 class="modal-title">Refund Product</h4>
											      </div>
											      <div class="modal-body">
											      	<form enctype="multipart/form-data" id="regcat" method="POST" class="form-vertical">
														<div id="wew">
															<div id="cancel_message">
																<div class="redirect_info">Are you sure?</div>
																<div id="redirect_btn"><a href="' .base_url() .'transaction/refund/'. $cancelID .'" id="lost" class="refund_btn btn btn-success btn-sm">Yes</a><a id="lost" type="button" class="btn btn-default btn-sm" data-dismiss="modal">No</a></div>
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
						    <a id="cancel_report" href="<?php echo base_url();?>reports/cancel_reports">View all cancel transaction</a>
							<?php
							
								echo '<div id="page" class="col-xs-12">';
								echo $this->pagination->create_links();
								echo '</div><br />';
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	$check_login = $this->session->userdata('renee_salud_admin');
	$s = $this->session->userdata('renee_salud_admin');
	$data['user_level'] =  $s['user_level'];

?>
<script>

	$("#cancel_report").click(function(evt){
		evt.preventDefault();
		var url = $(this).attr('href');
		var level = '<?php echo $data["user_level"];?>';


		if(level == 'staff'){
			var html = '<div id="status1" class="alert alert-success">You don\'t have access to this. Only administrator</div>';
			$("#status1").remove();
			$("#message").append(html);

		}else if(level == 'admin'){
			window.location.href = url;
		}


	});
	
	$(".refund_btn").click(function(evt){
   		evt.preventDefault();
   		var url = $(this).attr('href');
   		$.get(url, function(o){
			if(o.result == '1'){
				var id = o.cancelID;
				$("#"+id + "_modal").fadeOut(500, function(){$(this).modal('hide');});
				$("#"+id).fadeOut(1000, function(){$(this).remove();});
				var html = '<div id="cancel_status" class="alert alert-success">'+o.message+'</div>';
				$("#message_cancel").append(html);
	
				setTimeout(function(){
					$("#cancel_status").fadeOut();
					$("#message_cancel").empty();
				}, 1000);
			}else{
				var html = '<div id="cancel_status" class="alert alert-danger">'+o.message+'</div>';
				$("#message_cancel").append(html);
				setTimeout(function(){
					$("#cancel_status").fadeOut();
				}, 3000);
			}
   		},'json');
	});

</script>