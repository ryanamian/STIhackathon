	<div id="product_info">
		<div id="box">
			<div class="box-top">Product Information</div>
			<div class="box-panel">
				<div id="info"></div>
					<hr class="colorgraph">
					<div class="row">
						<div class="col-xs-4">
							<?php
								foreach ($info as $object) {
									$prodID = $object->prodID;
									$name = $object->name;
									$price = $object->price;
									$subcategory = $object->subcategory;
									$category = $object->category;
									$description = $object->description;
								}
							?>
							<img  width='250px' height='400px' src="<?php echo base_url();?>images/product/<?php echo $prodID;?>/main.png">
						</div>

						<div class="col-xs-8">
							<table id="product_info_table">

								<tr><td class="product_info_col1">Name:</td><td><label id="name_label"><?php echo $name;?></label><a href="" data-toggle="modal" data-target="#product_name_modal"><span class="glyphicon glyphicon-pencil"></span></a></td></tr>
									<div id="product_name_modal" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
									      		<div class="modal-header">
									        		<button type="button" class="close" data-dismiss="modal">&times;</button>
									        		<h4 class="modal-title">Update name</h4>
									     		 </div>

									     		 <div class="modal-body">
									      			<form enctype="multipart/form-data" id="update_name" method="POST" class="form-horizontal" action="<?php echo base_url();?>admin/update_product_name">
									      				<div id="message_name"></div>
														<div class="form-group">
															<label class="col-md-4 control-label" for="product_name">Name</label>
															<div class="col-md-8">
																<input type="text" class="form-control" id="product_name" name="product_name" placeholder="Change name" value="<?php echo $name;?>" />
																<input type="hidden" id="prodID" name="prodID" value="<?php echo $prodID;?>" />
															</div>
														</div>

														<div class="form-group">
														
																<button type="submit" id="product_name_btn" class="btn">Update</button>
															
														</div>
													</form>	
									      		</div> 
									    	</div>
										</div>
									</div>

								<tr><td class="product_info_col1">Price:</td><td><label id="price_label">&#8369; <?php echo $price;?></label><a href="" data-toggle="modal" data-target="#product_price_modal"><span class="glyphicon glyphicon-pencil"></span></a></td></tr>
									<div id="product_price_modal" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
									      		<div class="modal-header">
									        		<button type="button" class="close" data-dismiss="modal">&times;</button>
									        		<h4 class="modal-title">Update price</h4>
									     		 </div>

									     		 <div class="modal-body">
									      			<form id="update_price" method="POST" class="form-horizontal" action="<?php echo base_url();?>admin/update_product_price">
									      				<div id="message_price"></div>
														<div class="form-group">
															<label class="col-md-4 control-label" for="product_price">Price</label>
															<div class="col-md-8">
																<input type="number" class="form-control" id="product_price" name="product_price" placeholder="Change price" value="<?php echo $price;?>" />
																<input type="hidden" id="prodID" name="prodID" value="<?php echo $prodID;?>" />
															</div>
														</div>

														<div class="form-group">
														
																<button type="submit" id="product_price_btn" class="btn">Update</button>
															
														</div>
													</form>	
									      		</div> 
									    	</div>
										</div>
									</div>
								<tr><td class="product_info_col1">Category:</td><td><label id="category_label"><?php echo $category;?></label><a href="" data-toggle="modal" data-target="#category_name_modal"><span class="glyphicon glyphicon-pencil"></span></a></td></tr>
									<div id="category_name_modal" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
									      		<div class="modal-header">
									        		<button type="button" class="close" data-dismiss="modal">&times;</button>
									        		<h4 class="modal-title">Update </h4>
									     		 </div>

									     		 <div class="modal-body">
									      			<form id="update_category" method="POST" class="form-horizontal" action="<?php echo base_url();?>admin/update_product_category">
									      				<div id="message_category"></div>
														<div class="form-group">
															<label class="col-md-2 control-label" for="category">Category:</label>
															<div class="col-md-4">
																<select id="category" name="category" class="form-control">
																	<option value="">Choose..</option>
																		<?php

																			foreach($product_category as $object) {
																				$category = $object->category;
																				$categoryID = $object->categoryID;
								
																				echo '<option value="'. $categoryID .'">'. $category .'</option>';
																			}
																		?>
																</select>
																<input type="hidden" id="prodID" name="prodID" value="<?php echo $prodID;?>" />
															</div>


															<label class="col-md-2 control-label" for="subcategory">Subcategory:</label>
															<div class="col-md-4">
																<select id="subcategory" name="subcategory" class="form-control">
																	<option value="">Choose..</option>
																		
																</select>
															</div>
														</div>

														<div class="form-group">
															<button type="submit" id="product_category_btn" class="btn">Update</button>
														</div>
													</form>	
									      		</div> 
									    	</div>
										</div>
									</div>
								<tr><td class="product_info_col1">Subcategory:</td><td><label id="subcategory_label"><?php echo $subcategory;?></label></td></tr>
								<tr><td>Description: </td><td id="description_txt"><?php echo $description;?> <a href="" data-toggle="modal" data-target="#product_description_modal"><span class="glyphicon glyphicon-pencil"></span></a></td></tr>
								
								<!-- description modal -->
								<div id="product_description_modal" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
								      		<div class="modal-header">
								        		<button type="button" class="close" data-dismiss="modal">&times;</button>
								        		<h4 class="modal-title">Update description</h4>
								     		 </div>

								     		 <div class="modal-body">
								      			<form id="update_description" method="POST" class="form-horizontal" action="<?php echo base_url();?>admin/update_product_description">
								      				<div id="message_description"></div>
													<div class="form-group">
														<label class="col-md-4 control-label" for="product_description">Description</label>
														<div class="col-md-8">
															<textarea class="form-control" rows="5" maxlength="200" name="description" id="description" placeholder="Description"><?php echo $description;?></textarea>
															<input type="hidden" id="prodID" name="prodID" value="<?php echo $prodID;?>" />
														</div>
													</div>

													<div class="form-group">
													
															<button type="submit" id="product_description_btn" class="btn">Update</button>
														
													</div>
												</form>	
								      		</div> 
								    	</div>
									</div>
								</div>
							</table>

							
						</div>



						<div  id="color_info" class="col-xs-12">

							<div class="col-xs-12"><div class="box-top">List of product color<a href="" data-toggle="modal" data-target="#add_color"><span class="glyphicon glyphicon-plus-sign">Add</span></a></div>
								<div id="add_color" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
								      		<div class="modal-header">
								        		<button type="button" class="close" data-dismiss="modal">&times;</button>
								        		<h4 class="modal-title">Add product color</h4>
								     		 </div>

								     		 <div class="modal-body">
								      			<form enctype="multipart/form-data" id="add_color_form" method="POST" class="form-horizontal" action="<?php echo base_url();?>admin/add_product_color">
													<div class="form-group">
														<div id="message_color"></div>
														<div class="col-md-8">
															<label for="select_color">Choose color:</label>
															<select id="select_color" name="select_color" class="form-control">
															<?php
																foreach ($list_of_color as $object) {
																	$list_colorID = $object->list_colorID;
																	$colorname = $object->list_colorname;
																		
																	echo '<option value="' . $list_colorID . '">' . $colorname . '</option>';
																}
															?>
															</select>
															<a href="" data-toggle="modal" data-target="#add_list_color_modal">Add color</a>
														</div>
														
														<div class="col-md-4">
															<label for="quantity">Quantity:</label>
															<input type="number" id="quantity" name="quantity" class="form-control" />
														</div>
													</div>

													<div class="form-group">
														<div class="col-md-6">
															<label for="front_pic">Front picture</label>
															<input type="file" name="front_pic" id="front_pic">
														</div>
														<div class="col-md-6">
															<label for="back_pic">Back picture</label>
															<input type="file" name="back_pic" id="back_pic">
														</div>
													</div>

													<div class="form-group">
														<div class="col-md-6">
															<label>Left picture</label>
															<input type="file" id="left_pic" name="left_pic">
														</div>
														<div class="col-md-6">
															<label for="right_pic">Right picture</label>
															<input type="file" name="right_pic" id="right_pic">
														</div>
													</div>

													<div class="form-group">
														<input type="hidden" id="prodID" name="prodID" value="<?php echo $prodID;?>" />
														<button type="submit" id="add_color_btn" class="btn">Add</button>
													</div>
												</form>	
								      		</div> 
								    	</div>
									</div>
								</div>

								<div id="add_list_color_modal" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
								      		<div class="modal-header">
								        		<button type="button" class="close" data-dismiss="modal">&times;</button>
								        		<h4 class="modal-title">Add color list</h4>
								     		 </div>

								     		 <div class="modal-body">
								      			<form id="add_list_color" method="POST" class="form-horizontal" action="<?php echo base_url();?>admin/add_list_color">
								      				<div id="message_list_color"></div>
													<div class="form-group">
														
														<div class="col-md-6">
															Color name:<input type="text" class="form-control" id="color_name" name="color_name" placeholder="Color name" />
															
														</div>
														<div class="col-md-6">
															Hex value:<input type="text" class="form-control" id="hex_value" name="hex_value" placeholder="Example: #000000" />
															
														</div>
													</div>

													<div class="form-group">
													
															<button type="submit" id="add_color_list_btn" class="btn">Add color</button>
														
													</div>
												</form>	
								      		</div> 
								    	</div>
									</div>
								</div>

								<?php

									$message = $this->session->flashdata('message');

									if($message == '1'){
										echo '<div class="alert alert-success">
												<strong>Product color successfully added!!!</strong>
											</div>';
										
									}else if($message == '0'){
										echo '<div class="alert alert-danger">
												<strong>Error try again later or contact your administrator!!!</strong>
											</div>';
									}

									$message = $this->session->flashdata('message_update_quantity');

									if($message == '1'){
										echo '<div class="alert alert-success">
												<strong>Color quantity updated successfully!!!</strong>
											</div>';
										
									}else if($message == '0'){
										echo '<div class="alert alert-danger">
												<strong>Error try again later or contact your administrator!!!</strong>
											</div>';
									}
								?>
							<div class="box-panel">
								<div class="row">
									<div class="col-xs-3">Color</div>
									<div class="col-xs-3">Quantity</div>
									<div class="col-xs-3">Available</div>
									<div class="col-xs-3"></div>
								</div>
							
								
									<?php
										foreach ($color as $object) {
											echo '<div id="tbl_color" class="row">';
											$colorID = $object->colorID;
											$colorname = $object->list_colorname;
											$quantity = $object->quantity;
											$out_product = $object->out_product;
											$available = $quantity - $out_product;
											echo '<div class="col-xs-3">' . $colorname . '</div>
													<div class="col-xs-3">' . $quantity . '</div>
													<div class="col-xs-3">' . $available . '</div>
													<div class="col-xs-3"><a href="" data-toggle="modal" data-target="#' . $colorID . '"><span class="glyphicon glyphicon-plus-sign"></span></a></div>';

											echo 		'<div id="' . $colorID . '" class="modal fade" role="dialog">
															<div class="modal-dialog">
																<div class="modal-content">
														      		<div class="modal-header">
														        		<button type="button" class="close" data-dismiss="modal">&times;</button>
														        		<h4 class="modal-title">Add product color</h4>
														     		 </div>

														     		 <div class="modal-body">
														      			<form id="update_quantity" method="POST" class="form-horizontal" action="'. base_url() . 'admin/update_color_quantity">
														      				
																			<div class="form-group">
																				
																				<div class="col-md-8">
																					<labe for="quantity">' . $colorname . ' Quantity:</label>
																					<input type="number" name="update_quantity" id="update_quantity" class="form-control" value="' . $quantity . '" />
																					<input type="hidden" id="prodID" name="prodID" value="' . $prodID . '" />
																					<input type="hidden" name="colorID" id="colorID" class="form-control" value="' . $colorID . '" />

																				</div>
																			</div>

																			<div class="form-group">
																			
																					<button type="submit" id="add_color_btn" class="btn">Update</button>
																				
																			</div>
																		</form>	
														      		</div> 
														    	</div>
															</div>
														</div>';
											echo '</div>';
										}
									?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>

