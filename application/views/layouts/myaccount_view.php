

<div class="col-xs-9">
	<div class="middlebar_order">
		<div class="row">
			<div id="box">
				<div class="box-top">My account
				</div>
				<div class="box-panel">
				   <?php
						foreach ($customer_info as $object) {
							$name = $object->fname . ' ' . $object->lname;
							$gender = $object->gender;
							$age = $object->age;
							$address = $object->address;
							$city = $object->city;
							$zip_code = $object->zip_code;
							$pnumber = $object->pnumber;
							$email = $object->email;

						}

					?>
	    
					<div class="row">
						<div id="banner_customer_info" class="col-md-12">
							<label>Customer Information</label><br><br>
						</div>

						<div id="member_content" class="row"><br>
							<div class="col-md-8">
								<div class="col-md-12">
									Name: <?php echo $name;?>
								</div>

								<div class="col-md-12"><br>
									Gender: <?php echo $gender;?>
								</div>

								<div class="col-md-12"><br>
									Age: <?php echo $age;?>
								</div>	

								<div class="col-md-12"><br>
									Address: <?php echo $address;?>
								</div>

								<div class="col-md-12"><br>
									<div class="row">
										<div class="col-md-6">
											City: <?php echo $city;?>
										</div>
										
									</div>
								</div>
								<div class="col-md-12"><br>
									Zip Code: <?php echo $zip_code;?>
								</div>
								<div class="col-md-12"><br>
									Phone number: <?php echo $pnumber;?>
								</div>

								<div class="col-md-12"><br>
									Email: <?php echo $email;?>
								</div><br>
							</div>
							<div id="member_pic" class="col-md-4">
								<img src="<?php echo base_url();?>images/admin_images/profile.png" class="img-rounded" width="150px" height="150px">
							</div>
						</div>
					</div>	
				</div>  
							
					
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
