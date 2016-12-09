<div class="col-xs-9">
	<div class="middlebar_reserve">
		<div class="row">
			<div id="box">
				<div class="box-top"><img src="<?php echo base_url();?>images/admin_images/reserved.png">Rent Transaction
				</div>
			
				<div class="box-panel">
					<br><br>
					<div class="table-responsive">
					    <table id="table_reserve_view" class="table table-hover table table-striped">
					        <thead>
					            <tr>
					                <th>Transcation ID</th>
					                <th>Secret Code</th>
					                <th>Delivery date</th>
					                <th>Action</th>
					            </tr>
					        </thead>
					        <tbody>
					        <?php
					        	foreach ($rent->result() as $row) {
									$transactionID = $row->transactionID;								
									$delivery_date=  $row->transaction_delivery_date;
									$secret_code=  $row->secret_code;
									echo'<tr>
							                <td>' . $transactionID . '</td>
							                <td>' . $secret_code . '</td>
							                <td>' . $delivery_date . '</td>
							                
							                <td><a href="' .base_url() .'view/rent_order/'. $transactionID .'" class="btn btn-success btn-xs">View</a></td>
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