<script type="text/javascript">	
	$("#update_name").submit(function(evt){
		evt.preventDefault();
		var name = $("#product_name").val();
		alert(name);
		//alert(name);
		var url = $(this).attr('action');
		var postData = $(this).serialize();

		$.post(url, postData, function(o){
			
			if(o.result == 1){
				$("#name_label").empty();
				$("#name_label").append(name);
				$("#message_name").append('<div id="name_status" class="alert alert-success"><strong>Name successfully updated!</strong></div>');
				setTimeout(function(){
					$("#name_status").fadeOut();
				}, 1000);

				setTimeout(function(){
  					$('#product_name_modal').modal('hide');
				}, 2000);
				//$("#product_price_modal").modal('hide');
				//Result.success(o.success);
				//var output = Template.todo(o.data[0]);
				//$("#list_todo").append(output);
		//		alert('ok');
				
			}else{
				alert(o.message);
				//$("#status").append('<div id="cart_status" class="alert alert-danger"><strong>' + o.message + 	'</strong></div>');
				//setTimeout(function(){
				//	$("#cart_status").fadeOut();
				//}, 3000);
				

			}
		}, 'json');
	});

	$("#update_price").submit(function(evt){
		evt.preventDefault();
		var price = $("#product_price").val();
		var url = $(this).attr('action');
		var postData = $(this).serialize();

		$.post(url, postData, function(o){
			
			if(o.result == 1){
				$("#price_label").empty();
				$("#price_label").append('&#8369;'+price);
				$("#message_price").append('<div id="price_status" class="alert alert-success"><strong>Price successfully updated!</strong></div>');
				setTimeout(function(){
					$("#price_status").fadeOut();
				}, 1000);

				setTimeout(function(){
  					$('#product_price_modal').modal('hide');
				}, 2000);

				
			}else{
				$("#message_price").append('<div id="price_status" class="alert alert-danger"><strong>' + o.message + 	'</strong></div>');
				setTimeout(function(){
					$("#cart_status").fadeOut();
				}, 3000);
			}
		}, 'json');
	});


	$("#update_category").submit(function(evt){
		evt.preventDefault();
		var category = $("#category").val();
		var subcategory = $("#subcategory").val();
		var sub = $("#subcategory option[value='" + subcategory+"']").text();
		var cat = $("#category option[value='" + category+"']").text();

		var url = $(this).attr('action');
		var postData = $(this).serialize();

		$.post(url, postData, function(o){
			
			if(o.result == 1){
				$("#category_label").empty();
				$("#category_label").append(cat);
				$("#subcategory_label").empty();
				$("#subcategory_label").append(sub);
				$("#message_category").append('<div id="category_status" class="alert alert-success"><strong>Price successfully updated!</strong></div>');
				setTimeout(function(){
					$("#category_status").fadeOut();
				}, 1000);
				setTimeout(function(){
  					$('#category_name_modal').modal('hide');
				}, 2000);
				//Result.success(o.success);
				//var output = Template.todo(o.data[0]);
				//$("#list_todo").append(output);
				
			}else{
				$("#message_category").append('<div id="category_status" class="alert alert-danger"><strong>' + o.message + 	'</strong></div>');
				setTimeout(function(){
					$("#category_status").fadeOut();
				}, 3000);
				

			}
		}, 'json');
	});

	$("#update_description").submit(function(evt){
		evt.preventDefault();
		var description = $("#description").val();

		var url = $(this).attr('action');
		var postData = $(this).serialize();

		$.post(url, postData, function(o){
			
			if(o.result == 1){
				$("#description_txt").empty();
				description +=  '<a href="" data-toggle="modal" data-target="#product_description_modal"><span class="glyphicon glyphicon-pencil"></span></a>';
				$("#description_txt").append(description);
			
				$("#message_description").append('<div id="description_status" class="alert alert-success"><strong>Description successfully updated!</strong></div>');
				setTimeout(function(){
					$("#description_status").fadeOut();
				}, 1000);
				setTimeout(function(){
  					$('#product_description_modal').modal('hide');
				}, 2000);
				
				
			}else{
				$("#message_description").append('<div id="description_status" class="alert alert-danger"><strong>' + o.message + 	'</strong></div>');
				setTimeout(function(){
					$("#description_status").fadeOut();
				}, 3000);
				

			}
		}, 'json');
	});

	$("#add_list_color").submit(function(evt){
		evt.preventDefault();
		var color_name = $("#color_name").val();

		var url = $(this).attr('action');
		var postData = $(this).serialize();

		$.post(url, postData, function(o){
			
			if(o.result == 1){
				var color = '<option value="'+ o.list_colorID +'">' + color_name + '</option>';
				$("#select_color").append(color);
				$("#message_list_color").append('<div id="color_status" class="alert alert-success">Color successfully added!</div>');
				setTimeout(function(){
					$("#color_status").fadeOut();
				}, 1000);

				setTimeout(function(){
  					$('#add_list_color_modal').modal('hide');
				}, 2000);

				
			}else{
				$("#message_price").append('<div id="price_status" class="alert alert-danger"><strong>' + o.message + 	'</strong></div>');
				setTimeout(function(){
					$("#cart_status").fadeOut();
				}, 3000);
			}
		}, 'json');
	});
	
	$("#category").change(function(){
		alert('ok');
		loadsubcategory();
	});

	function loadsubcategory(){
	category = $("#category").val();
	alert('loading subcategory');

		$.get('<?php echo base_url();?>'+'admin/subcategory?subcategory=' + category, function(o){
			var design = '';
			for(var i = 0; i < o.length; i++){
				design += '<option class="choice" value="' + o[i].subcategoryID + '">' + o[i].subcategory + '</option>';
			}

			//design += '</select>';
			$(".choice").remove();
			$("#subcategory").append(design);
		}, 'json');
}


</script>
	</html>
