<div id="delivery_view">
	<?php
		$check_login = $this->session->userdata('renee_salud_admin');
		$s = $this->session->userdata('renee_salud_admin');
		$data['user_level'] =  $s['user_level'];

		if($data['user_level'] == 'staff'){
			echo '<div id="status1" class="alert alert-success">You don\'t have access to this. Only administrator</div>';
		}else{
	?>
	<div id="box">
		<div class="box-top"><img src="<?php echo base_url();?>images/admin_images/delivery.png">Delivery List</div>
		<div class="box-panel">
		<div id="product_movement_table" class="row">
		    <table id="product_movement_list" class="table table-bordered">
		        <thead>
		            <tr>
		            	<th>Product id</th>
		            	<th>Username</th>
		                <th>Action</th>
		                <th>Product changes</th>
		                <th>Date</th>
		               
		            </tr>
		        </thead>
		        <tbody>
		        	<?php 
		        		
		        		
		        		foreach ($product_movement->result() as $object) {
		        			$prodID = $object->prodID;
		        			$username = $object->username;
		        			$action = $object->action;
		        			$movement = $object->movement;
		        			$movement_date = $object->movement_date;
		        			echo '<tr>
		        					<td>' . $prodID . '</td>
		        					<td>' . $username . '</td>
					                <td>' . $action . '</td>
					                <td>' . $movement . '</td>
					                <td>' . $movement_date . '</td>
			        			</tr>';
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

		<div class="row">
			<div class="col-md-2 col-md-offset-10">
				
			</div>
		</div>


	<?php
		}
	?>
</div>
			
	</div><!--Closing-->
</div><!--Closing-->