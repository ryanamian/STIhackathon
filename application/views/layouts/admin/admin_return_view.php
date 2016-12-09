		<div id="return_view">
			<div id="box">
				<div class="box-top"><img src="<?php echo base_url();?>images/admin_images/delivery.png">Return List
				</div>
				<div class="box-panel">
					<div id="message"></div>
					<div class="table-responsive">
						    <table id="table_return_view" class="table table-hover table table-striped">
						        <thead>
						            <tr>
						                <th>Transcation ID</th>
						                <th>Customer</th>
						                <th>Returned date</th>
						                <th>Action</th>
						            </tr>
						        </thead>
						            <?php
							        	foreach ($return->result() as $row) {
											$transactionID = $row->transactionID;
											$name = $row->fname . ' ' . $row->lname;
											$return_date=  $row->transaction_returned_date;
											echo'<tr>
									                <td>' . $transactionID . '</td>
									                <td>' . $name . '</td>
									                <td>' . $return_date . '</td>
									                <td><a href="' .base_url() .'transaction/view_return_order/'. $transactionID .'" class="btn btn-success btn-xs">View Order</a></td>
									            </tr>';
										}
									?>
						        <tbody>
						        </tbody>
						    </table>
						    <a id="return_report" href="<?php echo base_url();?>reports/return_reports">View all Damage and lost Item</a>
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

	$("#return_report").click(function(evt){
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

</script>