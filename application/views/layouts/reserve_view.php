<div class="col-xs-9">
	<div class="middlebar_reserve">
		<div class="row">
			<div id="box">
				<div class="box-top"><img src="<?php echo base_url();?>images/admin_images/reserved.png">Reserved Item
				</div>
				
				<div class="box-panel">
					<br><br>
					<div class="table-responsive">
					    <table id="table_reserve_view" class="table table-hover table table-striped">
					        <thead>
					            <tr>
					                <th>Transcation ID</th>
					                <th>Delivery date</th>
					                <th>Status</th>
					                <th>Action</th>
					            </tr>
					        </thead>
					        <tbody>
					        <?php
					        	foreach ($reserve->result() as $row) {
									$transactionID = $row->transactionID;
									$name = $row->Name;
									$delivery_date=  $row->transaction_delivery_date;
									echo'<tr>
							                <td>' . $transactionID . '</td>
							                <td>' . $delivery_date . '</td>
							                <td>Pending</td>
							                <td><a href="' .base_url() .'view/view_order/'. $transactionID .'" class="btn btn-success btn-xs">View</a></td>
							            </tr>';
								}
							?>
					        </tbody>
					    </table>
					    
						<?php
						
							
						?>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
