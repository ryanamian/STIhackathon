

			<div id="box" class="col-xs-9">
				<div class="middlebar">
					<div class="row" id="topmens">
						<div id="mens"><img id="mens_logo" src="<?php echo base_url();?>images/Black.png" width="40px" height="40px">MEN'S SECTION</div>
						

					</div>
					<div id="male" class="row">
						<?php
							foreach ($results_level1 as $object) {
								$name = $object->name;
								$price = $object->price;
								$prodID = $object->prodID;
								$colorID = $object->colorID;
								$id = base64_encode($prodID . SALT);
								echo "	<div id='wew' class='col-xs-12 col-sm-6 col-md-4'>";
								
								echo"<figure>
										<a href=" . base_url() . "view/product?colorID=" . $colorID . "><img width='250px' height='400px' src='images/product/".$prodID."/main.png'>";
								echo "	<figcaption>
											<div id='price' class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
												".$name." <br />
												<strong>&#8369;".number_format($price, 2)."</strong></div>
											</div>
										</figcaption></a>
									</figure>";
							}

						?>
					</div>
				</div>


			
				<div class="middlebar">

					<div class="row" id="topwomens">
						<div id="womens"><img src="<?php base_url();?>images/women black.png" width="40px" height="40px"> WOMEN'S SECTION</div>
							

					</div>
					<div id="female" class="row">
						<?php
							foreach ($results_level2 as $object) {
								$name = $object->name;
								$price = $object->price;
								$prodID = $object->prodID;
								$colorID = $object->colorID;
								$id = base64_encode($prodID . SALT);
								echo "	<div id='wew' class='col-xs-12 col-sm-6 col-md-4'>";
								

								echo"<figure>
										<a href=" . base_url() . "view/product?colorID=" . $colorID . "><img width='250px' height='400px' src='images/product/".$prodID."/main.png'>";
								echo "	<figcaption>
											<div id='price' class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
												".$name." <br />
												<strong>&#8369;".number_format($price, 2)."</strong></div>
											</div>
										</figcaption></a>
									</figure>";
							}

						?>
						
							
					</div>

				</div>
			</div>	
		</div>
	</div>
</div>