	<div id="product_view">
			
				
		<div id="box">
			<div class="box-top"><img src="<?php echo base_url();?>images/admin_images/member.png">Product List<a href="<?php echo base_url();?>admin/add_product"><span class="glyphicon glyphicon-plus-sign">Add</span></a>
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
					                <th>Product ID</th>
					                <th>Name</th>
					                <th>Price</th>
					                <th>Action</th>
					            </tr>
					        </thead>
					        <tbody>
					        <?php
					        	foreach ($query->result() as $row) {
									$prodID = $row->prodID;
									$name = $row->name;
									$price =  $row->price;

									echo'<tr>
							                <td>' . $prodID . '</td>
							                <td>' . $name . '</td>
							                <td>' . $price . '</td>
							                <td><a href="'. base_url() . 'admin/product_info/' . $prodID . '" class="btn btn-success btn-xs">View</button></td>
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
				<!-- <div id="tableheader">
					<ul>
					<li class="col-xs-3">Product ID</li>
					<li class="col-xs-3">Name</li>
					<li class="col-xs-3">Price	</li>
					<li class="col-xs-3">&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp</li>

					</ul>

				</div>
				<br>

				<?php
					echo '<div class="product_list_row" id="prof">';
					$count = 1;
					foreach ($query->result() as $row) {
						$prodID = $row->prodID;
						$name = $row->name;
						$price =  $row->price;
							
						if($count%2 == 1){
							echo'<a href="' . base_url() . 'admin/product_info/' . $prodID . '"><div class="first">
									<div class="col-xs-3">
									
										<label>'.$prodID.'</label>
									</div>

									<div class="col-xs-3">
										<label>'.$name.'</label>
									</div>

									<div class="col-xs-3">
										<label>&#8369;'.$price.'</label>
									</div>

									<div class="col-xs-1">
										<label><a href="delete.php?id='.base64_encode($prodID).'"> <i class="glyphicon glyphicon-remove"></i></a>
									</div>
					
								</div></a>';
						}else if($count%2 == 0){
							echo '<a href="' . base_url() . 'admin/product_info/' . $prodID . '"><div class="second">
									<div class="col-xs-3">
								
										<label>'.$prodID.'</label>
									</div>

									<div class="col-xs-3">
										<label>'.$name.'</label>
									</div>

									<div class="col-xs-3">
										<label>&#8369;'.$price.'</label>
									</div>

									<div class="col-xs-1">
										<label><a href="delete.php?id='.base64_encode($prodID).'"> <i class="glyphicon glyphicon-remove"></i></a>
									</div>
										
								</div></a>';
						}
						
						$count++;

					}
					echo'</div>';

					echo '<div id="page" class="col-xs-12">';
					echo $this->pagination->create_links();
					echo '</div><br /><br />'
				?>
				
			</div> -->
		</div>
	</div>
</div>