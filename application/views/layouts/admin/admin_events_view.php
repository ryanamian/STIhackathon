	<div id="product_view">
			
				
		<div id="box">
			<div class="box-top"><img src="<?php echo base_url();?>images/admin_images/member.png">Event List<a href="<?php echo base_url();?>admin/add_events"><span class="glyphicon glyphicon-plus-sign">Add</span></a>
			</div>
			<div id="search">
				<form method="POST" action="<?php echo base_url();?>admin/search_product" class="form-vertical">
						<div class="form-group">
							<div class="col-md-3 col-md-offset-8">
								<br><input type="text" placeholder="Search" id="txtsearch" name="txtsearch" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-1">
								<br><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
							</div>
						</div>

				</form>
			</div>
			<div class="box-panel">
				<br><br>
				<div class="table-responsive">
				   <table id="table_product_view" class="table table-hover table table-striped">
				        <thead>
				            <tr>
				                <th>Event ID</th>
				                <th>Event title</th>
				                <th>Action</th>
				            </tr>
				        </thead>
				        <tbody>
				        <?php
				        	/*foreach ($events->result() as $row) {
								$prodID = $row->prodID;
								$name = $row->name;
								$price =  $row->price;

								echo'<tr>
						                <td>' . $prodID . '</td>
						                <td>' . $name . '</td>
						                <td><a href="'. base_url() . 'admin/product_info/' . $prodID . '" class="btn btn-success btn-xs">View</button></td>
						            </tr>';
							}*/
						?>
				        </tbody>
				    </table>
					<?php
					
						/*echo '<div id="page" class="col-xs-12">';
						echo $this->pagination->create_links();
						echo '</div><br />'*/
					?>
				</div>
			</div>
		</div>
	</div>
</div>