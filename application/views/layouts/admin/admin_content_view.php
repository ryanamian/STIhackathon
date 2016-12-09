	<div id="product_view_content">
			
				
		<div id="box">
			<div class="box-top">Add product</div>
			<div class="box-panel">
				<div id="info">Product Information</div>
				<hr class="colorgraph">

				<div id="reg">
					<form action="productadd.php" method="POST">
						<div id="name">
							<div class="col-xs-6">
								<label for="pname">Product name: </label>
								<input type="text" class="form-control" id="pname" name="pname" placeholder="Type product name here...">
							</div>

							<div class="col-xs-6">
								<label for="price">Price: </label>
								<input type="number" class="form-control" id="price" name="price" placeholder="Type price here...">
							</div>
						</div>
						

						<div id="pic">
							<div class="form-group" >
								<div id="front">
									<div class="col-xs-6">
										<label for="fpic">Picture Front: </label>
										<input type="file" id="fpic" name="fpic">
									</div>
								
									<div class="col-xs-6">
										<label for="bpic">Picture rightside: </label>
										<input type="file" id="bpic" name="bpic">
									</div>
								</div>

								<div id="left">
									<div class="col-xs-6">
										<label for="lpic">Picture leftside: </label>
										<input type="file" id="lpic" name="lpic">
									</div>

									<div class="col-xs-6">
										<label for="rpic">Picture backside: </label>
										<input type="file" id="rpic" name="rpic">
									</div> 
								</div>
								
							</div>
						</div>

						

						<div id="cat">
							<div class="col-xs-4">

								<label for="category">Category:</label><br>
								<select id="category" class="form-control">
									<option value=""></option>
									
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Accessories">Accessories</option>
								</select>
							</div>


							<div class="col-xs-4">

								<label for="subcategory">Sub Category:</label><br>
								<select id="subcategory" class="form-control">
									<option value=""></option>
									
									<option value="Cocktail">Cocktail</option>
									<option value="Long Gown">Long Gown</option>
									<option value="Barong">Barong</option>
								</select>
							</div>

							<div class="col-xs-4">
								<label for="color">Color: </label>
								<input type="text" class="form-control" id="color" name="color" placeholder="Type color here...">
							</div>
							
						</div>

						<div id="ty">
							<div class="col-xs-3">
								<label for="size">Size: </label>
								<input type="number" class="form-control" id="size" name="size" placeholder="Type size here...">
							</div>
							
							<div class="col-xs-4">
								<label for="quantity">Quantity: </label>
									<input type="text" class="form-control" id="quantity" name="quantity" placeholder="Type the quantity...">
							</div>

							<div class="col-xs-4">
								<label for="status">Status: </label>
								<input type="text" class="form-control" id="status" name="status" placeholder="Type your password here...">
							</div>
						</div>
							
							<input type="submit" value="Add product" class="btn btn-success" id="addproduct">
						</div>

					</form>
				</div>
			</div>
		</div>

	</div>

</div>