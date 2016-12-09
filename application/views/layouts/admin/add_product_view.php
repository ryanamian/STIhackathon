	<div id="product_view">
		<div id="box">
			<div class="box-top">Add item info</div>
			<div class="box-panel">
				<div id="info">Item Information</div>
				<hr class="colorgraph">
					<?php

						$message = $this->session->flashdata('message');
						$prodID = $this->session->flashdata('prodID');

						if($message == '1'){
							echo '<div class="alert alert-success">
									<strong>Product successfully added!!!</strong>

								</div>';
							
						}else if($message == '0'){
							echo '<div class="alert alert-danger">
									<strong>Error try again later or contact your administrator!!!</strong>
								</div>';
						}
					?>

					<div id="redirect_modal" class="modal fade" role="dialog">
						<div class="modal-dialog">

					    <!-- Modal content-->
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						        <h4 class="modal-title">Redirect</h4>
						      </div>
						      <div class="modal-body">
						      	<form enctype="multipart/form-data" id="regcat" method="POST" class="form-vertical">
									<div id="wew">
										<div id="message1">
											<div class="redirect_info">Proceed to adding colors?</div>
											<div id="redirect_btn"><a id="redirect_color" href="<?php echo base_url();?>/admin/product_info/<?php echo $prodID;?>" class="btn btn-success btn-sm">Yes</a><a id="redirect_cancel" type="button" class="btn btn-default btn-sm" data-dismiss="modal">No</a></div>
										</div>
									</div>
								</form>
						      </div>
						    </div>
						</div>
					</div>

					<script>
						var wew = '<?php echo $message;?>';
						if(wew == '1'){
							$("#redirect_modal").modal('show');
						}
					</script>
				<form enctype="multipart/form-data" id="reg" action="<?php echo base_url();?>admin/add_product_process" method="POST" class="form-vertical">
					<div id="first">


						<div class="form-group">
							
							<div class="col-xs-4 adjust">

								<label for="category">Category:</label>
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
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-2 adjust">
								<label></label>
								<a data-toggle="modal" data-target="#categoryModal" class="btn">New category</a>
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-4 adjust" id="subcat">
								<label for="subcategory">Subcategory</label>
								<select id="subcategory" name="subcategory" class="form-control">
									<option value="">Choose....</option>
									
								</select>
							</div>
						</div>



						<div class="col-xs-2 adjust">
							<label></label>
							<a id="link_sub"data-target="#subcategoryModal" class="btn">New Sub-category</a>	
						</div>

						<div class="form-group">
							
							<div  class="col-md-6 adjust">
								<label for="pname">Product name: </label>
								<input type="text" class="form-control" id="pname" name="pname" placeholder="Type product name here..." />
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 adjust">
								<label for="price">Renting Price:</label>
								<input type="number" name="price" id="price" class="form-control" placeholder="Type price here..." />
							</div>
						</div>	
						

						
						
						<div class="form-group">
							
							<div class="col-xs-6 adjust">
								Description
								<textarea class="form-control" rows="5" maxlength="200" name="description" id="description" placeholder="Description"></textarea>
								
							</div>
						</div>		
						<div class="form-group">
							<div class="col-xs-6 adjust">
								<label>Upload Display picture</label>
								<input type="file" id="displaypic" name="displaypic">
							</div>
						</div>						
					</div><br>
					<input type="submit" class="btn btn-success" id="btnsubmit" value="Submit">
				</form>
				
			</div>


			<div id="categoryModal" class="modal fade" role="dialog">
				<div class="modal-dialog">

			    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Adding new category</h4>
				      </div>
				      <div class="modal-body">
				      	<form enctype="multipart/form-data" id="regcat" method="POST" class="form-vertical">
							<div id="wew">
								<div id="message1">
									
								</div>
								<div class="form-group">
									<div class="col-xs-6">
										<label for="addcategory">Category:</label><br>
										<input type="text" class="form-control" id="addcategory" name="addcategory">		
									</div>
								</div>
							

							
								<div class="col-xs-3"><br>
									<input type="button" class="btn" id="btncategory" value="Add">
								</div>		
							</div>
						</form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				</div>
			</div>

			<div id="chooseModal" class="modal fade" role="dialog">
				<div class="modal-dialog">

			    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Error Message</h4>
				      </div>
				      <div class="modal-body">
				      	<form enctype="multipart/form-data" id="regcat" method="POST" class="form-vertical">
							<div id="wew">
								<div class="alert alert-danger">Please pick category first!</div>
							</div>
						</form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				</div>
			</div>

			<!--Modal for subcategory-->

			<div id="subcategoryModal" class="modal fade" role="dialog">
				<div class="modal-dialog">
			    	<!-- Modal content-->
				    <div class="modal-content">
					    <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">Adding new Sub-category</h4>
					    </div>
				    	<div class="modal-body modalforsub">
				      	
					      	<form enctype="multipart/form-data" id="regsub" method="POST" class="form-vertical">
								
								<div id="divcategory">
									<div id="message2"></div>

									<div id="hidden_category">

									</div>
									
								</div>

								<div class="form-group">
									<div class="col-xs-6 adjust1">
										<label for="addsubcategory">Sub Category:</label>
										<input type="text" class="form-control" id="addsubcategory" name="addsubcategory">
									</div>	
								</div>

								<div class="form-group">
									<div class="col-xs-12">
										<input type="button" class="btn" id="btnsub" value="Add"><br><br>						
									</div>	
								</div>
							</form>
				    	</div>
				    	<div class="modal-footer">
				        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				    	</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>

