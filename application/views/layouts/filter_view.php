<div id="main">
	<div class="container-fluid">
		<div class="row">
			<div id="filter_background" class="col-xs-3">
				<div id="leftbar">
					<div id="login" class="form-group">

						<div class= "row">
							<div id="filtering"> 
								<form enctype="multipart/form-data" id="filter" action="<?php echo base_url();?>view/filter" method="POST">
									<div id="filterheader"><span class="glyphicon glyphicon-filter"></span>Filter</div>
									
										<div id="filter_message"></div>
										<div id="category">
											Category
											<select id="category_filter" name="category_filter" class="form-control">
												<option value="">Choose..</option>
												<?php

													foreach($product_category as $object) {
														$category = $object->category;
														$categoryID = $object->categoryID;
				
														echo '<option value="'. $categoryID .'">'. $category .'</option>';
													}
												?>
											</select>
											
											Subcategory
											<select id="subcategory" name="subcategory" class="form-control">
												<option value="">Choose....</option>
												
											</select>
												
										</div>
										<?php


										?>
										<div id="color" class="col-md-12">
										Color:<br>
											<?php

												foreach($color as $object) {
													$list_colorID = $object->list_colorID;
													$list_colorname = $object->list_colorname;
													$hex_value = $object->hex_value;
													
													echo '<div class="div_check" style="display: inline-block;height: 30px;width: 30px;margin-left:5px;background-color:' . $hex_value . ';">
															<input class="color_checkbox" type="checkbox" name="colorlist[]" value="' . $list_colorID . '">
														</div>';
													
												}
											?>
											
											
										</div>
										

										<div id="pricerange" class="col-md-8">
											<div class="divprice">
											Lowest Range
												<input type="range" min="1000" max="20000" id="pricelow" onchange="fetch()" />
												<input type="text" id="low" name="low" class="form-control" />
											</div><br>
											
											<div class="divprice">Highest Range
												<input type="range" min="10000" max="20000" id="pricehigh" onchange="fetch1()" />
												<input type="text" id="high" name="high" class="form-control" />
											</div>
										</div>
									</div>
									<div id="btnfilter" class="col-md-5 col-md-offset-6">
										<input type="submit" value="Filter" class="form-control">
									</div>					
								</form>
							</div>
						</div>
					</div>
				</div>
			
<script type="text/javascript">
	$(document).ready(function(){
		/*var validator = $("#filter").bootstrapValidator({
			framework: 'bootstrap',

			feedbackIcons: {
				valid: "glyphicon glyphicon-ok",
				invalid: "glyphicon glyphicon-remove",
				validating: "glyphicon glyphicon-refresh"
			},
			fields: {
				category_filter: {	
					validators: {
						notEmpty: {
							message: 'Category is required'
						}
					}
				},

				subcategory: {
					validators: {
						notEmpty: {
							message: 'Subcategory is required'
						}
					}
				},
				low: {
					validators: {
						notEmpty: {
							message: 'Lowest price is required'
						}
					}
				},

				high: {
					validators: {
						notEmpty: {
							message: 'Highest price is required'
						}
					}
				}
			}
		});*/

	/*$("#filter").submit(function(evt){
        evt.preventDefault();
        
        var category = $("#category_filter").val();
        var subcategory = $("#subcategory").val();
        var color = $(".color_checkbox").is(":checked");
        var low = $("#low").val();
        var high = $("#high").val();

        if(category == ''){
        	var html= '<div id="status" class="alert alert-danger">Please choose category<div>';
        	$("#filter_message").empty();
			$("#filter_message").append(html);        	
		}else if(subcategory == ''){
			var html= '<div id="status" class="alert alert-danger">Please choose subcategory</div>';
        	$("#filter_message").empty();
			$("#filter_message").append(html);
        }else if(color == false){
        	var html= '<div id="status" class="alert alert-danger">Please pick color</div>';
        	$("#filter_message").empty();
			$("#filter_message").append(html);        	
        }else if(low == ''){
        	var html= '<div id="status" class="alert alert-danger">Please put lowest price</div>';
        	$("#filter_message").empty();
			$("#filter_message").append(html);        	
        }else if(high == ''){
        	var html= '<div id="status" class="alert alert-danger">Please put highest price</div>';
        	$("#filter_message").empty();
			$("#filter_message").append(html);        	
        }else{
        	$("#filter").submit();
        }
    });*/

	

	
		var category = "";
		$("#category_filter").change(function(){
			loadsubcategory();
		});

		function loadsubcategory(){
		category = $("#category_filter").val();
			$.get('<?php echo base_url();?>'+'view/subcategory?subcategory=' + category, function(o){
				var design = '';
				for(var i = 0; i < o.length; i++){
					design += '<option class="choice" value="' + o[i].subcategoryID + '">' + o[i].subcategory + '</option>';
				}
				
				$(".choice").remove();
				$("#subcategory").append(design);
			}, 'json');
		}
	});

</script>			