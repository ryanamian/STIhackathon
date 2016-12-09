		<div class="member_info_view">		
			<div id="box">
				<div class="box-top"><img src="<?php echo base_url();?>images/admin_images/member.png">Member Information</div>
					<div id="member_info_content">
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
						<div class="row well">
							<div id="banner_customer_info" class="col-md-12">
								<label>Customer Information</label>
							</div>

							<div id="member_content" class="row">
								<div class="col-md-8">
									<div class="col-md-12">
										<label id="member_name_label">Name: <?php echo $name;?></label>
									</div>

									<div class="col-md-12">
										<label id="member_gender_label">Gender: <?php echo $gender;?></label>
									</div>

									<div class="col-md-12">
										<label id="member_age_label">Age: <?php echo $age;?></label>	
									</div>	

									<div class="col-md-12">
										<label id="member_address_label">Address: <?php echo $address;?></label>	
									</div>

									<div class="col-md-12">
										<div class="row">
											<div class="col-md-6">
												<label id="member_city_label">City: <?php echo $city;?></label>
											</div>
											<div class="col-md-3">
												<label id="member_zipcode_label">Zip Code: <?php echo $zip_code;?></label>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<label id="member_phone_number_label">Phone number: <?php echo $pnumber;?></label>	
									</div>

									<div class="col-md-12">
										<label id="member_email_label">Email: <?php echo $email;?></label>	
									</div>
								</div>
								<div id="member_pic" class="col-md-4">
									<img src="<?php echo base_url();?>images/image1.jpg" class="img-rounded" width="150px" height="150px">
								</div>
							</div>
						</div>

						<div class="row">
							
						</div>
					</div>
				<div class="box-panel">
					<br><br>
					
				</div>
			</div>
		</div>
	</div>
</div>