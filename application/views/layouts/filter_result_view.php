<div class="col-xs-9">
	<div class="middlebar">
		<div class="row">
		<?php

			if($filter){
				foreach ($filter as $object) {
					$prodID = $object->prodID;
					$name = $object->name;
					$price = $object->price;
					$colorID = $object->colorID;

					//$colorname = $colorrow['colorname'];
					$id = base64_encode($prodID . SALT);


					echo "<div id='wew' class='col-xs-12 col-sm-6 col-md-4'>";
									
					echo"<figure>
							
							<a href='" . base_url() . "view/product?colorID=" . $colorID . "'><img width='250px' height='400px' src='". base_url() . "images/product/".$prodID."/main.png'>";
					echo "	<figcaption>
								<div id='price' class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
									".$name." <br />
									<strong>&#8369;".$price."</strong></div>
								</div>
							</figcaption></a>
						</figure>";
				}
			}else{
				echo 'Sorry no available products!';
			}			
		?>
			
		</div>
	</div>
</div>
