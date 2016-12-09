<div class="col-xs-9">
	<div class="middlebar_cancel">
		<div class="row">
			<div id="box">
				<div class="box-top">Cancelled Item
				</div>
				<div class="box-panel">
					<br><br>
					<div class="table-responsive">
					    <table id="table_cancel_view" class="table table-hover table table-striped">
					        <thead>
					            <tr>
					                <th>Product Name</th>
					                <th>Price</th>
					                <th>Penalty</th>
					                <th>Refund</th>
					                <th>Canceled Date</th>
					            </tr>
					        </thead>
					        <tbody>
					        <div id="cancel_status"></div>
					        <?php
					        	foreach($cancel as $object) {
					        		$name = $object->name;
					        		$order_price = $object->product_price;
					        		$penalty = $object->penalty;
									$remaining = $object->remaining;
									$cancel_date = $object->cancel_date;
									
									echo'<tr>
							                <td>' . $name . '</td>
							                <td>&#8369;' . number_format($order_price, 2) . '</td>
							                <td>&#8369;' . number_format($penalty, 2) . '</td>
							                <td>&#8369;' . number_format($remaining, 2) .'</td>
							                <td>'. $cancel_date .'</td>
							            </tr>';
								}
							?>
					        </tbody>
					    </table>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
