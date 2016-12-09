		<div id="delivery_view">
					

			<div id="box">
				<div class="box-top"><img src="<?php echo base_url();?>images/admin_images/delivery.png">Delivery List
				</div>
				<div class="box-panel">
					<div id="message"></div>
					<div class="table-responsive">
						    <table id="table_member_view" class="table table-hover table table-striped">
						        <thead>
						            <tr>
						                <th>Transcation ID</th>
						                <th>Customer</th>
						                <th>Delivery date</th>
						                <th>Action</th>
						            </tr>
						        </thead>
						        <tbody>
						        <?php
									foreach ($delivery->result() as $row) {
									$transactionID = $row->transactionID;
									$name = $row->fname . ' ' . $row->lname;
									$delivery_date=  $row->transaction_delivery_date;

										echo'<tr id="' . $transactionID . '">
								                <td>' . $transactionID . '</td>
								                <td>' . $name . '</td>
								                <td>' . $delivery_date . '</td>
								                <td><a href="' .base_url() .'transaction/view_delivery_receipt/'. $transactionID .'" class="btn btn-success btn-xs">View</a></td>
								            </tr>';

								        echo 	'<div id="' . $transactionID . '_modaldelivered" class="modal fade" role="dialog">
													<div class="modal-dialog">

												   
													    <div class="modal-content">
													    	<div class="modal-header">
													        	<button type="button" class="close" data-dismiss="modal">&times;</button>
													        	<h4 class="modal-title">Delivered Product</h4>
													      	</div>
													     	<div class="modal-body">
													      	
																<div id="message">
																	<div id="message_status"></div>
																	<div id="delivered_message">
																		<div class="redirect_info">Are you sure?</div>
																		<div id="redirect_btn"><a href="' .base_url() .'transaction/delivered_status/'. $transactionID .'" class="delivered_btn btn btn-success btn-sm">Yes</a><a id="lost" type="button" class="btn btn-default btn-sm" data-dismiss="modal">No</a></div>
																	</div>
																</div>
													      	</div>
													    </div>
													</div>
												</div>';
									}
								?>
						        </tbody>
						    </table>
						   
							<?php
							
								echo '<div id="page" class="col-xs-12">';
								echo $this->pagination->create_links();
								echo '</div><br />'
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

	$("#delivery_report").click(function(evt){
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

   	$(".delivered_btn").click(function(evt){
   		evt.preventDefault();
   		var url = $(this).attr('href');
	   	$.get(url, function(o){
			if(o.result == '1'){

				var id = o.transactionID;

				$("#"+id).fadeOut(2000, function(){$(this).remove();});
				$("#" + id + "_modaldelivered").fadeOut(2000, function(){$(this).modal('hide');});
				var html = '<div id="delivered_status" class="alert alert-success">'+o.message+'</div>';
				$("#message_status").append(html);
	
				setTimeout(function(){
					$("#delivered_status").fadeOut();
				}, 3000);
				
			}else{
				
			}
   		},'json');
    });
</script>