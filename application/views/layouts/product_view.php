<div class="col-xs-6">
	<div class="middlebar">

		<div class="row">
			<div class="col-md-12">
				<?php
					foreach ($product_details as $object) {

						$id = $object->prodID;
						$name = $object->name;
						$price = $object->price;
						//$quantity = $object->quantity;
						$colorname = $object->colorname;
						$color_id = $object->colorID;
						$description = $object->description;

						$picture = 'images/product/' . $id . '/' . $object->colorID . '/';
					}
				?>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8">
				<?php
					echo '<label>'.$name.'</label><br>
						<label>Price:&#8369;'.number_format($price, 2).'</label>';
				?>
			</div>

		</div>



		<div class="row">
			<div id="description" class="col-md-8">
				Description: 
				<?php
					echo $description;
				?>
			</div>

		</div>


		<div class="row">
			<div class="col-md-12">
				<?php
					echo '<div id="displayzoom" class="col-xs-6">
							<label>Front view
								<img id="img_01" src="' . base_url() . $picture . 'front.png" data-zoom-image="' . base_url() . $picture . 'front.png" width="200" height="300" />
							</label>
						</div>';


					

					echo '<div id="displayzoom" class="col-xs-6">
							<label>Back view</label>
								<img id="img_02" src="' . base_url() . $picture . 'back.png" data-zoom-image="' . base_url() . $picture . 'back.png" width="200" height="300" />
							
						</div>';

					

					echo '<div id="displayzoom" class="col-xs-6">
					
							<label>Left view</label>
								<img id="img_03" src="'. base_url() . $picture . 'left.png" data-zoom-image="' . base_url() . $picture.'left.png" width="200" height="300" />
							
						</div>';

					

					echo '<div id="displayzoom" class="col-xs-6">
							<label>Right view</label>
								<img id="img_04" src="' . base_url() . $picture.'right.png" data-zoom-image="' . base_url() . $picture.'right.png" width="200" height="300" />
							
						</div>';

				?>
			</div>
		</div>			
	</div>
</div>

<div class="col-xs-3">
	

	<form method="POST" name="add_to_cart_form" id="add_to_cart_form" action="<?php echo base_url();?>cart/add">
		<div id="div_color" class="row">
			<div class="col-xs-12">
				Available color:

				<select id="available_color" name="available_color"  class="form-control">
					<?php
						
						foreach ($available_color as $object) {
							$colorID = $object->colorID;
							$color = $object->list_colorname;

							if($colorID == $color_id){
								echo '<option value="' . $colorID . '" selected>' . $color . '</option>';
							}else{
								echo '<option value="' . $colorID . '">' . $color . '</option>';	
							}
						}		
					?>
				</select>
			</div>
		</div>


		<div id="div_quantity" class="row">
			<div class="col-xs-12">
				
			    Quantity:
			    <?php
			    	foreach ($available_quantity as $object) {
						$quantity = $object->quantity;
					}
					
					if($quantity < 1){
						echo 'Temporarily not available';
					}else{
						echo '<select id="quantity" name="quantity" class="form-control">';
						echo'<option value="">Choose..</option>';
				    	for($a= 1; $a <= $quantity; $a++){
				    		
							
				    		echo'<option value="'. $a . '">' . $a .'</option>'; 
				    		
				    	}
				    	
				    	echo '</select>';
					}
			    	
			    	
			    ?>
			   	
			</div>
		</div>


		<div id="div_size" class="row">
			<div class="col-xs-12">
				
				Size:
				<div id="display_size">
					<!-- <select id="customsize1" name="customsize1" class="form-control">
	                <?php
	                    foreach($sizes as $object){
	                        echo '<option value="' . $object->sizeID .'">' . $object->size . '</option>';
	                    }
	                ?>
	                <option value="custom">Custom Size</option>
	                </select> -->
	            </div>

	           
	            
	            <div class="row" id="custom_size">
					
	                
	            </div>
	           
			</div>
		</div>


		<div id="div_wish_list" class="row">
			<div id="wish_list" class="col-xs-6">

				<a href="#"><img width="50px" height="50px" src="<?php echo base_url();?>images/wishlist_icon.png"></a><b>Wish list</b>
			</div>
			<div class="col-xs-6">
				<input type="hidden" id="name" name="name" value="<?php echo $name;?>" />
				<input type="hidden" id="price" name="price" value="<?php echo $price;?>" />
				<input type="submit" class="fg-button teal" value="Add to cart" id="btn_add_to_cart">
			</div>
		</div>

		<div id="status">

		</div>
	</form>
