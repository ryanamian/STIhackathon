		<div id="return_product_view">
			<div id="box">
				<div class="box-top"><img src="<?php echo base_url();?>images/admin_images/delivery.png">Return List
				</div>
				<div class="box-panel">
					<br><br>

					<div class="table-responsive">
						    <table id="table_return_view" class="table table-hover table table-striped">
						        <thead>
						            <tr>
						                <th>Product id</th>
						                <th>Product name</th>
						                <th>Color</th>
						                <th>Size</th>
						                <th>Deposit</th>
						                <th>Penalty</th>
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
							<?php
							
							/*	echo '<div id="page" class="col-xs-12">';
								echo $this->pagination->create_links();
								echo '</div><br />'*/
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>