<script>
	$(document).ready(function(){
		var validator = $("#regcat").bootstrapValidator({
			framework: 'bootstrap',

			feedbackIcons: {
				valid: "glyphicon glyphicon-ok",
				invalid: "glyphicon glyphicon-remove",
				validating: "glyphicon glyphicon-refresh"
			},
			fields : {
				addcategory: {
					validators: {
						notEmpty: {
							message: 'Category is required'
						},

						stringLength: {
							min : 3,
							max : 35,
							message: 'Please input 2 characters'
						}
					}
				},
			}
		});


		var subvalidator = $("#regsub").bootstrapValidator({
			framework: 'bootstrap',
			feedbackIcons: {
				valid: "glyphicon glyphicon-ok",
				invalid: "glyphicon glyphicon-remove",
				validating: "glyphicon glyphicon-refresh"
			},

			fields : {
				addmodalcategory: {
					validators: {
						notEmpty: {
							message: 'Category is required'
						},
					}
				},
				addsubcategory: {
					validators: {
						notEmpty: {
							message: 'Sub-category is required'
						}
					}
				},
			}

		});

		var productvalidator = $("#reg").bootstrapValidator({
			framework: 'bootstrap',
			feedbackIcons: {
				valid: "glyphicon glyphicon-ok",
				invalid: "glyphicon glyphicon-remove",
				validating: "glyphicon glyphicon-refresh"
			},

			fields:{
				pname: {
					validators: {
						notEmpty: {
							message: 'Product name required!'
						}
					}
				},
				price: {
					validators: {
						notEmpty: {
							message: 'Price is required!'
						}
					}
				},

				category: {
					validators: {
						notEmpty: {
							message: 'Category is required!'
						}
					}
				},
				subcategory: {
					validators: {
						notEmpty: {
							message: 'Sub-category is required!'
						}
					}
				},

				description: {
					validators: {
						notEmpty: {
							message: 'Description is required!'
						},
						stringLength: {
							min : 5,
							max : 200,
							message: 'Please input 2 characters'
						}

					}
				},
				displaypic: {
					validators: {
						notEmpty: {
							message: 'Picture required'
						},
						file: {
							extension: 'jpeg,jpg,png',
							type: 'image/jpeg,image/png',
							message: 'Invalid file' 
						}
					}
				}

			}
		});
	});


$("#link_sub").on('click', function(e){

	var category = $("#category").val();
	if(category == ""){
		$("#chooseModal").modal("show");
	}else{
		$("#hidden_category").empty();
		var cat = '<input type="hidden" name="addmodalcategory" id="addmodalcategory" value="' + category + '">';
		$("#hidden_category").append(cat);
		$("#subcategoryModal").modal("show");
	}
});

var category = "";
$("#category").change(function(){

	loadsubcategory();
});

$("#btncategory").click(function(){
	addcategory();
	$("#addcategory").val("");
});

$("#btnsub").click(function(){
	addsubcategory();

	$("#addmodalcategory").val("");
	$("#addsubcategory").val("");
});

function loadsubcategory(){
	category = $("#category").val();

		$.get('subcategory?subcategory=' + category, function(o){
			var design = '';
			for(var i = 0; i < o.length; i++){
				design += '<option class="choice" value="' + o[i].subcategoryID + '">' + o[i].subcategory + '</option>';
			}
			
			$(".choice").remove();
			$("#subcategory").append(design);
		});
}

function addcategory(){
	var addcat = $("#addcategory").val();
	if(addcat != ""){

		$.get("addcategory?category=" + addcat, function(o){
			var design = '';
			if(o.result == 1){
				var html = '<div id="status1" class="alert alert-success"><strong>'+o.message+'</strong></div>';
				$("#status1").remove();
				$("#message1").append(html);
				$(".form-control-feedback").css('display','none');
				//<i class="form-control-feedback glyphicon glyphicon-remove" data-bv-icon-for="addcategory" style="display: block;"></i>
				var add = '<option value="'+ o.id + '">' + addcat + '</option>';
				$("#category").append(add);
				setTimeout(function(){
					$("#message1").fadeOut();
				}, 3000);
			}else{
				var html = '<div id="status1" class="alert alert-danger"><strong>'+o.message+'</strong></div>';
				$("#status1").remove();
				$("#message1").append(html);
				$(".form-control-feedback").css('display','none');
			}

			
		}, 'json');
	}
}

function addsubcategory(){
	var addcat = $("#addmodalcategory").val();
	var addsubcat = $("#addsubcategory").val();

	if(addsubcat != ""){
		if(addcat != ""){

			$.get("addsubcategory?category=" + addcat + "&subcategory=" + addsubcat , function(o){
			var design = '';
			if(o.result == 1){
				var html = '<div id="status2" class="alert alert-success"><strong>'+o.message+'</strong></div>';
				$("#status2").remove();
				$("#message2").append(html);
				$(".form-control-feedback").css('display','none');
				//<i class="form-control-feedback glyphicon glyphicon-remove" data-bv-icon-for="addcategory" style="display: block;"></i>

				setTimeout(function(){
					$("#message2").fadeOut();
				}, 3000);
			}else{
				var html = '<div id="status2" class="alert alert-danger"><strong>'+o.message+'</strong></div>';
				$("#status2").remove();
				$("#message2").append(html);
				$(".form-control-feedback").css('display','none');
			}

			
			}, 'json');


/*
			$.ajax({
				type: "GET",
				url: "addnewsubcategoryprocess.php?category=" + addcat + "&subcategory=" + addsubcat
			}).done(function(data){
				var jsonData = JSON.parse(data);
				var result = jsonData.results[0];
				var html = '<div id="status2" class="alert alert-success"><strong>'+result.message+'</strong></div>';
				$("#status2").remove();
				$("#message2").append(html);	
			});*/
		}
	}
}

</script>
</html>