</div>

<script>

		$("#quantity").change(function(){
			$("#display_size").empty();	
			var quantity = $("#quantity").val();
			for(var a = 1; a <= quantity; a++){
				var size="";	
				var id = "customsize"+a;		
				size += '<select id="' + id + '" name="' + id + '" class="form-control">';
				size += '<?php foreach($sizes as $object){
	                        echo '<option value="' . $object->sizeID .'">' . $object->size . '</option>';
	                    }?>;';
	            size += '<option value="custom">Custom Size</option>';
				size += '</select>';
				size += '<div class="row" id="custom_size' + a + '"></div>';
				$("#display_size").append(size);
				var ids = 'var id=" '+ id +'";';
				var html = '<script>' + ids + '$("#' + id + '").change(function(){';
				html += 'var size_value = $("#' + id + '").val();';

				html += 'if(size_value == "custom"){';
				
				var custom = '<div class="col-md-3">';
				custom +=		'Bust';
				custom +=			'<input type="text" name="' + id + '_s1" class="form-control" />';
				custom +=		'</div>';

				custom +=		'<div class="col-md-3">';
				custom +=			'Waist';
				custom +=			'<input type="text" name="' + id + '_s2" class="form-control" />';
				custom +=		'</div>';

				custom +=		'<div class="col-md-3">';
				custom +=			'Hips';
				custom +=			'<input type="text" name="' + id + '_s3" class="form-control" />';
				custom +=		'</div>';

				custom +=		'<div class="col-md-3">';
				/*custom +=			'size4';*/
				custom +=			'<input type="hidden" name="' + id + '_s4" class="form-control" />';
				custom +=		'</div>';

				html += 'var custom = \'' + custom + '\';';
				html += '}else{$("#custom_size' + a + '").empty();}';
				html += '$("#custom_size' + a + '").append(custom);';

				html += '});</'+ 'script>';
				$(html).appendTo(document.body);
					
			}
			

		});

		$("#customsize1").change(function(){
			var size_value = $("#customsize1").val();
			if(size_value == "custom"){
				var custom = '<div class="col-md-3">';
				custom +=		'size1';
				custom +=			'<input type="text" class="form-control" />';
				custom +=		'</div>';

				custom +=		'<div class="col-md-3">';
				custom +=			'size2';
				custom +=			'<input type="text" class="form-control" />';
				custom +=		'</div>';

				custom +=		'<div class="col-md-3">';
				custom +=			'size3';
				custom +=			'<input type="text" class="form-control" />';
				custom +=		'</div>';

				/*custom +=		'<div class="col-md-3">';
				custom +=			'size4';
				custom +=			'<input type="text" class="form-control" />';
				custom +=		'</div>';*/
			
				$("#custom_size").append(custom);

			}else{
				
			}
		});


		/*$("#customsize2").change(function(){
			alert('wew');
			var size_value = $("#customsize2").val();
			if(size_value == "custom"){
				var custom = '<div class="col-md-3">';
				custom +=		'size1';
				custom +=			'<input type="text" class="form-control" />';
				custom +=		'</div>';

				custom +=		'<div class="col-md-3">';
				custom +=			'size2';
				custom +=			'<input type="text" class="form-control" />';
				custom +=		'</div>';

				custom +=		'<div class="col-md-3">';
				custom +=			'size3';
				custom +=			'<input type="text" class="form-control" />';
				custom +=		'</div>';

				custom +=		'<div class="col-md-3">';
				custom +=			'size4';
				custom +=			'<input type="text" class="form-control" />';
				custom +=		'</div>';
				

				$("#custom_size").append(custom);

			}else{
				
			}
		});*/
		

		$("#add_to_cart_form").submit(function(evt){
			evt.preventDefault();
		
			var url = $(this).attr('action');
			var postData = $(this).serialize();

			$.post(url, postData, function(o){
				
				if(o.result == 1){
					var num = $("#cart_num").val();

					$("#cart_num").text(o.cart_number);
					$("#status").append('<div id="cart_status" class="alert alert-success"><strong>Successfully added to cart</strong></div>');
					setTimeout(function(){
						$("#cart_status").fadeOut();
					}, 3000);
					
					//Result.success(o.success);
					//var output = Template.todo(o.data[0]);
					//$("#list_todo").append(output);
					
				}else{
					$("#status").append('<div id="cart_status" class="alert alert-danger"><strong>' + o.message + 	'</strong></div>');
					setTimeout(function(){
						$("#cart_status").fadeOut();
					}, 3000);
				}
			}, 'json');
		});
</script>