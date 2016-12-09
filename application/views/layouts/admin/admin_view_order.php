<div id="cancel_view">
	<div id="box">
		<div class="box-top"><img src="<?php echo base_url();?>images/admin_images/delivery.png">Delivery List</div>
		<div class="box-panel">
			<div id="transaction_table" class="row">
			    <table id="order_list" class="table table-bordered">
			        <thead>
			            <tr>
			            	<th>Product id</th>
			                <th>Product name</th>
			                <th>Color</th>
			                <th>Size</th>
			            </tr>
			        </thead>
			        <tbody>
			        	<?php 
			        		$total = 0;
			        		$transactionID = "";
			        		foreach ($order as $object) {
			        			$transactionID = $object->transactionID;
			        			$prodID = $object->prodID;
			        			$name = $object->name;
			        			$color = $object->list_colorname;
			        			$size = $object->rent_size;
			        			$size_convert = '';	
			        			if(strpos($size, '-') == TRUE){

                                }else{
                                   $size_convert = $size;
                                }

	                            foreach($sizes as $object){
	                                if($size == $object->sizeID){
	                                	$size_convert = $object->size;
	                                }
	                            }

			        			echo '<tr>
			        					<td>' . $prodID . '</td>
						                <td>' . $name . '</td>
						                <td>' . $color . '</td>
						                <td>' . $size_convert . '</td>
				        			</tr>';
			        		}
			        	?>
			        </tbody>
			    </table>


			</div>

			<div class="row">
				<div class="col-md-2 col-md-offset-10">
					<a href="<?php echo base_url(). 'transaction/order_finish/' . $transactionID;?>" class="btn btn-success">Order Finish</a>
				</div>
			</div>
		</div>
	</div>
</div>
		

			
	</div><!--Closing-->
</div><!--Closing-->